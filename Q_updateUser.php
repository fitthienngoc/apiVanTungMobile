<?php 

if($_SERVER['PHP_AUTH_USER']){

	$email = $_SERVER['PHP_AUTH_USER'];
	$password = $_SERVER['PHP_AUTH_PW'];
	

	$queryCheck = "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'";
	$in_check = $conn->query($queryCheck) or die($conn->error);
	$data = $in_check->fetch_assoc();

	if ($data['permission'] == 'admin') {

		$id_user=$_GET['id_user'];
		if ($id_user) {
		 	$queryCheck = "SELECT * FROM `user` WHERE `id_user` = '$id_user'";
			$in_check = $conn->query($queryCheck) or die($conn->error);
			$data = $in_check->fetch_assoc();

			$id_user=$data['id_user'];

			$_GET['name'] == '' ?  $name = $data['name'] : $name = $_GET['name'];
			$_GET['phone'] == '' ?  $phone = $data['phone'] : $phone = $_GET['phone'];
			$_GET['email'] == '' ?  $email = $data['email'] : $email = $_GET['email'];
			$_GET['password'] == '' ?  $password = $data['password'] : $password = $_GET['password'];
			$_GET['permission'] == '' ?  $permission = $data['permission'] : $permission = $_GET['permission'];

			$update = "UPDATE `user` SET `name` = '$name', `phone` = '$phone',`email`='$email',`password`='$password',`permission`='$permission' WHERE `user`.`id_user` = $id_user ;";
			// echo $update;
			$push = $conn->query($update) or die($conn->error);
			

			$result['mess']="Success";
			// $auth = base64_encode($email . ":" . $password);
			// $result['dataUser']['authenticate']="Basic $auth";
			$result['dataUser']['name']=$name;
			$result['dataUser']['email']=$email;
			$result['dataUser']['id_user']=$id_user;
			$result['dataUser']['phone']=$phone;

		} else{
				$result['status'] = 202;
				$result['mess']="Fail";
				$result['error'] = "Không tồn tại!";
			}
		
	}else{
		$result['status'] = 300;
		$result['mess']="Fail";
		$result['error'] = "Lỗi quyền truy cập!";
	}


	
}
$json = json_encode($result);
			print_r($json);
?>