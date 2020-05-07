<?php 

if($_GET['id_user']){

	$id_user = $_GET['id_user'];

	$queryCheck = "SELECT * FROM `user` WHERE `id_user` = '$id_user'";
	$in_check = $conn->query($queryCheck) or die($conn->error);
	$data = $in_check->fetch_assoc();
	if($data['id_user']){
		$id_user=$data['id_user'];
		$auth = base64_encode($data['email'] . ":" . $data['password']);
		$result['dataUser']['name']=$data["name"];
		$result['dataUser']['email']=$data['email'];
		$result['dataUser']['id_user']=$data['id_user'];
		$result['dataUser']['phone']=$data['phone'];

		$sql3 = "SELECT * FROM `orders` WHERE `dataUser` LIKE '%\"id_user\":\"$id_user\"%' ORDER BY `orders`.`Id` ASC";
		$resultz3 = $conn->query($sql3) or die($conn->error);
		
		while ($obj3 = $resultz3->fetch_assoc()) {
			$obj3['dataBill'] = json_decode($obj3['dataBill'], true);
			$var[] = $obj3;
		}
		$result['dataUser']['orders'] = $var;

	}else{
		$result['status'] = 202;
		$result['mess']="Fail";
		$result['error'] = "Không tìm thấy!";
	}
	


	
}
$json = json_encode($result);
			print_r($json);
