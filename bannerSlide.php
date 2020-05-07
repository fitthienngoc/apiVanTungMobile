<?php
$queryCheck = "SELECT * FROM `products` WHERE `categories` LIKE '%\"value\":\"11\"%'";
$in_check = $conn->query($queryCheck) or die($conn->error);
while ($obj3 = $in_check->fetch_assoc()) {


    $obj3['pictures'] = json_decode($obj3['pictures'], true);
    $obj3['categories'] = json_decode($obj3['categories'], true);
    $obj3['front_camera'] = json_decode($obj3['front_camera'], true);
    $obj3['cpu'] = json_decode($obj3['cpu'], true);
    $var[] = $obj3;
}

$queryCheck = "SELECT * FROM `products` WHERE `categories` LIKE '%\"value\":\"10\"%'";
$in_check = $conn->query($queryCheck) or die($conn->error);
while ($obj3 = $in_check->fetch_assoc()) {

    $obj3['pictures'] = json_decode($obj3['pictures'], true);
    $obj3['categories'] = json_decode($obj3['categories'], true);
    $obj3['cpu'] = json_decode($obj3['cpu'], true);
    $obj3['front_camera'] = json_decode($obj3['front_camera'], true);
    $var2[] = $obj3;
}

$queryCheck = "SELECT * FROM `products` WHERE `categories` LIKE '%\"value\":\"12\"%'";
$in_check = $conn->query($queryCheck) or die($conn->error);
while ($obj3 = $in_check->fetch_assoc()) {

    $obj3['pictures'] = json_decode($obj3['pictures'], true);
    $obj3['categories'] = json_decode($obj3['categories'], true);
    $obj3['cpu'] = json_decode($obj3['cpu'], true);
    $obj3['front_camera'] = json_decode($obj3['front_camera'], true);
    $var3[] = $obj3;
}

$queryCheck = "SELECT * FROM `products` WHERE `categories` LIKE '%\"value\":\"14\"%' AND `categories` LIKE '%\"value\":\"11\"%'";
$in_check = $conn->query($queryCheck) or die($conn->error);
while ($obj3 = $in_check->fetch_assoc()) {

    $obj3['pictures'] = json_decode($obj3['pictures'], true);
    $obj3['categories'] = json_decode($obj3['categories'], true);
    $obj3['cpu'] = json_decode($obj3['cpu'], true);
    $obj3['front_camera'] = json_decode($obj3['front_camera'], true);
    $var4[] = $obj3;
}


$queryCheck = "SELECT * FROM `products` ORDER BY rating DESC limit 4";
$in_check = $conn->query($queryCheck) or die($conn->error);
while ($obj3 = $in_check->fetch_assoc()) {

    $obj3['pictures'] = json_decode($obj3['pictures'], true);
    $obj3['categories'] = json_decode($obj3['categories'], true);
    $obj3['cpu'] = json_decode($obj3['cpu'], true);
    $obj3['front_camera'] = json_decode($obj3['front_camera'], true);
    $var5[] = $obj3;
}

$queryCheck = "SELECT * FROM `products` ORDER BY RAND ()  limit 4";
$in_check = $conn->query($queryCheck) or die($conn->error);
while ($obj3 = $in_check->fetch_assoc()) {

    $obj3['pictures'] = json_decode($obj3['pictures'], true);
    $obj3['categories'] = json_decode($obj3['categories'], true);
    $obj3['cpu'] = json_decode($obj3['cpu'], true);
    $obj3['front_camera'] = json_decode($obj3['front_camera'], true);
    $var6[] = $obj3;
}

$queryCheck = "SELECT * FROM `products` ORDER BY system DESC limit 4";
$in_check = $conn->query($queryCheck) or die($conn->error);
while ($obj3 = $in_check->fetch_assoc()) {

    $obj3['pictures'] = json_decode($obj3['pictures'], true);
    $obj3['categories'] = json_decode($obj3['categories'], true);
    $obj3['cpu'] = json_decode($obj3['cpu'], true);
    $obj3['front_camera'] = json_decode($obj3['front_camera'], true);
    $var7[] = $obj3;
}

$result['data']["data_banner1"] = $var;
$result['data']["data_banner2"] = $var2;
$result['data']["data_hot"] = $var3;
$result['data']["data_tablet"] = $var4;
$result['data']["data_orderBy_rating"] = $var5; //limit=4
$result['data']["data_orderBy_rand"] = $var6; //limit=4
$result['data']["data_orderBy_cost"] = $var7; //limit=4

$json = json_encode($result);
print_r($json);
