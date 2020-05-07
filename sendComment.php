<?php

if ($post_['Id_product']) {

    $Id_product = $post_['Id_product'];
    $fullName = $post_['fullName'];
    $phone = $post_['phone'];
    $title_comment = $post_['title_comment'];
    $content = $post_['content'];
    $id_user = $post_['id_user'];
    $rating = $post_['rating'];
    $time = $post_['time'];



    $queryCheck = "INSERT INTO `comment` (`Id`, `user`, `content`, `verify`, `rating`, `id_product`, `fullName`,`time`) VALUES (NULL, '$id_user', '$content', '', '$rating', '$Id_product', '$fullName','$time');";

    if ($conn->query($queryCheck) === TRUE) {
        $last_id = $conn->insert_id;
    } else {
        die($conn->error);
    }
    if ($last_id) {
        $queryCheck = "SELECT rating FROM `products` WHERE `Id` = '$Id_product'";
        $in_check = $conn->query($queryCheck) or die($conn->error);
        $data = $in_check->fetch_assoc();
        $ratingOld = $data['rating'];
        $rating = ($ratingOld + $rating) / 2;
        $queryCheck = "UPDATE `products` SET `rating` = '$rating' WHERE `products`.`Id` = '$Id_product';";
        $in_check = $conn->query($queryCheck) or die($conn->error);


        $result['mess'] = "Success";
    } else {
        $result['status'] = 202;
        $result['mess'] = "Fail";
        $result['error'] = "Không thành công!";
    }
    // if($data['id_categorie']){
    // 	// $auth = base64_encode($data['email'] . ":" . $data['password']);
    // 	$result['dataCategorie']['name']=$data["name"];
    // 	$result['dataCategorie']['logo']=$data['logo'];
    // 	$result['dataCategorie']['id_categorie']=$data['id_categorie'];
    // }else{
    // 	$result['status'] = 202;
    // 	$result['mess']="Fail";
    // 	$result['error'] = "Không tìm thấy!";
    // }




}
$json = json_encode($result);
print_r($json);
