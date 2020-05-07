<?php
set_time_limit(0);
if ($post_['data']) {

    $data = $post_['data'];
    $dataUser = $data['dataUser'];

    $dataBill = json_decode($data['dataBill'], true);
    $dataProduct = $dataBill['dataProduct'];
    $orderOnline = $data['orderOnline'];


    foreach ($dataProduct as $value) {
        $Id_product = $value['Id'];
        $color_by_product = $value['color_by'];
        $quality_by_product = $value['quality_by'];
        $IdNow_product = $value['IdNow'];

        $queryCheck = "SELECT * FROM `products` WHERE Id =  $Id_product";
        $in_check = $conn->query($queryCheck) or die($conn->error);
        $data_ = $in_check->fetch_assoc();

        // $queryCheck = "SELECT `order_count` FROM `products` WHERE Id =  $Id_product";
        // $in_check = $conn->query($queryCheck) or die($conn->error);
        // $data_ = $in_check->fetch_assoc();
        $sluongConlai= $data_['quality'] - $quality_by_product;
        $quality = $quality_by_product + $data_['order_count'];

        $queryCheck_ = "UPDATE `products` SET `order_count` = '$quality',`quality` = '$sluongConlai' WHERE `products`.`Id` = $Id_product;";
        $in_check_ = $conn->query($queryCheck_) or die($conn->error);
    }


    $dataUser = $data['dataUser'];
    $dataBill = $data['dataBill'];
    $dataProduct = $dataBill['dataProduct'];


    $addNew = "INSERT INTO `orders` (`Id`, `dataUser`, `dataBill`, `orderOnline`) VALUES (NULL, '$dataUser', '$dataBill', '$orderOnline');";
    // echo $addNew;
    // $push = $conn->query($addNew) or die($conn->error);
    if ($conn->query($addNew) === TRUE) {
        $last_id = $conn->insert_id;
        $result['mess'] = "Success";
        $result['Id'] = $last_id;
    } else {
        die($conn->error);
    }

    
} else {
    $result['status'] = 202;
    $result['mess'] = "Fail";
    $result['error'] = "Không tìm thấy!";
}
$json = json_encode($result);
print_r($json);
