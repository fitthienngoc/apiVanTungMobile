<?php 

if($_GET['id_user']){

	$id_user = $_GET['id_user'];

	$queryCheck = "SELECT * FROM `user` WHERE `id_user` = '$id_user'";
	$in_check = $conn->query($queryCheck) or die($conn->error);
	$data = $in_check->fetch_assoc();
	if($data['id_user']){
		// $auth = base64_encode($data['email'] . ":" . $data['password']);
		$result['dataUser']['name']=$data["name"];
		$result['dataUser']['email']=$data['email'];
		$result['dataUser']['id_user']=$data['id_user'];
		$result['dataUser']['phone']=$data['phone'];
	}else{
		$result['status'] = 202;
		$result['mess']="Fail";
		$result['error'] = "Không tìm thấy!";
	}
	


	
}
$json = json_encode($result);
			print_r($json);

?>