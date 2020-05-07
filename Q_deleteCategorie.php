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
            $queryCheck = "SELECT * FROM `categories` WHERE `id_categorie` = '$id'";
            $in_check = $conn->query($queryCheck) or die($conn->error);
            $data = $in_check->fetch_assoc();

            $id = $data['id_categorie'];

            $update = "DELETE FROM `categories` WHERE `categories`.`id_categorie` = $id";
            // echo $update;
            $push = $conn->query($update) or die($conn->error);


            $result['mess'] = "Success";
        } else {
            $result['status'] = 202;
            $result['mess'] = "Fail";
            $result['error'] = "Không tìm thấy!";
        }
    } else {
        $result['status'] = 300;
        $result['mess'] = "Fail";
        $result['error'] = "Lỗi quyền truy cập!";
    }
}
$json = json_encode($result);
print_r($json);
