<?php error_reporting(E_ALL ^ E_DEPRECATED); ?>
<?php 
	session_start();

	// 
	require_once "lib/class_quanly.php";
	if(isset($qly_ql)==false) $qly_ql = new quanly;
	if(isset($_GET['p'])) $p = $_GET['p']; else $p = '';
	// link-chat
	$actual_link	= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$link_chat		= "http://drt.zoosnet.net/LR/Chatpre.aspx?siteid=DRT75684490&float=1&lng=en&p=".$actual_link;
	$link_fb		= 'https://www.facebook.com/PhongKhamDongySaiGon/';
	$link_tw		= '#';
	$link_gg		= '#';
	if(isset($_POST["btnSubmit"]))
	{	
		if($_POST["sodienthoai"] != ""){
			$hoten = $_POST["HoTen"];
			$trieuchung = $_POST["TrieuChung"];
			$ghichu = $hoten.' - '.$trieuchung;
			$qly_ql->LienHe4($ghichu);
			
		}
		else echo "<script>alert('Bạn vui lòng nhập số điện thoại ! ')</script>";	
	}
	if(isset($_POST["btnTuvan"]))
	{	
		if($_POST["sodienthoai"] != ""){
			$hoten = $_POST["HoTen"];
			$trieuchung = $_POST["TrieuChung"];
			$ghichu = $hoten.' - '.$trieuchung;
			$qly_ql->LienHe4($ghichu);
			
		}
		else echo "<script>alert('Bạn vui lòng nhập số điện thoại ! ')</script>";	
	}
	if(isset($_POST["btnDathen"]))
	{	
		if($_POST["sodienthoai"] != ""){
			$hoten = $_POST["HoTen"];
			$trieuchung = $_POST["TrieuChung"];
			$ngayhen = $_POST["NgayHen"];
			$giohen = $_POST["Giohen"];
			$ghichu = $hoten.' - '.$trieuchung.' - '.$ngayhen.' - '.$giohen;
			$qly_ql->LienHe4($ghichu);
			
		}
		else echo "<script>alert('Bạn vui lòng nhập số điện thoại ! ')</script>";	
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<base href="http://phongkhamyhoccotruyensaigon.vn/" />
	<link href="img/favicon.png" rel="shortcut icon" type="image/x-icon" />
	<title><?php include "blocks/title.php"; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="content-language" content="vi" />
	<meta name="google-site-verification" content="ZNjZIyG8ax9vpszw_lNABwHWEQ3i1Zkv6KAq1OROI3g" />
	<meta name="robots" content="noindex, nofollow" />
	<meta name="google-site-verification" content="WfRJtSCZcLTrdk_FIvcUKZICTc-kMgbEitTj_eIfKvY" />
	<meta name="description" content="<?php include "blocks/des.php"; ?>" />
	<meta name="keywords" content="<?php include "blocks/keyword.php"; ?>">
	<?php include "blocks/facebook_meta.php"; ?>
	<link rel="canonical" href="<?php echo $actual_link; ?>" />

	<!-- load library -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<?php include "css/bootstrap.php"; ?>
	<?php include "css/style.php"; ?>
	<?php include "css/sj-basic-news.php"; ?>
	<?php include "css/mod_slide_camnhan.php"; ?>
	<?php include "css/mod_grumenu.php"; ?>
	<?php include "css/owlcarousel.php"; ?>
	<?php include "css/owltheme.php"; ?>
	<?php include "js/jquery.php"; ?>
	<?php include "js/owl.php"; ?>
	<script type="text/javascript">
    
	    $(document).ready(function() {


	        $('.list_cate_slide a').click(function(){
	            var id = $(this).attr('idLoai');
	            var parent = $(this).parent().attr('parent');
	            console.log(parent);
	            $.ajax({
	                url: 'ajax/loadtintuc',
	                type : "POST",
	                dataType: 'text',
	                data: {idLoai: id},
	                success: function(result){
	                    if(result)
	                    {
	                        $('#list_news_index_'+parent).html(result);
	                    }
	                }
	            });
	        });
	        $('.ajax_submit').click(function(){
	            var form = $(this).attr('data-input');
	            var data = $('#ftsdt').val();
	            if(data != '') {
		            $.ajax({
		                url: 'ajax/nhapsdt',
		                type : "POST",
		                dataType: 'text',
		                data: {sdt: data},
		                success: function(result){
		                    if(result)
		                    {
		                        alert(result);
		                    }
		                }
		            });
		        }
	        });
	        $('.btnbaiviet').click(function(){
	            var form = $(this).attr('data-input');
	            var data = $('#sdtbaiviet').val();
	            if(data != '') {
		            $.ajax({
		                url: 'ajax/nhapsdt',
		                type : "POST",
		                dataType: 'text',
		                data: {sdt: data},
		                success: function(result){
		                    if(result)
		                    {
		                        alert(result);
		                    }
		                }
		            });
		        }
	        });
	        $('#btnpopup').click(function(){
	            var form = $(this).attr('data-input');
	            var data = $('#sdtpopup').val();
	            if(data != '') {
		            $.ajax({
		                url: 'ajax/nhapsdt',
		                type : "POST",
		                dataType: 'text',
		                data: {sdt: data},
		                success: function(result){
		                    if(result)
		                    {
		                        alert(result);
		                    }
		                }
		            });
		        }
	        });

	    });
	</script>
	<?php include "js/better-slideshow.php"; ?>
	<script type="text/javascript" src="js/waypoints.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script src="js/grudmenu/sidr.js" type="text/javascript"></script>
	<script src="js/grudmenu/script.js" type="text/javascript"></script>
	<script src="js/rollover.min.js" type="text/javascript"></script>
	
	
</head>
	<?php include_once 'modules/call_for_desktop/index.php'; ?>
	<?php include_once 'modules/call_for_mobie/index.php'; ?>
	<!-- Header -->
	<?php include_once 'modules/header/index.php'; ?>
	<!-- END Header -->
	
	
	<!-- content -->
	<?php 
		if($p =='trangchitiet') {
			$TieuDeKD = $_GET['TieuDeKD'];
			if($TieuDeKD == 'gioi-thieu-phong-kham-y-hoc-co-truyen')
			{
				include "pages/gioithieu.php";
			}
			else if($TieuDeKD == 'lien-he-phong-kham-y-hoc-co-truyen')
			{
				include "pages/lien-he.php";
			}
			else
			{
				include "pages/trangchitiet.php";
			}
			
		}
		else if($p=='error') header('Location:http://phongkhamdakhoahongphong.vn/benh-gan/');
		else if($p=='trangloai'){
			include "pages/trangloaicon.php";
			
			
		}
		else if($p=='trangtimkiem') include "pages/timkiem.php";
		else include "pages/trangchu.php";
	?>

	<!-- Footer -->
	<?php include_once 'modules/footer/index.php'; ?>
	<?php include_once 'modules/footer_fix/index.php'; ?>
	<?php include_once 'modules/float_bottom_left/index.php'; ?>
	<?php include "js/lazyload.php"; ?>
	<?php //include "chat.php"; ?>
    <script type="text/javascript">
    	$(function(){

	    	 setTimeout(function(){ 
		        $("img.bigthumb").lazyload();
		     }, 4000);
	         $("img.lazy").lazyload();

        });
    </script>
</body>
</html>


