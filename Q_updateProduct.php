<?php

if ($_SERVER['PHP_AUTH_USER']) {

    $email = $_SERVER['PHP_AUTH_USER'];
    $password = $_SERVER['PHP_AUTH_PW'];


    $queryCheck = "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'";
    $in_check = $conn->query($queryCheck) or die($conn->error);
    $data = $in_check->fetch_assoc();

    if ($data['permission'] == 'admin') {

        $id = $post_['Id'];


        if ($id) {
            $queryCheck = "SELECT * FROM `products` WHERE `Id` = '$id'";
            $in_check = $conn->query($queryCheck) or die($conn->error);
            $data = $in_check->fetch_assoc();

            $id = $data['Id'];

            $post_['name'] == '' ?  $name = $data['name'] : $name = $post_['name'];
            $post_['code'] == '' ?  $code = $data['code'] : $code = $post_['code'];
            $post_['quality'] == '' ?  $quality = $data['quality'] : $quality = $post_['quality'];
            $post_['screen'] == '' ?  $screen = $data['screen'] : $screen = $post_['screen'];
            $post_['screenName'] == '' ?  $screenName = $data['screenName'] : $screenName = $post_['screenName'];
            $post_['screenPixel'] == '' ?  $screenPixel = $data['screenPixel'] : $screenPixel = $post_['screenPixel'];
            $post_['screenWidth'] == '' ?  $screenWidth = $data['screenWidth'] : $screenWidth = $post_['screenWidth'];
            $post_['screenCam_ung'] == '' ?  $screenCam_ung = $data['screenCam_ung'] : $screenCam_ung = $post_['screenCam_ung'];
            $post_['system'] == '' ?  $system = $data['system'] : $system = $post_['system'];
            $post_['front_camera'] == '' ?  $front_camera = $data['front_camera'] : $front_camera = $post_['front_camera'];
            $post_['front_cameraDoPhanGiai'] == '' ?  $front_cameraDoPhanGiai = $data['front_cameraDoPhanGiai'] : $front_cameraDoPhanGiai = $post_['front_cameraDoPhanGiai'];
            $post_['front_cameraVideoCall'] == '' ?  $front_cameraVideoCall = $data['front_cameraVideoCall'] : $front_cameraVideoCall = $post_['front_cameraVideoCall'];
            $post_['front_cameraFlash'] == '' ?  $front_cameraFlash = $data['front_cameraFlash'] : $front_cameraFlash = $post_['front_cameraFlash'];
            $post_['front_cameraNangCao'] == '' ?  $front_cameraNangCao = $data['front_cameraNangCao'] : $front_cameraNangCao = $post_['front_cameraNangCao'];
            $post_['back_cameraDoPhanGiai'] == '' ?  $back_cameraDoPhanGiai = $data['back_cameraDoPhanGiai'] : $back_cameraDoPhanGiai = $post_['back_cameraDoPhanGiai'];
            $post_['back_cameraQuayPhim'] == '' ?  $back_cameraQuayPhim = $data['back_cameraQuayPhim'] : $back_cameraQuayPhim = $post_['back_cameraQuayPhim'];
            $post_['back_cameraFlash'] == '' ?  $back_cameraFlash = $data['back_cameraFlash'] : $back_cameraFlash = $post_['back_cameraFlash'];
            $post_['back_cameraNangCao'] == '' ?  $back_cameraNangCao = $data['back_cameraNangCao'] : $back_cameraNangCao = $post_['back_cameraNangCao'];
            $post_['cpu'] == '' ?  $cpu = $data['cpu'] : $cpu = $post_['cpu'];
            $post_['cpuHeDH'] == '' ?  $cpuHeDH = $data['cpuHeDH'] : $cpuHeDH = $post_['cpuHeDH'];
            $post_['cpuChipset'] == '' ?  $cpuChipset = $data['cpuChipset'] : $cpuChipset = $post_['cpuChipset'];
            $post_['cpuSpeed'] == '' ?  $cpuSpeed = $data['cpuSpeed'] : $cpuSpeed = $post_['cpuSpeed'];
            $post_['cpuChipDoHoa'] == '' ?  $cpuChipDoHoa = $data['cpuChipDoHoa'] : $cpuChipDoHoa = $post_['cpuChipDoHoa'];
            $post_['ram'] == '' ?  $ram = $data['ram'] : $ram = $post_['ram'];
            $post_['rom'] == '' ?  $rom = $data['rom'] : $rom = $post_['rom'];
            $post_['memorySD'] == '' ?  $memorySD = $data['memorySD'] : $memorySD = $post_['memorySD'];
            $post_['sim'] == '' ?  $sim = $data['sim'] : $sim = $post_['sim'];
            $post_['mangDiDong'] == '' ?  $mangDiDong = $data['mangDiDong'] : $mangDiDong = $post_['mangDiDong'];
            $post_['wifi'] == '' ?  $wifi = $data['wifi'] : $wifi = $post_['wifi'];
            $post_['gps'] == '' ?  $gps = $data['gps'] : $gps = $post_['gps'];
            $post_['bluetooth'] == '' ?  $bluetooth = $data['bluetooth'] : $bluetooth = $post_['bluetooth'];
            $post_['ketNoiKhac'] == '' ?  $ketNoiKhac = $data['ketNoiKhac'] : $ketNoiKhac = $post_['ketNoiKhac'];
            $post_['pin'] == '' ?  $pin = $data['pin'] : $pin = $post_['pin'];
            $post_['pinDungLuong'] == '' ?  $pinDungLuong = $data['pinDungLuong'] : $pinDungLuong = $post_['pinDungLuong'];
            $post_['pinType'] == '' ?  $pinType = $data['pinType'] : $pinType = $post_['pinType'];
            $post_['pinCongNghe'] == '' ?  $pinCongNghe = $data['pinCongNghe'] : $pinCongNghe = $post_['pinCongNghe'];
            $post_['tinh_nang_dac_biet'] == '' ?  $tinh_nang_dac_biet = $data['tinh_nang_dac_biet'] : $tinh_nang_dac_biet = $post_['tinh_nang_dac_biet'];
            $post_['categories'] == '' ?  $categories = $data['categories'] : $categories = $post_['categories'];
            $post_['trong_luong'] == '' ?  $trong_luong = $data['trong_luong'] : $trong_luong = $post_['trong_luong'];
            $post_['pictures'] == '' ?  $pictures = $data['pictures'] : $pictures = $post_['pictures'];
            $post_['thietKe'] == '' ?  $thietKe = $data['thietKe'] : $thietKe = $post_['thietKe'];
            $post_['chat_lieu'] == '' ?  $chat_lieu = $data['chat_lieu'] : $chat_lieu = $post_['chat_lieu'];


            $pictures = uploadListPicture($pictures);
            $front_camera_ = json_decode($front_camera, true);
            $front_camera_['base64'] = uploadBase64($front_camera_['base64']);
            $front_camera = json_encode($front_camera_);

            $update = "UPDATE `products` SET `name` = '$name' ,`code`= '$code',`quality`= '$quality',`screen`= '$screen',`screenName`= '$screenName',`screenPixel`= '$screenPixel',`screenWidth`= '$screenWidth',`screenCam_ung`= '$screenCam_ung',`system`= '$system',`front_camera`= '$front_camera',`front_cameraDoPhanGiai`= '$front_cameraDoPhanGiai',`front_cameraVideoCall`= '$front_cameraVideoCall',`front_cameraFlash`= '$front_cameraFlash',`front_cameraNangCao`= '$front_cameraNangCao',`back_camera`= '$back_camera',`back_cameraDoPhanGiai`= '$back_cameraDoPhanGiai',`back_cameraQuayPhim`= '$back_cameraQuayPhim',`back_cameraFlash`= '$back_cameraFlash',`back_cameraNangCao`= '$back_cameraNangCao',`cpu`= '$cpu',`cpuHeDH`= '$cpuHeDH',`cpuChipset`= '$cpuChipset',`cpuSpeed`= '$cpuSpeed',`cpuChipDoHoa`= '$cpuChipDoHoa',`ram`= '$ram',`rom`= '$rom',`memorySD`= '$memorySD',`sim`= '$sim',`mangDiDong`= '$mangDiDong',`wifi`= '$wifi',`gps`= '$gps',`bluetooth`= '$bluetooth',`ketNoiKhac`= '$ketNoiKhac',`pin`= '$pin',`pinDungLuong`= '$pinDungLuong',`pinType`= '$pinType',`pinCongNghe`= '$pinCongNghe',`tinh_nang_dac_biet`= '$tinh_nang_dac_biet',`categories`= '$categories',`chat_lieu`= '$chat_lieu',`trong_luong`= '$trong_luong',`pictures`= '$pictures',`thietKe`= '$thietKe'  WHERE `products`.`Id` = $id ;";
            // echo $update;
            $push = $conn->query($update) or die($conn->error);


            $result['mess'] = "Success";

            $result['dataProduct']['Id'] = $Id;
            $result['dataProduct']['name'] = $name;
            $result['dataProduct']['code'] = $code;
            $result['dataProduct']['quality'] = $quality;
            $result['dataProduct']['screen'] = $screen;
            $result['dataProduct']['screenName'] = $screenName;
            $result['dataProduct']['screenPixel'] = $screenPixel;
            $result['dataProduct']['screenWidth'] = $screenWidth;
            $result['dataProduct']['screenCam_ung'] = $screenCam_ung;
            $result['dataProduct']['system'] = $system;
            $result['dataProduct']['front_camera'] = $front_camera;
            $result['dataProduct']['front_cameraDoPhanGiai'] = $front_cameraDoPhanGiai;
            $result['dataProduct']['front_cameraVideoCall'] = $front_cameraVideoCall;
            $result['dataProduct']['front_cameraFlash'] = $front_cameraFlash;
            $result['dataProduct']['front_cameraNangCao'] = $front_cameraNangCao;
            $result['dataProduct']['back_camera'] = $back_camera;
            $result['dataProduct']['back_cameraDoPhanGiai'] = $back_cameraDoPhanGiai;
            $result['dataProduct']['back_cameraQuayPhim'] = $back_cameraQuayPhim;
            $result['dataProduct']['back_cameraFlash'] = $back_cameraFlash;
            $result['dataProduct']['back_cameraNangCao'] = $back_cameraNangCao;
            $result['dataProduct']['cpu'] = $cpu;
            $result['dataProduct']['cpuHeDH'] = $cpuHeDH;
            $result['dataProduct']['cpuChipset'] = $cpuChipset;
            $result['dataProduct']['cpuSpeed'] = $cpuSpeed;
            $result['dataProduct']['cpuChipDoHoa'] = $cpuChipDoHoa;
            $result['dataProduct']['ram'] = $ram;
            $result['dataProduct']['rom'] = $rom;
            $result['dataProduct']['memorySD'] = $memorySD;
            $result['dataProduct']['sim'] = $sim;
            $result['dataProduct']['mangDiDong'] = $mangDiDong;
            $result['dataProduct']['wifi'] = $wifi;
            $result['dataProduct']['gps'] = $gps;
            $result['dataProduct']['bluetooth'] = $bluetooth;
            $result['dataProduct']['ketNoiKhac'] = $ketNoiKhac;
            $result['dataProduct']['pin'] = $pin;
            $result['dataProduct']['pinDungLuong'] = $pinDungLuong;
            $result['dataProduct']['pinType'] = $pinType;
            $result['dataProduct']['pinCongNghe'] = $pinCongNghe;
            $result['dataProduct']['tinh_nang_dac_biet'] = $tinh_nang_dac_biet;
            $result['dataProduct']['categories'] = $categories;
            $result['dataProduct']['chat_lieu'] = $chat_lieu;
            $result['dataProduct']['trong_luong'] = $trong_luong;

            $result['dataProduct']['pictures'] = $pictures;
            $result['dataProduct']['thietKe'] = $thietKe;
        } else {
            $post_['name'] == '' ?  $name = $data['name'] : $name = $post_['name'];
            $post_['code'] == '' ?  $code = $data['code'] : $code = $post_['code'];
            $post_['quality'] == '' ?  $quality = $data['quality'] : $quality = $post_['quality'];
            $post_['screen'] == '' ?  $screen = $data['screen'] : $screen = $post_['screen'];
            $post_['screenName'] == '' ?  $screenName = $data['screenName'] : $screenName = $post_['screenName'];
            $post_['screenPixel'] == '' ?  $screenPixel = $data['screenPixel'] : $screenPixel = $post_['screenPixel'];
            $post_['screenWidth'] == '' ?  $screenWidth = $data['screenWidth'] : $screenWidth = $post_['screenWidth'];
            $post_['screenCam_ung'] == '' ?  $screenCam_ung = $data['screenCam_ung'] : $screenCam_ung = $post_['screenCam_ung'];
            $post_['system'] == '' ?  $system = $data['system'] : $system = $post_['system'];
            $post_['front_camera'] == '' ?  $front_camera = $data['front_camera'] : $front_camera = $post_['front_camera'];
            $post_['front_cameraDoPhanGiai'] == '' ?  $front_cameraDoPhanGiai = $data['front_cameraDoPhanGiai'] : $front_cameraDoPhanGiai = $post_['front_cameraDoPhanGiai'];
            $post_['front_cameraVideoCall'] == '' ?  $front_cameraVideoCall = $data['front_cameraVideoCall'] : $front_cameraVideoCall = $post_['front_cameraVideoCall'];
            $post_['front_cameraFlash'] == '' ?  $front_cameraFlash = $data['front_cameraFlash'] : $front_cameraFlash = $post_['front_cameraFlash'];
            $post_['front_cameraNangCao'] == '' ?  $front_cameraNangCao = $data['front_cameraNangCao'] : $front_cameraNangCao = $post_['front_cameraNangCao'];
            $post_['back_cameraDoPhanGiai'] == '' ?  $back_cameraDoPhanGiai = $data['back_cameraDoPhanGiai'] : $back_cameraDoPhanGiai = $post_['back_cameraDoPhanGiai'];
            $post_['back_cameraQuayPhim'] == '' ?  $back_cameraQuayPhim = $data['back_cameraQuayPhim'] : $back_cameraQuayPhim = $post_['back_cameraQuayPhim'];
            $post_['back_cameraFlash'] == '' ?  $back_cameraFlash = $data['back_cameraFlash'] : $back_cameraFlash = $post_['back_cameraFlash'];
            $post_['back_cameraNangCao'] == '' ?  $back_cameraNangCao = $data['back_cameraNangCao'] : $back_cameraNangCao = $post_['back_cameraNangCao'];
            $post_['cpu'] == '' ?  $cpu = $data['cpu'] : $cpu = $post_['cpu'];
            $post_['cpuHeDH'] == '' ?  $cpuHeDH = $data['cpuHeDH'] : $cpuHeDH = $post_['cpuHeDH'];
            $post_['cpuChipset'] == '' ?  $cpuChipset = $data['cpuChipset'] : $cpuChipset = $post_['cpuChipset'];
            $post_['cpuSpeed'] == '' ?  $cpuSpeed = $data['cpuSpeed'] : $cpuSpeed = $post_['cpuSpeed'];
            $post_['cpuChipDoHoa'] == '' ?  $cpuChipDoHoa = $data['cpuChipDoHoa'] : $cpuChipDoHoa = $post_['cpuChipDoHoa'];
            $post_['ram'] == '' ?  $ram = $data['ram'] : $ram = $post_['ram'];
            $post_['rom'] == '' ?  $rom = $data['rom'] : $rom = $post_['rom'];
            $post_['memorySD'] == '' ?  $memorySD = $data['memorySD'] : $memorySD = $post_['memorySD'];
            $post_['sim'] == '' ?  $sim = $data['sim'] : $sim = $post_['sim'];
            $post_['mangDiDong'] == '' ?  $mangDiDong = $data['mangDiDong'] : $mangDiDong = $post_['mangDiDong'];
            $post_['wifi'] == '' ?  $wifi = $data['wifi'] : $wifi = $post_['wifi'];
            $post_['gps'] == '' ?  $gps = $data['gps'] : $gps = $post_['gps'];
            $post_['bluetooth'] == '' ?  $bluetooth = $data['bluetooth'] : $bluetooth = $post_['bluetooth'];
            $post_['ketNoiKhac'] == '' ?  $ketNoiKhac = $data['ketNoiKhac'] : $ketNoiKhac = $post_['ketNoiKhac'];
            $post_['pin'] == '' ?  $pin = $data['pin'] : $pin = $post_['pin'];
            $post_['pinDungLuong'] == '' ?  $pinDungLuong = $data['pinDungLuong'] : $pinDungLuong = $post_['pinDungLuong'];
            $post_['pinType'] == '' ?  $pinType = $data['pinType'] : $pinType = $post_['pinType'];
            $post_['pinCongNghe'] == '' ?  $pinCongNghe = $data['pinCongNghe'] : $pinCongNghe = $post_['pinCongNghe'];
            $post_['tinh_nang_dac_biet'] == '' ?  $tinh_nang_dac_biet = $data['tinh_nang_dac_biet'] : $tinh_nang_dac_biet = $post_['tinh_nang_dac_biet'];
            $post_['categories'] == '' ?  $categories = $data['categories'] : $categories = $post_['categories'];
            $post_['chat_lieu'] == '' ?  $chat_lieu = $data['chat_lieu'] : $chat_lieu = $post_['chat_lieu'];
            $post_['trong_luong'] == '' ?  $trong_luong = $data['trong_luong'] : $trong_luong = $post_['trong_luong'];
            $post_['pictures'] == '' ?  $pictures = $data['pictures'] : $pictures = $post_['pictures'];
            $post_['thietKe'] == '' ?  $thietKe = $data['thietKe'] : $thietKe = $post_['thietKe'];
            $pictures = uploadListPicture($pictures);
            

            
            $addNew = "INSERT INTO `products` (`Id`,`name`,`code`,`quality`,`screen`,`screenName`,`screenPixel`,`screenWidth`,`screenCam_ung`,`system`,`front_camera`,`front_cameraDoPhanGiai`,`front_cameraVideoCall`,`front_cameraFlash`,`front_cameraNangCao`,`back_camera`,`back_cameraDoPhanGiai`,`back_cameraQuayPhim`,`back_cameraFlash`,`back_cameraNangCao`,`cpu`,`cpuHeDH`,`cpuChipset`,`cpuSpeed`,`cpuChipDoHoa`,`ram`,`rom`,`memorySD`,`sim`,`mangDiDong`,`wifi`,`gps`,`bluetooth`,`ketNoiKhac`,`pin`,`pinDungLuong`,`pinType`,`pinCongNghe`,`tinh_nang_dac_biet`,`categories`,`chat_lieu`,`trong_luong`,`pictures`,`thietKe`) VALUES (NULL,'$name','$code','$quality','$screen','$screenName','$screenPixel','$screenWidth','$screenCam_ung','$system','$front_camera','$front_cameraDoPhanGiai','$front_cameraVideoCall','$front_cameraFlash','$front_cameraNangCao','$back_camera','$back_cameraDoPhanGiai','$back_cameraQuayPhim','$back_cameraFlash','$back_cameraNangCao','$cpu','$cpuHeDH','$cpuChipset','$cpuSpeed','$cpuChipDoHoa','$ram','$rom','$memorySD','$sim','$mangDiDong','$wifi','$gps','$bluetooth','$ketNoiKhac','$pin','$pinDungLuong','$pinType','$pinCongNghe','$tinh_nang_dac_biet','$categories','$chat_lieu','$trong_luong','$pictures','$thietKe');";
            $push = $conn->query($addNew) or die($conn->error);

            $result['mess'] = "Success";

            $result['dataProduct']['name'] = $name;
            $result['dataProduct']['code'] = $code;
            $result['dataProduct']['quality'] = $quality;
            $result['dataProduct']['screen'] = $screen;
            $result['dataProduct']['screenName'] = $screenName;
            $result['dataProduct']['screenPixel'] = $screenPixel;
            $result['dataProduct']['screenWidth'] = $screenWidth;
            $result['dataProduct']['screenCam_ung'] = $screenCam_ung;
            $result['dataProduct']['system'] = $system;
            $result['dataProduct']['front_camera'] = $front_camera;
            $result['dataProduct']['front_cameraDoPhanGiai'] = $front_cameraDoPhanGiai;
            $result['dataProduct']['front_cameraVideoCall'] = $front_cameraVideoCall;
            $result['dataProduct']['front_cameraFlash'] = $front_cameraFlash;
            $result['dataProduct']['front_cameraNangCao'] = $front_cameraNangCao;
            $result['dataProduct']['back_camera'] = $back_camera;
            $result['dataProduct']['back_cameraDoPhanGiai'] = $back_cameraDoPhanGiai;
            $result['dataProduct']['back_cameraQuayPhim'] = $back_cameraQuayPhim;
            $result['dataProduct']['back_cameraFlash'] = $back_cameraFlash;
            $result['dataProduct']['back_cameraNangCao'] = $back_cameraNangCao;
            $result['dataProduct']['cpu'] = $cpu;
            $result['dataProduct']['cpuHeDH'] = $cpuHeDH;
            $result['dataProduct']['cpuChipset'] = $cpuChipset;
            $result['dataProduct']['cpuSpeed'] = $cpuSpeed;
            $result['dataProduct']['cpuChipDoHoa'] = $cpuChipDoHoa;
            $result['dataProduct']['ram'] = $ram;
            $result['dataProduct']['rom'] = $rom;
            $result['dataProduct']['memorySD'] = $memorySD;
            $result['dataProduct']['sim'] = $sim;
            $result['dataProduct']['mangDiDong'] = $mangDiDong;
            $result['dataProduct']['wifi'] = $wifi;
            $result['dataProduct']['gps'] = $gps;
            $result['dataProduct']['bluetooth'] = $bluetooth;
            $result['dataProduct']['ketNoiKhac'] = $ketNoiKhac;
            $result['dataProduct']['pin'] = $pin;
            $result['dataProduct']['pinDungLuong'] = $pinDungLuong;
            $result['dataProduct']['pinType'] = $pinType;
            $result['dataProduct']['pinCongNghe'] = $pinCongNghe;
            $result['dataProduct']['tinh_nang_dac_biet'] = $tinh_nang_dac_biet;
            $result['dataProduct']['categories'] = $categories;
            $result['dataProduct']['chat_lieu'] = $chat_lieu;
            $result['dataProduct']['trong_luong'] = $trong_luong;
            $result['dataProduct']['pictures'] = $pictures;
            $result['dataProduct']['thietKe'] = $thietKe;
        }
    } else {
        $result['status'] = 300;
        $result['mess'] = "Fail";
        $result['error'] = "Lỗi quyền truy cập!";
    }
}
$json = json_encode($result);
print_r($json);
