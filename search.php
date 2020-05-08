<?php
// tim kiem theo id categori

if ($_GET['search']) $search = $_GET['search'];
if ($_GET['id_categorie']) $id_categories = $_GET['id_categorie'];
if ($_GET['page']) $page = $_GET['page'];
if ($_GET['limit']) $limit = $_GET['limit'];
if ($_GET['price']) $price = $_GET['price'];


$result['data'] = searchWithIdCategory($conn, $search, $id_categories, $page, $limit, $price);

$json = json_encode($result);
print_r($json);

function searchWithIdCategory($conn, $search = '', $id_categories = -1, $page = 1, $limit = 12, $price = '0 AND 1000000000000000000000')
{   
    $price ? null : $price =  '0 AND 1000000000000000000000' ;
    $result = null;
    
    $search = "%" . "$search" . "%";
    $between = "`system` BETWEEN " .$price;

    if ($id_categories > -1) {
        $sql2 = "SELECT * FROM `products` WHERE  `name` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' AND $between OR `code` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' AND $between OR `screenName` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' AND $between OR `screenCam_ung` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' AND $between OR `front_cameraDoPhanGiai` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' AND $between OR `front_cameraNangCao` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' AND $between OR `front_cameraVideoCall` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' AND $between OR `back_cameraDoPhanGiai` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' AND $between OR `back_cameraNangCao` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' AND $between OR `cpu` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' AND $between OR `cpuHeDH` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' AND $between OR `cpuChipset` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' AND $between OR `cpuSpeed` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' AND $between OR `cpuChipDoHoa` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' AND $between OR `ram` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' AND $between OR `rom` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' AND $between OR `memorySD` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' AND $between OR `sim` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' AND $between OR `mangDiDong` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' AND $between OR `wifi` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' AND $between OR `gps` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' AND $between OR `bluetooth` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' AND $between OR `pinDungLuong` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' AND $between OR `pinType` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' AND $between OR `pinCongNghe` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' AND $between OR `chat_lieu` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' AND $between OR `tinh_nang_dac_biet` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' AND $between OR `thietKe` LIKE '$search' AND `categories` LIKE '%\"value\":\"$id_categories\"%' AND $between ";
    } else {
        $sql2 = "SELECT * FROM `products` WHERE 
        `name` LIKE '$search' AND $between OR 
        `code` LIKE '$search' AND $between OR 
        `screenName` LIKE '$search' AND $between OR 
        `screenCam_ung` LIKE '$search' AND $between OR 
        `front_cameraDoPhanGiai` LIKE '$search' AND $between OR 
        `front_cameraNangCao` LIKE '$search'  AND $between OR 
        `front_cameraVideoCall` LIKE '$search' AND $between OR 
        `back_cameraDoPhanGiai` LIKE '$search' AND $between OR 
        `back_cameraNangCao` LIKE '$search' AND $between OR 
        `cpu` LIKE '$search' AND $between OR 
        `cpuHeDH` LIKE '$search' AND $between OR 
        `cpuChipset` LIKE '$search' AND $between OR 
        `cpuSpeed` LIKE '$search' AND $between OR 
        `cpuChipDoHoa` LIKE '$search' AND $between OR 
        `ram` LIKE '$search' AND $between OR 
        `rom` LIKE '$search' AND $between OR 
        `memorySD` LIKE '$search' AND $between OR 
        `sim` LIKE '$search' AND $between OR 
        `mangDiDong` LIKE '$search' AND $between OR 
        `wifi` LIKE '$search' AND $between OR 
        `gps` LIKE '$search' AND $between OR 
        `bluetooth` LIKE '$search' AND $between OR 
        `pinDungLuong` LIKE '$search' AND $between OR 
        `pinType` LIKE '$search' AND $between OR 
        `pinCongNghe` LIKE '$search' AND $between OR 
        `chat_lieu` LIKE '$search' AND $between OR 
        `tinh_nang_dac_biet` LIKE '$search' AND $between OR 
        `thietKe` LIKE '$search' AND $between
        
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
    $result["sql"]=$sql2;
    return $result;
}
