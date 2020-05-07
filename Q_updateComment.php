<?php

if ($_SERVER['PHP_AUTH_USER']) {

	$email = $_SERVER['PHP_AUTH_USER'];
	$password = $_SERVER['PHP_AUTH_PW'];


	$queryCheck = "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'";
	$in_check = $conn->query($queryCheck) or die($conn->error);
	$data = $in_check->fetch_assoc();

	if ($data['permission'] == 'admin') {

		$id = $post_['Id'];
		$verify = $post_['verify'];

		if ($verify) {
			if ($id) {
				$queryCheck = "SELECT * FROM `comment` WHERE `Id` = '$id'";
				$in_check = $conn->query($queryCheck) or die($conn->error);
				$data = $in_check->fetch_assoc();

				$id = $data['Id'];

				$post_['verify'] == '' ?  $verify = $data['verify'] : $verify = $post_['verify'];


				$update = "UPDATE `comment` SET `verify` = '$verify' WHERE `comment`.`Id` = $id ;";

				$push = $conn->query($update) or die($conn->error);


				$result['mess'] = "Success";

				$result['dataComment']['Id'] = $id;
				$result['dataComment']['verify'] = $verify;
			}
		} else {
			if ($id) {
				$queryCheck = "SELECT * FROM `comment` WHERE `Id` = '$id'";
				$in_check = $conn->query($queryCheck) or die($conn->error);
				$data = $in_check->fetch_assoc();

				$id = $data['Id'];

				$update = "DELETE FROM `comment` WHERE `comment`.`Id` = $id";
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