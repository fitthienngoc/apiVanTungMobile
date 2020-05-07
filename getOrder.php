<?php

if ($_GET['id']) {

	$id = $_GET['id'];

	$queryCheck = "SELECT * FROM `orders` WHERE `Id` = $id";
	$in_check = $conn->query($queryCheck) or die($conn->error);
	$data = $in_check->fetch_assoc();
	if ($data['Id']) {
		$data['dataUser'] = json_decode($data['dataUser'], true);
		$data['dataBill'] = json_decode($data['dataBill'], true);

		$dataProduct = $data['dataBill']['dataProduct'];
		$result['orderDetail'] = $data;
	} else {
		$result['status'] = 202;
		$result['mess'] = "Fail";
		$result['error'] = "Không tìm thấy!";
	}
}
$json = json_encode($result);
print_r($json);
