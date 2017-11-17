<?php error_reporting(E_ALL ^ E_DEPRECATED); ?>
<?php 
	session_start();
	http_response_code(404);
    require_once "mobile_detect.php";
	// 
	require_once "lib/class_quanly.php";
	if(isset($qly_ql)==false) $qly_ql = new quanly;
	if(isset($_GET['p'])) $p = $_GET['p']; else $p = '';
	// link-chat
	$actual_link	= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$link_chat		= "http://kzl.zoossoft.cn/LR/Chatpre.aspx?id=KZL54714443&lng=en&p=".$actual_link;
	$link_fb		= 'https://www.facebook.com/%C4%90a-Khoa-H%E1%BB%93ng-Phong-1836287643322297/';
	$link_tw		= '#';
	$link_gg		= 'https://plus.google.com/u/0/107756079981739995938';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<base href="http://localhost/Chuyendegan/" />
	<link href="img/favicon.png" rel="shortcut icon" type="image/x-icon" />
	<title>404 Page Error | Trang không tồn tại</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="content-language" content="vi" />
	<meta name="robots" content="noindex, nofollow, all">
	<meta name="description" content="Trang không tồn tại" />
	<meta name="keywords" content="Trang không tồn tại">

	<!-- load library -->
</head>

<body>
	
	<!-- header-top -->
	
	
	<!-- nav -->
	
	
	<!-- content -->
	<style type="text/css">
	.wrap {
	    margin: 0 auto;
	    width: 1000px;
	}
	.logo {
	    margin-top: 50px;
	}
	.logo h1 {
	    font-size: 200px;
	    color: #8F8E8C;
	    text-align: center;
	    margin-bottom: 1px;
	    text-shadow: 1px 1px 6px #fff;
	}
	.logo p {
	    color: rgb(228, 146, 162);
	    font-size: 20px;
	    margin-top: 1px;
	    text-align: center;
	}
	</style>
	<div class="wrap">
	   <div class="logo">
	   <h1>404</h1>
	    <p>Error occurred! - File not Found</p>
        </div>
	</div>
	<!-- end content -->
	
</body>
</html>


