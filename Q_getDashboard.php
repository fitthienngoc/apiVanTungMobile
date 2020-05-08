<?php 


error_reporting(0);
if($_SERVER['PHP_AUTH_USER']){

	$email = $_SERVER['PHP_AUTH_USER'];
	$password = $_SERVER['PHP_AUTH_PW'];
	$search = $_GET['search'];
	$queryCheck = "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'";
	$in_check = $conn->query($queryCheck) or die($conn->error);
	$data = $in_check->fetch_assoc();

	if ($data['permission'] == 'admin') {

		$sql2="SELECT Id FROM `orders` WHERE `status` = 0";
		$sql3= $sql2;
		$resultz3 = $conn->query($sql3) or die($conn->error);
		$total_records = mysqli_num_rows($resultz3);
	    

		$result['data']["wating_order"] = $total_records;
		$result['data']["orderData"]["wating_order"] = $total_records;

		//
		$var=[];
		$sql2="SELECT Id FROM `orders` WHERE `status` = 3";
		$sql3= $sql2;
		$resultz3 = $conn->query($sql3) or die($conn->error);
		$total_records = mysqli_num_rows($resultz3);
	    

		$result['data']["finished_order"] = $total_records;
		$result['data']["orderData"]["finished_order"] = $total_records;
		
		//
		$var=[];
		$sql2="SELECT Id FROM `orders` WHERE `status` = 1";
		$sql3= $sql2;
		$resultz3 = $conn->query($sql3) or die($conn->error);
		$total_records = mysqli_num_rows($resultz3);
	    

		$result['data']["orderData"]["shipping_order"] = $total_records;
		//
		$var=[];
		$sql2="SELECT Id FROM `orders` WHERE `status` = 2";
		$sql3= $sql2;
		$resultz3 = $conn->query($sql3) or die($conn->error);
		$total_records = mysqli_num_rows($resultz3);
	    

		$result['data']["orderData"]["cancled_order"] = $total_records;
		
		//
		$var=[];
		$sql2="SELECT Id FROM `comment` WHERE `verify` = 0";
		$sql3= $sql2;
		$resultz3 = $conn->query($sql3) or die($conn->error);
		
	    $total_records = mysqli_num_rows($resultz3);

		$result['data']["wating_comment"] = $total_records;
		
		//
		$var=[];
		$sql2="SELECT * FROM `orders` ORDER BY `Id` DESC LIMIT 10";
		$sql3= $sql2;
		$resultz3 = $conn->query($sql3) or die($conn->error);
		
		$total_records = mysqli_num_rows($resultz3);
		
		while ($obj3 = $resultz3->fetch_assoc()) {
			$obj3['dataUser'] = json_decode($obj3['dataUser'], true);
			$obj3['dataBill'] = json_decode($obj3['dataBill'], true);

			$dataProduct = $obj3['dataBill']['dataProduct'];

			$i=0;
			foreach ($dataProduct as $value) {
				$Id_product = $value['Id'];
				$obj3['dataBill']['dataProduct'][$i++]['detailProduct'] = getProduct($conn,$Id_product);
			}

			$var[] = $obj3;
		}

	    $result['data']["recent_order"] = $var;
		//
		$var=[];
		$sql2="SELECT * FROM `user` ORDER BY `id_user` DESC LIMIT 10";
		$sql3= $sql2;
		$resultz3 = $conn->query($sql3) or die($conn->error);
		
		$total_records = mysqli_num_rows($resultz3);
		
		while ($obj3 = $resultz3->fetch_assoc()) {
			$var[] = $obj3;
		}

	    $result['data']["recent_user"] = $var;
		//
		$var=[];
		$sql2="SELECT * FROM `comment` ORDER BY `Id` DESC LIMIT 10";
		$sql3= $sql2;
		$resultz3 = $conn->query($sql3) or die($conn->error);
		
		$total_records = mysqli_num_rows($resultz3);
		
		while ($obj3 = $resultz3->fetch_assoc()) {
			$var[] = $obj3;
		}

	    $result['data']["recent_comment"] = $var;
		
	}else{
		$result['status'] = 300;
		$result['mess']="Fail";
		$result['error'] = "Lỗi quyền truy cập!";
	}
}
$json = json_encode($result);
			print_r($json);

?>