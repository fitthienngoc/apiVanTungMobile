<?php

if ($_GET['Id']) {

    $Id = $_GET['Id'];

    $queryCheck = "SELECT * FROM `products` WHERE `Id` = '$Id'";
    $in_check = $conn->query($queryCheck) or die($conn->error);
    $data = $in_check->fetch_assoc();


    if ($data['Id']) {
        // $auth = base64_encode($data['email'] . ":" . $data['password']);
        if ($data['back_cameraFlash'] == 1) {
            $data['back_cameraFlash'] = true;
        } else {
            $data['back_cameraFlash'] = false;
        }

        $result['mess'] = "Success";

        $result['dataProduct']['Id'] = $data['Id'];
        $result['dataProduct']['name'] = $data['name'];
        $result['dataProduct']['code'] = $data['code'];
        $result['dataProduct']['quality'] = $data['quality'];
        $result['dataProduct']['screen'] = $data['screen'];
        $result['dataProduct']['screenName'] = $data['screenName'];
        $result['dataProduct']['screenPixel'] = $data['screenPixel'];
        $result['dataProduct']['screenWidth'] = $data['screenWidth'];
        $result['dataProduct']['screenCam_ung'] = $data['screenCam_ung'];
        $result['dataProduct']['system'] = $data['system'];
        $result['dataProduct']['front_camera'] = json_decode($data['front_camera'], true);
        $result['dataProduct']['front_cameraDoPhanGiai'] = $data['front_cameraDoPhanGiai'];
        $result['dataProduct']['front_cameraVideoCall'] = $data['front_cameraVideoCall'];
        $result['dataProduct']['front_cameraFlash'] = $data['front_cameraFlash'];
        $result['dataProduct']['front_cameraNangCao'] = $data['front_cameraNangCao'];
        $result['dataProduct']['back_camera'] = $data['back_camera'];
        $result['dataProduct']['back_cameraDoPhanGiai'] = $data['back_cameraDoPhanGiai'];
        $result['dataProduct']['back_cameraQuayPhim'] = $data['back_cameraQuayPhim'];
        $result['dataProduct']['back_cameraFlash'] = $data['back_cameraFlash'];
        $result['dataProduct']['back_cameraNangCao'] = $data['back_cameraNangCao'];
        $result['dataProduct']['cpu'] = json_decode($data['cpu'], true);
        $result['dataProduct']['cpuHeDH'] = $data['cpuHeDH'];
        $result['dataProduct']['cpuChipset'] = $data['cpuChipset'];
        $result['dataProduct']['cpuSpeed'] = $data['cpuSpeed'];
        $result['dataProduct']['cpuChipDoHoa'] = $data['cpuChipDoHoa'];
        $result['dataProduct']['ram'] = $data['ram'];
        $result['dataProduct']['rom'] = $data['rom'];
        $result['dataProduct']['memorySD'] = $data['memorySD'];
        $result['dataProduct']['sim'] = $data['sim'];
        $result['dataProduct']['mangDiDong'] = $data['mangDiDong'];
        $result['dataProduct']['wifi'] = $data['wifi'];
        $result['dataProduct']['gps'] = $data['gps'];
        $result['dataProduct']['bluetooth'] = $data['bluetooth'];
        $result['dataProduct']['ketNoiKhac'] = $data['ketNoiKhac'];
        $result['dataProduct']['pin'] = $data['pin'];
        $result['dataProduct']['pinDungLuong'] = $data['pinDungLuong'];
        $result['dataProduct']['pinType'] = $data['pinType'];
        $result['dataProduct']['pinCongNghe'] = $data['pinCongNghe'];
        $result['dataProduct']['tinh_nang_dac_biet'] = $data['tinh_nang_dac_biet'];
        $result['dataProduct']['categories'] = json_decode($data['categories'], true);
        $result['dataProduct']['chat_lieu'] = $data['chat_lieu'];
        $result['dataProduct']['trong_luong'] = $data['trong_luong'];
        $result['dataProduct']['pictures'] = json_decode($data['pictures'], true);
        $result['dataProduct']['thietKe'] = $data['thietKe'];
        $result['dataProduct']['rating'] = $data['rating'];



        $sql2 = "SELECT * FROM `comment` WHERE `id_product` = '$Id'";
        $resultz2 = $conn->query($sql2) or die($conn->error);

        // echo mysqli_num_rows($resultz2);
        $total_records = mysqli_num_rows($resultz2);
        $result['dataProduct']['countRating'] = $total_records;

        // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 1000;
        $total_page = ceil($total_records / $limit);
        if ($current_page > $total_page) {
            $current_page = $total_page;
        } else if ($current_page < 1) {
            $current_page = 1;
        }
        // Tìm Start
        $start = ($current_page - 1) * $limit;
        if ($start < 0) $start = 0;


        $sql3 = "SELECT * FROM `comment` WHERE `id_product` = '$Id' LIMIT $start, $limit";
        $resultz3 = $conn->query($sql3) or die($conn->error);

        while ($obj3 = $resultz3->fetch_assoc()) {
            if ($obj3['verify'] == 1) {
                $obj3['verify'] = true;
            } else {
                $obj3['verify'] = false;
            }
            $var[] = $obj3;
        }
        $result['data_comment']['data']=$var;
        $result['data_comment']["start"] = $start;
	    $result['data_comment']["total_page"] = $total_page;
	    $result['data_comment']["current_page"] = $current_page;
	    $result['data_comment']["limit"] = $limit;
	    $result['data_comment']["total_records"] = $total_records;

    } else {
        $result['status'] = 202;
        $result['mess'] = "Fail";
        $result['error'] = "Không tìm thấy!";
    }
}
$json = json_encode($result);
print_r($json);
