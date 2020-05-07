<?php

if ($_SERVER['PHP_AUTH_USER']) {

    $email = $_SERVER['PHP_AUTH_USER'];
    $password = $_SERVER['PHP_AUTH_PW'];


    $queryCheck = "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'";
    $in_check = $conn->query($queryCheck) or die($conn->error);
    $data = $in_check->fetch_assoc();

    if ($data['permission'] == 'admin') {

        $id = $post_['Id'];
        $name = $post_['name'];
        $logo = $post_['logo'];
        $post_['BRANDS'] == '' ?  $BRANDS = $data['BRANDS'] : $BRANDS = $post_['BRANDS'];
        $post_['CATEGORIES'] == '' ?  $CATEGORIES = $data['CATEGORIES'] : $CATEGORIES = $post_['CATEGORIES'];
        $post_['OPERATION'] == '' ?  $OPERATION = $data['OPERATION'] : $OPERATION = $post_['OPERATION'];
        if ($id) {
            $queryCheck = "SELECT * FROM `categories` WHERE `id_categorie` = '$id'";
            $in_check = $conn->query($queryCheck) or die($conn->error);
            $data = $in_check->fetch_assoc();

            $id = $data['id_categorie'];

            $post_['name'] == '' ?  $name = $data['name'] : $name = $post_['name'];
            $post_['BRANDS'] == '' ?  $BRANDS = $data['BRANDS'] : $BRANDS = $post_['BRANDS'];
            $post_['CATEGORIES'] == '' ?  $CATEGORIES = $data['CATEGORIES'] : $CATEGORIES = $post_['CATEGORIES'];
            $post_['OPERATION'] == '' ?  $OPERATION = $data['OPERATION'] : $OPERATION = $post_['OPERATION'];

            $post_['logo'] == '' ?  $logo = $data['logo'] : $logo = $post_['logo'];



            $logo = uploadBase64($logo);



            $update = "UPDATE `categories` SET `name` = '$name', `BRANDS` = '$BRANDS', `CATEGORIES` = '$CATEGORIES', `OPERATION` = '$OPERATION', `logo` = '$logo'  WHERE `categories`.`id_categorie` = $id ;";
            // echo $update;
            $push = $conn->query($update) or die($conn->error);


            $result['mess'] = "Success";

            $result['dataCategorie']['name'] = $name;
            $result['dataCategorie']['logo'] = $logo;
            $result['dataCategorie']['id_categorie'] = $id;
        } else {

            $addNew = "INSERT INTO `categories` (`id_categorie`, `name`, `logo`, `BRANDS`, `CATEGORIES`, `OPERATION`) VALUES (NULL, '$name', '$logo', '$BRANDS', '$CATEGORIES', '$OPERATION');";
            $push = $conn->query($addNew) or die($conn->error);

            $result['mess'] = "Success";

            $result['dataCategorie']['name'] = $name;
            $result['dataCategorie']['logo'] = $logo;
        }
    } else {
        $result['status'] = 300;
        $result['mess'] = "Fail";
        $result['error'] = "Lỗi quyền truy cập!";
    }
}
$json = json_encode($result);
print_r($json);
