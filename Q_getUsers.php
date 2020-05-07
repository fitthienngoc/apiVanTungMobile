<?php 

if($_SERVER['PHP_AUTH_USER']){

	$email = $_SERVER['PHP_AUTH_USER'];
	$password = $_SERVER['PHP_AUTH_PW'];
	$search = $_GET['search'];
	$queryCheck = "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'";
	$in_check = $conn->query($queryCheck) or die($conn->error);
	$data = $in_check->fetch_assoc();

	if ($data['permission'] == 'admin') {

		$search = "%"."$search"."%";
		$sql2="SELECT * FROM `user` WHERE `email` LIKE '$search' OR `name` LIKE '$search'";
	    $resultz2 = $conn->query($sql2) or die($conn->error);

		// echo mysqli_num_rows($resultz2);
	    $total_records = mysqli_num_rows($resultz2);;

	    // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
		$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
		$limit = 10;
		$total_page = ceil($total_records / $limit);
		if ($current_page > $total_page){
		    $current_page = $total_page;
		}
		else if ($current_page < 1){
		    $current_page = 1;
		}
		// Tìm Start
		$start = ($current_page - 1) * $limit;	
		if($start <0) $start = 0;


		$sql3="SELECT * FROM `user` WHERE `email` LIKE '$search' OR `name` LIKE '$search' LIMIT $start, $limit";
		$resultz3 = $conn->query($sql3) or die($conn->error);

		

	    while ($obj3=$resultz3->fetch_assoc())
	    {
	        $obj3['password'] = "";
	        $var[] = $obj3;
	    }

	    $result['data']["start"] = $start;
	    $result['data']["total_page"] = $total_page;
	    $result['data']["current_page"] = $current_page;
	    $result['data']["limit"] = $limit;
	    $result['data']["total_records"] = $total_records;
	    $result['data']["data"] = $var;

		
		
	}else{
		$result['status'] = 300;
		$result['mess']="Fail";
		$result['error'] = "Lỗi quyền truy cập!";
	}
}
$json = json_encode($result);
			print_r($json);

?>