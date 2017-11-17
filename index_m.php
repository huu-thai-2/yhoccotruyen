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
	$link_gg		= 'https://plus.google.com/u/0/107756079981739995938';
	
	
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
	<?php include "blocks/robot.php"; ?>
	<meta name="description" content="<?php include "blocks/des.php"; ?>" />
	<meta name="keywords" content="<?php include "blocks/keyword.php"; ?>">
	<?php include "blocks/facebook_meta.php"; ?>
	<link rel="canonical" href="<?php echo $actual_link; ?>" />

	<!-- load library -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	
	<?php include "css_m/bootstrap.php"; ?>
	<?php include "css_m/menu_css.php"; ?>
	<?php include "css_m/mod_zt_news.php"; ?>
	<?php include "css_m/mod_tabs_gk5.php"; ?>
	<?php include "css_m/style.php"; ?>
	<?php include "css_m/paradeiser.php"; ?>
	<?php include "css_m/owlcarousel.php"; ?>
	<?php include "css_m/owltheme.php"; ?>

	<?php include "js_m/jquery.php"; ?>

	
	<!-- //menu top -->
	<script type="text/javascript">
    
	    $(document).ready(function() {


	        $('.list_cate_slide a').click(function(){
	            var id = $(this).attr('idLoai');
	            $.ajax({
	                url: 'ajax/loadtintuc',
	                type : "POST",
	                dataType: 'text',
	                data: {idLoai: id},
	                success: function(result){
	                    if(result)
	                    {
	                        $('#list_news_index').html(result);
	                    }
	                }
	            });
	        });
	        $('.sbcallfreech').click(function(){
	            var form = $(this).attr('data-input');
	            var data = $('.callfreech').val()+' - '+$('.txtname').val();
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
	<?php include "js_m/mootools-core.php"; ?>
	<?php include "js_m/mootools-more.php"; ?>
	<?php include "js_m/mod_tabs_gk5.php"; ?>
	<?php include "js_m/better-slideshow.php"; ?>
	<script type="text/javascript" src="js_m/waypoints.min.js"></script>
	<script type="text/javascript" src="js_m/script.js"></script>
	<?php include "js_m/owl.php"; ?>
	<?php include "js_m/modernizr.php"; ?>
	<script type="text/javascript">
    $(function(){

    	 setTimeout(function(){ 
	        $("img.bigthumb").lazyload();
	     }, 4000);
         $("img.lazy").lazyload({
			    skip_invisible : true
			});

        });
    </script>
</head>

	<!-- Header -->
	<?php include_once 'modules_m/fix-form-top/index.php'; ?>
	<!-- END Header -->
	
	<div class="main_mobile">
	<!-- content -->
	<?php 
		if($p =='trangchitiet') {
			$TieuDeKD = $_GET['TieuDeKD'];
			if($TieuDeKD == 'gioi-thieu-phong-kham-y-hoc-co-truyen')
			{
				include "pages_m/gioithieu.php";
			}
			else if($TieuDeKD == 'lien-he-phong-kham-y-hoc-co-truyen')
			{
				include "pages_m/lien-he.php";
			}
			else
			{
				include "pages_m/trangchitiet.php";
			}
			
		}
		else if($p=='error') header('Location:http://phongkhamdakhoahongphong.vn/benh-gan/');
		else if($p=='trangloai'){
			include "pages_m/trangloaicon.php";
			
			
		}
		else if($p=='trangtimkiem') include "pages_m/timkiem.php";
		else include "pages_m/trangchu.php";
	?>

	<!-- Footer -->
	<?php include_once 'modules_m/wrapp_footer/index.php'; ?>
	</div>
	<?php include_once 'modules_m/fix-bottom-footer/index.php'; ?>
	<SCRIPT type="text/javascript" src="js_m/jquery.dlmenu.js">
	</SCRIPT>
	<script>
	    $(function() {
	        $( '#dl-menu' ).dlmenu({
	            animationClasses : { classin : 'dl-animate-in-4', classout : 'dl-animate-out-4' }
	        });
	    });
	</script>
	<script>
	    document.getElementById("paradeiser-dropdown").addEventListener("click", function(event){
	        event.preventDefault();
	        document.getElementById("paradeiser-more").classList.toggle("open");
	    });
	    document.getElementById("greybox").addEventListener("click", function(event){
	        document.getElementById("paradeiser-more").classList.toggle("open");
	    });
	    var myElement = document.querySelector(".paradeiser");
	    var headroom  = new Headroom(myElement, {
	        tolerance : 4,
	        onUnpin : function() {
	            document.getElementById("paradeiser-more").classList.remove("open");
	        }
	    });
	    headroom.init();
	</script>
	<?php include "js_m/lazyload.php"; ?>
	<?php //include "chat.php"; ?>
    
</body>
</html>


