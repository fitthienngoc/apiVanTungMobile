<?php

if ($post_['Id']) {

    $Id = $post_['Id'];
    $content_rep = $post_['content_rep'];
    



    $queryCheck = "UPDATE `comment` SET `content_rep` = '$content_rep' WHERE `comment`.`Id` = $Id;";

    if ($conn->query($queryCheck) === TRUE) {
        $last_id = $Id;
    } else {
        die($conn->error);
    }
    if ($last_id) {
        $queryCheck = "SELECT rating FROM `products` WHERE `Id` = '$Id'";
        $in_check = $conn->query($queryCheck) or die($conn->error);
        $data = $in_check->fetch_assoc();
        $ratingOld = $data['rating'];
        $rating = ($ratingOld + $rating) / 2;
        $queryCheck = "UPDATE `products` SET `rating` = '$rating' WHERE `products`.`Id` = '$Id';";
        $in_check = $conn->query($queryCheck) or die($conn->error);


        $result['mess'] = "Success";
    } else {
        $result['status'] = 202;
        $result['mess'] = "Fail";
        $result['error'] = "Không thành công!";
    }
    

}
$json = json_encode($result);
print_r($json);
