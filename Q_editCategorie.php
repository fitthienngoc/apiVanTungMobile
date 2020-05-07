<?php 

if($_GET['id_categorie']){

	$id_categorie = $_GET['id_categorie'];

	$queryCheck = "SELECT * FROM `categories` WHERE `id_categorie` = '$id_categorie'";
	$in_check = $conn->query($queryCheck) or die($conn->error);
	$data = $in_check->fetch_assoc();
	if($data['id_categorie']){
		// $auth = base64_encode($data['email'] . ":" . $data['password']);
		$result['dataCategorie']['name']=$data["name"];
		$result['dataCategorie']['logo']=$data['logo'];
		$result['dataCategorie']['id_categorie']=$data['id_categorie'];
		$result['dataCategorie']['OPERATION']=$data['OPERATION'];
		$result['dataCategorie']['BRANDS']=$data['BRANDS'];
		$result['dataCategorie']['CATEGORIES']=$data['CATEGORIES'];
	}else{
		$result['status'] = 202;
		$result['mess']="Fail";
		$result['error'] = "Không tìm thấy!";
	}
	


	
}
$json = json_encode($result);
			print_r($json);

?>