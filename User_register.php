<?php 

if($_GET['name'] && $_GET['email'] && $_GET['password']){
	$email = $_GET['email'];
	$password = $_GET['password'];
	$name = $_GET['name'];
	$phone = $_GET['phone'];
	$queryCheckMail = "SELECT * FROM `user` WHERE `email` LIKE '$email' ";
	$in_check = $conn->query($queryCheckMail) or die($conn->error);
	$data = $in_check->fetch_assoc();
	if ($data == NULL) {
		$addUser = "INSERT INTO `user` (`id_user`, `name`, `email`, `password`, `phone`, `permission`) VALUES (NULL, '$name', '$email', '$password', '$phone', '');";

		$in_check = $conn->query($addUser) or die($conn->error);
		// $dataU = $in_check->fetch_assoc();

		$result['mess']="Success";
		$auth = base64_encode($email . ":" . $password);
		$result['dataUser']['authenticate']="Basic $auth";
		$result['dataUser']['name']=$name;
		$result['dataUser']['email']=$email;
		//$result['dataUser']['id_user']=$dataU['id_user'];
		$result['dataUser']['phone']=$phone;
	}else{
		$result['status'] = '201';
		$result['mess']="Fail";
		$result['error'] = "Email đã tồn tại";
	}


	
}
$json = json_encode($result);
			print_r($json);
?>