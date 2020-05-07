<?php

error_reporting(0);


$sql3 = "SELECT * FROM `categories` WHERE `CATEGORIES` = 1";
$resultz3 = $conn->query($sql3) or die($conn->error);
while ($obj3 = $resultz3->fetch_assoc()) {
    $var[] = $obj3;
}

$result['data']['CATEGORIES'] = $var;


$sql3 = "SELECT * FROM `categories` WHERE `BRANDS` = 1";
$resultz3 = $conn->query($sql3) or die($conn->error);
while ($obj3 = $resultz3->fetch_assoc()) {
    $var2[] = $obj3;
}

$result['data']['BRANDS'] = $var2;

$sql3 = "SELECT * FROM `categories` WHERE `OPERATION` = 1";
$resultz3 = $conn->query($sql3) or die($conn->error);
while ($obj3 = $resultz3->fetch_assoc()) {
    $var3[] = $obj3;
}

$result['data']['OPERATION'] = $var3;



$json = json_encode($result);
print_r($json);

?>