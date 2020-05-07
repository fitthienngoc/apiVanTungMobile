<?php

if ($_SERVER['PHP_AUTH_USER']) {

	$email = $_SERVER['PHP_AUTH_USER'];
	$password = $_SERVER['PHP_AUTH_PW'];


	$queryCheck = "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'";
	$in_check = $conn->query($queryCheck) or die($conn->error);
	$data = $in_check->fetch_assoc();

	if ($data['permission'] == 'admin') {

		$id = $post_['Id'];
		$status = $post_['verify'];
        // echo $status.'xxxx';
		if ($status) {
			if ($id) {
				$queryCheck = "SELECT * FROM `orders` WHERE `Id` = '$id'";
				$in_check = $conn->query($queryCheck) or die($conn->error);
				$data = $in_check->fetch_assoc();

				$id = $data['Id'];

				$update = "UPDATE `orders` SET `status` = '$status' WHERE `orders`.`Id` = $id ;";

				$push = $conn->query($update) or die($conn->error);


				$result['mess'] = "Success";

				$result['dataOrders']['Id'] = $id;
				$result['dataOrders']['status'] = $status;
			}
		} else {
			if ($id) {
				$queryCheck = "SELECT * FROM `orders` WHERE `Id` = '$id'";
				$in_check = $conn->query($queryCheck) or die($conn->error);
				$data = $in_check->fetch_assoc();

				$id = $data['Id'];

				$update = "DELETE FROM `orders` WHERE `orders`.`Id` = $id";
				// echo $update;
				$push = $conn->query($update) or die($conn->error);

				$result['mess'] = "Success";
			}
		}
	} else {
		$result['status'] = 300;
		$result['mess'] = "Fail";
		$result['error'] = "Lỗi quyền truy cập!";
	}
}
$json = json_encode($result);
print_r($json);

?>