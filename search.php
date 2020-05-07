<?php
// tim kiem theo id categori

if ($_GET['search']) $search = $_GET['search'];
if ($_GET['id_categorie']) $id_categories = $_GET['id_categorie'];
if ($_GET['page']) $page = $_GET['page'];
if ($_GET['limit']) $limit = $_GET['limit'];


$result['data'] = searchWithIdCategory($conn, $search, $id_categories, $page,$limit);

$json = json_encode($result);
print_r($json);

function searchWithIdCategory($conn, $search = '', $id_categories = -1, $page = 1,$limit=12)
{
    $result = null;
    $search = "%" . "$search" . "%";
    if ($id_categories > -1) {
        $sql2 = "SELECT * FROM `products` WHERE 
        `name` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' OR 
        `code` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' OR 
        `screenName` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' OR 
        `screenCam_ung` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' OR 
        `front_cameraDoPhanGiai` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' OR 
        `front_cameraNangCao` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' OR 
        `front_cameraVideoCall` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' OR 
        `back_cameraDoPhanGiai` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' OR 
        `back_cameraNangCao` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' OR 
        `cpu` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' OR 
        `cpuHeDH` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' OR 
        `cpuChipset` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' OR 
        `cpuSpeed` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' OR 
        `cpuChipDoHoa` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' OR 
        `ram` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' OR 
        `rom` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' OR 
        `memorySD` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' OR 
        `sim` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' OR 
        `mangDiDong` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' OR 
        `wifi` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' OR 
        `gps` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' OR 
        `bluetooth` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' OR 
        `pinDungLuong` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' OR 
        `pinType` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' OR 
        `pinCongNghe` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' OR 
        `chat_lieu` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' OR 
        `tinh_nang_dac_biet` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' OR 
        `thietKe` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%'
        ";
    } else {
        $sql2 = "SELECT * FROM `products` WHERE 
        `name` LIKE '$search' OR 
        `code` LIKE '$search' OR 
        `screenName` LIKE '$search' OR 
        `screenCam_ung` LIKE '$search' OR 
        `front_cameraDoPhanGiai` LIKE '$search' OR 
        `front_cameraNangCao` LIKE '$search' OR 
        `front_cameraVideoCall` LIKE '$search' OR 
        `back_cameraDoPhanGiai` LIKE '$search' OR 
        `back_cameraNangCao` LIKE '$search' OR 
        `cpu` LIKE '$search' OR 
        `cpuHeDH` LIKE '$search' OR 
        `cpuChipset` LIKE '$search' OR 
        `cpuSpeed` LIKE '$search' OR 
        `cpuChipDoHoa` LIKE '$search' OR 
        `ram` LIKE '$search' OR 
        `rom` LIKE '$search' OR 
        `memorySD` LIKE '$search' OR 
        `sim` LIKE '$search' OR 
        `mangDiDong` LIKE '$search' OR 
        `wifi` LIKE '$search' OR 
        `gps` LIKE '$search' OR 
        `bluetooth` LIKE '$search' OR 
        `pinDungLuong` LIKE '$search' OR 
        `pinType` LIKE '$search' OR 
        `pinCongNghe` LIKE '$search' OR 
        `chat_lieu` LIKE '$search' OR 
        `tinh_nang_dac_biet` LIKE '$search' OR 
        `thietKe` LIKE '$search'
        
        ";
    }



    $resultz2 = $conn->query($sql2) or die($conn->error);

    // echo mysqli_num_rows($resultz2);
    $total_records = mysqli_num_rows($resultz2);;

    // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
    $current_page = isset($page) ? $page : 1;

    $total_page = ceil($total_records / $limit);
    if ($current_page > $total_page) {
        $current_page = $total_page;
    } else if ($current_page < 1) {
        $current_page = 1;
    }
    // Tìm Start
    $start = ($current_page - 1) * $limit;
    if ($start < 0) $start = 0;

    $sql3 = $sql2 . "LIMIT $start, $limit";
    $resultz3 = $conn->query($sql3) or die($conn->error);



    while ($obj3 = $resultz3->fetch_assoc()) {
        $obj3['pictures'] = json_decode($obj3['pictures'], true);
        $obj3['categories'] = json_decode($obj3['categories'], true);
        $obj3['cpu'] = json_decode($obj3['cpu'], true);
        $obj3['front_camera'] = json_decode($obj3['front_camera'], true);
        $var[] = $obj3;
    }

    $result['data']["start"] = $start;
    $result['data']["total_page"] = $total_page;
    $result['data']["current_page"] = $current_page;
    $result['data']["limit"] = $limit;
    $result['data']["total_records"] = $total_records;
    $result['data']["data"] = $var;

    return $result;
}
