<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST, DELETE, PUT');
header("Access-Control-Allow-Headers: X-Requested-With, Authorization, Fbtoken, Gtoken, Gotoken, Content-Type");

function api_url($api_url = 'https://api1.thienngoc.info/')
{
	$api_url = 'http://www.api.tnshop/';
	// $api_url = "https://api1.thienngoc.info/";
	return $api_url;
}
$result['status'] = 200;
$post_ = json_decode(file_get_contents('php://input'), 1);

if (isset($_GET['action'])) {
	error_reporting(0);
	require 'config.php';
	switch ($_GET['action']) {
		case 'test':
			require 'test.php';
			break;
		case 'getOrder':
			require 'getOrder.php';
			break;
		case 'register':
			require 'User_register.php';
			break;
		case 'login':
			require 'User_login.php';
			break;
		case 'getDataUser':
			require 'User_getData.php';
			break;
		case 'updateUser':
			require 'updateUser.php';
			break;
		case 'bannerSlide':
			require 'bannerSlide.php';
			break;
		case 'send-comment':
			require 'sendComment.php';
			break;
		case 'saveOrder':
			require 'saveOrder.php';
			break;
		case 'getSidebar':
			require 'getSidebar.php';
			break;
		case 'search':
			require 'search.php';
			break;

			//qtv_user
		case 'users':
			require 'Q_getUsers.php';
			break;
		case 'editUser':
			require 'Q_editUser.php';
			break; // action=editUser?id_user=
		case 'Q_updateUser':
			require 'Q_updateUser.php';
			break; // ?action=Q_updateUser&id_user=2&name=ten&email=email@xxxxs&password=&phone=0982415396
			// categories
		case 'categories':
			require 'Q_getCategories.php';
			break;
		case 'editCategorie':
			require 'Q_editCategorie.php'; //id_categorie=
			break;
		case 'Q_updateCategorie':
			require 'Q_updateCategorie.php';
			break; // ?action=Q_updateCategorie
		case 'Q_deleteCategorie':
			require 'Q_deleteCategorie.php';
			break;
			// products
		case 'products':
			require 'Q_getProducts.php';
			break;
		case 'Q_updateProduct':
			require 'Q_updateProduct.php';
			break;
		case 'editProduct':
			require 'Q_editProduct.php';
			break;
		case 'Q_deleteProduct':
			require 'Q_deleteProduct.php';
			break;
		case 'Q_getComments':
			require 'Q_getComments.php';
			break;
		case 'Q_updateComment':
			require 'Q_updateComment.php';
			break;
		case 'Q_getOrders':
			require 'Q_getOrders.php';
			break;
		case 'Q_updateOrder':
			require 'Q_updateOrder.php';
			break;
		case 'Q_RepComment':
			require 'Q_RepComment.php';
			break;
		case 'Q_getDashboard':
			require 'Q_getDashboard.php';
			break;
	}
} else {
	$json = json_encode($result);
	print_r($json);
}

function getProduct($conn, $Id)
{
	$result = null;
	$queryCheck = "SELECT * FROM `products` WHERE `Id` = '$Id'";
	$in_check = $conn->query($queryCheck) or die($conn->error);
	$data = $in_check->fetch_assoc();
	if ($data['Id']) {
		// $auth = base64_encode($data['email'] . ":" . $data['password']);
		if ($data['back_cameraFlash'] == 1) {
			$data['back_cameraFlash'] = true;
		} else {
			$data['back_cameraFlash'] = false;
		}

		$result['mess'] = "Success";

		$result['dataProduct']['Id'] = $data['Id'];
		$result['dataProduct']['name'] = $data['name'];
		$result['dataProduct']['code'] = $data['code'];
		$result['dataProduct']['quality'] = $data['quality'];
		$result['dataProduct']['screen'] = $data['screen'];
		$result['dataProduct']['screenName'] = $data['screenName'];
		$result['dataProduct']['screenPixel'] = $data['screenPixel'];
		$result['dataProduct']['screenWidth'] = $data['screenWidth'];
		$result['dataProduct']['screenCam_ung'] = $data['screenCam_ung'];
		$result['dataProduct']['system'] = $data['system'];
		$result['dataProduct']['front_camera'] = json_decode($data['front_camera'], true);
		$result['dataProduct']['front_cameraDoPhanGiai'] = $data['front_cameraDoPhanGiai'];
		$result['dataProduct']['front_cameraVideoCall'] = $data['front_cameraVideoCall'];
		$result['dataProduct']['front_cameraFlash'] = $data['front_cameraFlash'];
		$result['dataProduct']['front_cameraNangCao'] = $data['front_cameraNangCao'];
		$result['dataProduct']['back_camera'] = $data['back_camera'];
		$result['dataProduct']['back_cameraDoPhanGiai'] = $data['back_cameraDoPhanGiai'];
		$result['dataProduct']['back_cameraQuayPhim'] = $data['back_cameraQuayPhim'];
		$result['dataProduct']['back_cameraFlash'] = $data['back_cameraFlash'];
		$result['dataProduct']['back_cameraNangCao'] = $data['back_cameraNangCao'];
		$result['dataProduct']['cpu'] = json_decode($data['cpu'], true);
		$result['dataProduct']['cpuHeDH'] = $data['cpuHeDH'];
		$result['dataProduct']['cpuChipset'] = $data['cpuChipset'];
		$result['dataProduct']['cpuSpeed'] = $data['cpuSpeed'];
		$result['dataProduct']['cpuChipDoHoa'] = $data['cpuChipDoHoa'];
		$result['dataProduct']['ram'] = $data['ram'];
		$result['dataProduct']['rom'] = $data['rom'];
		$result['dataProduct']['memorySD'] = $data['memorySD'];
		$result['dataProduct']['sim'] = $data['sim'];
		$result['dataProduct']['mangDiDong'] = $data['mangDiDong'];
		$result['dataProduct']['wifi'] = $data['wifi'];
		$result['dataProduct']['gps'] = $data['gps'];
		$result['dataProduct']['bluetooth'] = $data['bluetooth'];
		$result['dataProduct']['ketNoiKhac'] = $data['ketNoiKhac'];
		$result['dataProduct']['pin'] = $data['pin'];
		$result['dataProduct']['pinDungLuong'] = $data['pinDungLuong'];
		$result['dataProduct']['pinType'] = $data['pinType'];
		$result['dataProduct']['pinCongNghe'] = $data['pinCongNghe'];
		$result['dataProduct']['tinh_nang_dac_biet'] = $data['tinh_nang_dac_biet'];
		$result['dataProduct']['categories'] = json_decode($data['categories'], true);
		$result['dataProduct']['chat_lieu'] = $data['chat_lieu'];
		$result['dataProduct']['trong_luong'] = $data['trong_luong'];
		$result['dataProduct']['pictures'] = json_decode($data['pictures'], true);
		$result['dataProduct']['thietKe'] = $data['thietKe'];
		$result['dataProduct']['rating'] = $data['rating'];



		$sql2 = "SELECT * FROM `comment` WHERE `id_product` = '$Id'";
		$resultz2 = $conn->query($sql2) or die($conn->error);

		// echo mysqli_num_rows($resultz2);
		$total_records = mysqli_num_rows($resultz2);
		$result['dataProduct']['countRating'] = $total_records;

		// BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
		$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
		$limit = 10;
		$total_page = ceil($total_records / $limit);
		if ($current_page > $total_page) {
			$current_page = $total_page;
		} else if ($current_page < 1) {
			$current_page = 1;
		}
		// Tìm Start
		$start = ($current_page - 1) * $limit;
		if ($start < 0) $start = 0;


		$sql3 = "SELECT * FROM `comment` WHERE `id_product` = '$Id' LIMIT $start, $limit";
		$resultz3 = $conn->query($sql3) or die($conn->error);

		while ($obj3 = $resultz3->fetch_assoc()) {
			if ($obj3['verify'] == 1) {
				$obj3['verify'] = true;
			} else {
				$obj3['verify'] = false;
			}
			$var[] = $obj3;
		}
		$result['data_comment']['data'] = $var;
		$result['data_comment']["start"] = $start;
		$result['data_comment']["total_page"] = $total_page;
		$result['data_comment']["current_page"] = $current_page;
		$result['data_comment']["limit"] = $limit;
		$result['data_comment']["total_records"] = $total_records;
	}
	return $result;
}

function uploadBase64($data = 'data:image/png;base64,AAAFBfj42Pj4')
{

	if (strlen(strstr($data, 'data:image')) > 0) {
		list($type, $data) = explode(';', $data);
		list(, $data)      = explode(',', $data);
		list(, $duoi)      = explode('/', $type);


		$data = base64_decode($data);

		$dir = 'files/' . createRandomPassword() . time() . 'TN-Shop.' . $duoi;
		$url = api_url() . $dir;
		file_put_contents($dir, $data);
		return $url;
	}
	return $data;
}

function uploadListPicture($pictures = [])
{
	$pictures = json_decode($pictures, true);
	if (count($pictures)) {
		for ($i = 0; $i < count($pictures); $i++) {
			$data = $pictures[$i]['base64'];
			if (strlen(strstr($data, 'data:image')) > 0) {
				$data = uploadBase64($data);
				// echo $data;
				$pic = $pictures[$i];
				$pic['base64'] = $data;

				$pictures[$i] = $pic;
			}
		}
	}
	return json_encode($pictures);
}




function createRandomPassword()
{

	$chars = "abcdefghijkmnopqrstuvwxyz023456789";
	srand((float) microtime() * 1000000);
	$i = 0;
	$pass = '';

	while ($i <= 7) {
		$num = rand() % 33;
		$tmp = substr($chars, $num, 1);
		$pass = $pass . $tmp;
		$i++;
	}

	return $pass;
}
