<?php error_reporting(E_ALL ^ E_DEPRECATED); ?>
<?php 
	session_start();

	// 
	require_once "../lib/class_quanly.php";
	if(isset($qly_ql)==false) $qly_ql = new quanly;
	if(isset($_GET['p'])) $p = $_GET['p']; else $p = '';
	// link-chat
	$actual_link	= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$link_chat		= "#".$actual_link;
	$link_fb		= '#';
	$link_tw		= '#';
	$link_gg		= '#';
	
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="http://phongkhamyhoccotruyensaigon.vn/chuyende/" />
	<title>Cấy Chỉ YHCT Sài Gòn</title>
	<link rel="stylesheet" type="text/css" href="landingpage-caychi/css/reset.css">
	<link rel="stylesheet" type="text/css" href="landingpage-caychi/style.css">
	<link rel="stylesheet" type="text/css" href="landingpage-caychi/css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="landingpage-caychi/css/media.css">

	<link rel='dns-prefetch' href='http://netdna.bootstrapcdn.com/' />
<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link rel='dns-prefetch' href='http://s.w.org/' />
<link rel="alternate" type="application/rss+xml" title="TRUNG TÂM ỨNG DỤNG YHCT Sài Gòn &raquo; Feed" href="feed" />
<link rel="alternate" type="application/rss+xml" title="TRUNG TÂM ỨNG DỤNG YHCT Sài Gòn &raquo; Comments Feed" href="comments/feed" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/www.phongkhamyhoccotruyensaigon.vn\/wp-includes\/js\/wp-emoji-release.min.js"}};
			!function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,56826,8203,55356,56819),0,0),c=j.toDataURL(),b===c&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55358,56794,8205,9794,65039),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55358,56794,8203,9794,65039),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='_bootstrap-style-css'  href='assets/css/bootstrap.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='_fontawesome-style-css'  href='assets/libs/font-awesome-4.7.0/css/font-awesome.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='_googlefont-roboto-style-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A300%2C400%2C400i%2C700%2C700i&amp;subset=vietnamese&amp;ver=4.8' type='text/css' media='all' />
<link rel='stylesheet' id='_material-icon-style-css'  href='https://fonts.googleapis.com/icon?family=Material+Icons&amp;ver=4.8' type='text/css' media='all' />
<link rel='stylesheet' id='_slick-style-css'  href='assets/libs/slick-1.6.0/slick.css' type='text/css' media='all' />
<link rel='stylesheet' id='_slick-theme-style-css'  href='assets/libs/slick-1.6.0/slick-theme.css' type='text/css' media='all' />
<link rel='stylesheet' id='_animate-css-style-css'  href='assets/css/animate.css' type='text/css' media='all' />
<link rel='stylesheet' id='_mbbasetheme-style-css'  href='style.css' type='text/css' media='all' />
<link rel='stylesheet' id='_responsive-css-style-css'  href='assets/css/responsive.css' type='text/css' media='all' />
<script type='text/javascript' src='wp-includes/js/jquery/jquery.js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min.js'></script>
<link rel='https://api.w.org/' href='wp-json/index.html' />
<link rel="canonical" href="cay-chi-dong-phuong-y-phap.html" />
<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embedfb92.json?url=http%3A%2F%2Fwww.phongkhamyhoccotruyensaigon.vn%2Fcay-chi-dong-phuong-y-phap" />
<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embedaee1?url=http%3A%2F%2Fwww.phongkhamyhoccotruyensaigon.vn%2Fcay-chi-dong-phuong-y-phap&amp;format=xml" />
<script type="text/javascript">
    
	    $(document).ready(function() {

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


	    });
	</script>
</head>
<body>
	<header id="header">
		<div class="container header-logo">
				<div class="row">
					<div class="col-md-2 col-sm-2 logo">
						<h1><a href="#"><img src="landingpage-caychi/images/logo.png" alt=""></a></h1>
					</div>
					<div class="col-md-10 col-sm-10 banner">
						<h2 class="title">Cấy chỉ YHCT Sài Gòn</h2>
						<span class="description">Cách chữa bệnh không dùng thuốc an toàn và hiệu quả nhất hiện nay</span>
					</div>
				</div>
			<span class="icon-toggle"><i class="fa fa-bars" aria-hidden="true"></i></span>
		</div><!-- /Chứa logo và banner -->
		
	</header><!-- /header -->
	<nav class="navbar menu" role="navigation">
		<div class="container">
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a class="click" href="#phuong-phap-cay-chi">Cấy chỉ</a></span>
					<li class="active"><a class="click" href="#uu-diem-cay-chi">Cấy chỉ YHCT Sài Gòn</a></li>
					<li><a class="click" href="#ly-do-cay-chi">Vì sao chọn chúng tôi</a></li>
					<li><a class="click" href="#quy-trinh">Quy trình cấy chỉ</a></li>
					<li><a class="click" href="#chuyen-gia-nhan-xet">Chuyên gia đánh giá</a></li>
					<li><a class="click" href="#cam-nhan-benh-nhan">Cảm nhận của bệnh nhân</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->

		</div>
	</nav><!-- /Menu --><div id="content">
	<div class="nguyen-nhan">
		 <div class="container">
		 	<div class="row">
		 		<div class="col-md-8 content-nguyen-nhan">
		 			<p class="line-1">Bạn có đang: <span class="line-2">Đau đớn, khổ sở vì bệnh?</span></p>
				 	<p class="line-3">Bệnh vẫn ngày một <span>trầm trọng hơn?</span></p>
				 	<p class="line-4">Bạn đang muốn tìm <span>phương pháp điều trị</span> khác có thể <span>không cần dùng thuốc?</span></p>
		 		</div>
		 	</div>
		 </div>
	</div><!-- /Nguyên nhân và biện pháp -->
	<div class="kho-khan">
		<div class="container">
			<div class="row">
				<div class="col-sm-5 kho-khan-1">
					<h3>Bạn có biết?</h3>
					<p class="line-1">các loại thuốc</p>
					<p class="line-2">kháng sinh, giảm đau</p>
				</div>
				<div class="col-sm-7 kho-khan-2">
					<p class="line"><i class="fa fa-hand-o-right" aria-hidden="true"></i> <span>Chỉ có tác dụng tức thời</span></p>
					<p class="line"><i class="fa fa-hand-o-right" aria-hidden="true"></i> <span>Chi phí tốn kém, dễ phụ thuộc vào thuốc</span></p>
					<p class="line"><i class="fa fa-hand-o-right" aria-hidden="true"></i> <span>Sử dụng nhiều sẽ ảnh hưởng xấu tới gan, thận, chức năng tiêu hoá của dạ dày, gây đau, xuất huyết dạ dày</span></p>
					<p class="line"><i class="fa fa-hand-o-right" aria-hidden="true"></i> <span>Không chữa được tận gốc</span></p>
				</div>
			</div>
		</div>
	</div><!-- /Những khó khăn khi sử dụng các phương pháp điều trị khác -->

	<div class="giai-phap">
			<div class="container">
					<h2 class="title">Giải pháp hoàn hảo cho bạn
						<span>Cấy chỉ YHCT Sài Gòn</span>
					</h2>
			</div>
	</div><!-- /Giải pháp khi điều trị cấy chỉ -->
	
	<div id="phuong-phap-cay-chi">
		<div class="container">
			<h2 class="title">Cấy chỉ - Phương pháp chữa bệnh không dùng thuốc 
			<span>An toàn và Hiệu quả</span>
			</h2>
			<div class="row content-phuong-phap">
				<div class="col-md-6 uu-diem">
					<h3 class="title-content">Cấy chỉ YHCT Sài Gòn – Phương pháp chữa bệnh không dùng thuốc Hiệu quả trị bệnh cao, an toàn.</h3>
					<p class="line"><i class="fa fa-caret-right" aria-hidden="true"></i> <span>Là nghệ thuật kích thích liên tục vào huyệt vị bằng một sợi chỉ Catgut</span></p>
					<p class="line"><i class="fa fa-caret-right" aria-hidden="true"></i> <span>Giúp giảm đau, chống viêm một cách tự nhiên, hiệu quả mà không cần dùng thuốc</span></p>
					<p class="line"><i class="fa fa-caret-right" aria-hidden="true"></i> <span>Cân bằng âm dương, điều hòa ngũ tạng, khí huyết, thông kinh lạc</span></p>
					<p class="line"><i class="fa fa-caret-right" aria-hidden="true"></i> <span>Kích thích miễn dịch, tăng cường sức đề kháng cho cơ thể</span></p>
					<p class="line"><i class="fa fa-caret-right" aria-hidden="true"></i> <span>Tăng sinh lưới mao mạch, tăng cường lưu thông máu, phát triển dây thần kinh mới</span></p>
					<p class="line"><i class="fa fa-caret-right" aria-hidden="true"></i> <span>Tăng cường đồng hóa, giảm dị hóa; tác động làm tăng protein và hydratcarbon; góp phần tăng chuyển hóa dinh dưỡng ở cơ.</span></p>
				</div>
				<div class="col-md-6 video">
					<div class="embed-responsive embed-responsive-16by9 content-video">
					    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qTF7aNZvlmY"></iframe>
					</div>
					<p>Cận cảnh Phương pháp Cấy chỉ do Tiến sĩ Nguyễn Thị Vân Anh thực hiện</p>
				</div>
			</div>
		</div>
	</div><!-- /Phương pháp cấy chỉ -->

	<div class="contact">
		<div class="container form-contact">
			<h3 class="title">Hàng chục nghìn bệnh nhân đã khỏi bệnh nhờ Cấy chỉ!</h3>
			<p class="button-contact">
				<a href="tel:0974573434 " class="button-telephone">
					<span class="icon-telephone"><i class="fa fa-phone" aria-hidden="true"></i></span> <span class="text">08.62.680.111  </span>
				</a><!-- /Telephone -->
				<a id="register-link" class="button-register">
					<span class="icon-register"><i class="fa fa-calendar-minus-o" aria-hidden="true"></i></span> <span class="text">Đặt lịch hẹn Cấy chỉ</span>
				</a><!-- /Đăng kí lịch cấy chỉ -->
			</p>

			<div class="box-window-register">
				<div class="window-register">

					<div class="register-header">
						<h4 class="register-title"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <span>Đặt lịch hẹn</span></h4>
						<span class="register-description">Để lại thông tin để được bác sĩ tư vấn miễn phí và đặt lịch khám sớm</span>
						<span class="close"><i class="fa fa-times" aria-hidden="true"></i></span>
					</div>

					<div class="register-content">
						<form class="form-horizontal form-dat-lich" id="form-dat-lich-kham" action="#" method="POST">
							<span class="successMessage"></span>
							 <div class="form-group">
			                    <label for="fullname" class="col-sm-3 control-label">Họ và tên</label>
			                    <div class="col-sm-8">
			                        <input type="text" id="fullname" name="fullname" placeholder="Nguyễn Văn A" class="form-control" autofocus >
			                        <span class="error" id="errName"></span>
			                    </div>
			                </div>

			                <div class="form-group">
			                    <label for="age" class="col-sm-3 control-label">Tuổi</label>
			                    <div class="col-sm-8">
			                        <input type="number" id="age" name="age" placeholder="25" class="form-control">
			                        <span class="error" id="errAge"></span>
			                    </div>
			                </div>

			                <div class="form-group">
			                    <label for="telephone" class="col-sm-3 control-label">Số điện thoại</label>
			                    <div class="col-sm-8">
			                        <input type="text" id="telephone" name="telephone" placeholder="09xxxxxxxx" class="form-control">
			                        <span class="error" id="errTelephone"></span>
			                    </div>
			                </div>

			                <div class="form-group">
			                    <label for="email" class="col-sm-3 control-label">Email</label>
			                    <div class="col-sm-8">
			                        <input type="email" id="email" name="email" placeholder="@gmail.com" class="form-control">
			                        <span class="error" id="errEmail"></span>
			                    </div>
			                </div>

			                <div class="form-group status-health">
			                    <label for="status" class="col-sm-3 control-label">Tình trạng sức khỏe</label>
			                    <div class="col-sm-8">
			                        <input type="text" id="status" name="status" placeholder="Bạn đang bị bệnh gì?" class="form-control" >
			                        <span class="error" id="errStatus"></span>
			                    </div>
			                </div>

			                <div class="form-group">
			                    <label for="dat-ngay" class="col-sm-3 control-label">Đặt ngày cấy chỉ</label>
			                    <div class="col-sm-8">
			                        <input type="text" name="dat-ngay" id="dat-ngay" class="form-control" >
			                    </div>
			                </div>

			                <div class="register-footer">
								<button type="button" class="btn btnGui">Gửi</button>
							</div>

						</form>
					</div>

				</div><!-- //Cửa sổ đăng ký lịch cấy chỉ -->
			</div>
			<div class="box-message">
				<div class="successMessage">
					<div class="register-message-header">
						<h3 class='title'>Thông báo</h3>
						<span class='close'><i class='fa fa-times' aria-hidden='true'></i></span>
					</div>
					<div class="register-message-content">
						<p class="register-message-success">Bạn đã đăng kí lịch cấy chỉ thành công. Vui lòng kiểm tra lại nội dung đăng kí. Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất!</p>
						<div class="content-label col-sm-5">
							<p><span class='label-control'>Họ và tên:</span></p>
							<p><span class='label-control'>Tuổi:</span></p>
							<p><span class='label-control'>Số điện thoại:</span></p>
							<p><span class='label-control'>Email:</span></p>
							<p><span class='label-control'>Tình trạng sức khỏe:</span></p>
							<p><span class='label-control'>Ngày cấy chỉ:</span></p>
						</div>
						<div class="content-input col-sm-7">
							<p><span class='input-control itFullname'></span></p>
							<p><span class='input-control itAge'></span></p>
							<p><span class='input-control itTelephone'></span></p>
							<p><span class='input-control itEmail'></span></p>
							<p><span class='input-control itStatus'></span></p>
							<p><span class='input-control itDate'></span></p>
						</div>
					</div>
				</div><!-- /Hiển thị thông báo khi đăng kí lịch cấy chỉ thành công -->

			</div><!-- //Hiển thị thông báo khi gửi lịch khám thành công -->
		</div>
	</div><!-- /Liên hệ đặt lịch -->

	<div id="uu-diem-cay-chi">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6 content-image">
					<div class="image">
						<img src="landingpage-caychi/images/ts-nguyen-thi-van-anh.png" alt="Nguyễn Thị Vân Anh">	
					</div>
					<div class="desription-image">
						<h3 class="title">Ts.Bs CK II Nguyễn Thị Vân Anh</h3>
						<p class="description-text">Nguyên Trưởng khoa Nội BV YHCT Trung ương, chuyên gia Tư vấn sức khoẻ trên VTV2, VOV, GĐ chuyên môn Trung tâm Ứng dụng YHCT Sài Gòn</p>
					</div>

				</div>
				<div class="col-sm-12 col-md-6 content-text">
					<h3 class="title">Cấy chỉ YHCT Sài Gòn</h3>
					<p class="description">chữa bệnh có gì đặc biệt?</p>
					<p class="line"><i class="fa fa-check" aria-hidden="true"></i> <span>Ứng dụng thành quả từ công trình nghiên cứu
khoa học nhà nước</span></p>
					<p class="line"><i class="fa fa-check" aria-hidden="true"></i> <span>Được chứng minh hiệu quả nhanh và bền vững</span></p>
					<p class="line"><i class="fa fa-check" aria-hidden="true"></i> <span>Trực tiếp thực hiện bởi chuyên gia hàng đầu</span></p>
					<p class="line"><i class="fa fa-check" aria-hidden="true"></i> <span>Điều trị và hỗ trợ điều trị nhiều loại bệnh, chi phí
hợp lý</span></p>
					<p class="line"><i class="fa fa-check" aria-hidden="true"></i> <span>Không cần dùng thêm thuốc</span></p>
					<p class="line"><i class="fa fa-check" aria-hidden="true"></i> <span>Không làm mất nhiều thời gian của bệnh nhân</span></p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="dieu-tri-benh">
		<div class="container">
			<h2 class="title">Cấy chỉ YHCT Sài Gòn
				<span>điều trị và hỗ trợ điều trị nhiều loại bệnh</span>
			</h2>

			<div class="row row-1">
				<div class="col-md-12 co-xuong-khop">
					<div class="image">
						<img src="landingpage-caychi/images/co-xuong-khop.jpg" alt="Cơ xương khớp">
					</div>
					<div class="description">
						<h3>Cơ xương khớp:</h3>
						<p class="text">Thoái hóa khớp, thoát vị đĩa đệm, viêm đa khớp dạng thấp, đau mỏi cổ vai gáy, đau dây thần kinh tọa, đau dây thần kinh liên sườn..</p>
						<p><a class="click">Xem thêm</a></p>
					</div>
				</div>
			</div><!-- /Bệnh 1 -->

			<div class="row row-2">
				<div class="item meo-mieng">
					<div class="image">
						<img src="landingpage-caychi/images/meo-mieng.jpg" alt="Méo miệng">
					</div>
					<div class="description">
						<h3>Méo miệng liệt dây thần kinh số 7</h3>
						<p><a class="click">Xem thêm</a></p>
					</div>
				</div>

				<div class="item viem-xoang">
					<div class="image">
						<img src="landingpage-caychi/images/viem-mui-viem-xoang.jpg" alt="Viêm xoang, viêm mũi">
					</div>
					<div class="description">
						<h3>Viêm xoang, viêm mũi</h3>
						<p><a class="click">Xem thêm</a></p>
					</div>
				</div>
			</div><!-- /Bệnh 2 -->

			<div class="row row-3">
				
				<div class="col-sm-4 col-xs-4 item hen-phe-quan">
					<div class="image">
						<img src="landingpage-caychi/images/viem-phe-quan.jpg" alt="hen phế quản">
					</div>
					<div class="description">
						<h3>Hen phế quản</h3>
						<p><a class="click">Xem thêm</a></p>
					</div>
				</div>

				<div class="col-sm-4 col-xs-4 item me-day">
					<div class="image">
						<img src="landingpage-caychi/images/noi-me-day.jpg" alt="Nổi mề đay">
					</div>
					<div class="description">
						<h3>Mề đay mẩn ngứa</h3>
						<p><a class="click">Xem thêm</a></p>
					</div>
				</div>

				<div class="col-sm-4 col-xs-4 item tai-bien">
					<div class="image">
						<img src="landingpage-caychi/images/phuc-hoi-sau-tai-bien.jpg" alt="Phục hồi sau tai biến">
					</div>
					<div class="description">
						<h3>Phục hồi sau tai biến</h3>
						<p><a class="click">Xem thêm</a></p>
					</div>
				</div>

			</div><!-- /Bệnh 3 -->
			
			<div class="window-info">
				<div class="box-info">
					<h3 class="chua-benh"></h3>
					<span class="close"><i class="fa fa-times" aria-hidden="true"></i></span>
				</div>

			</div><!-- //Hiển thị thông báo khi gửi lịch khám thành công -->

		</div>
	</div><!-- /Cấy chỉ điều trị các loại bệnh -->

	<div id="ly-do-cay-chi">
		<div class="container">
			<h2 class="title">Vì sao chọn <span>cấy chỉ YHCT Sài Gòn?</span></h2>
			<div class="row content-ly-do">
				<div class="col-md-6 item">
					<p class="line"><i class="fa fa-check" aria-hidden="true"></i> <span>Ứng dụng từ đề tài nghiên cứu nhà nước
về Chữa bệnh không dùng thuốc</span></p>
					<p class="line"><i class="fa fa-check" aria-hidden="true"></i> <span>Tác dụng nhanh, hiệu quả bền vững</span></p>
					<p class="line"><i class="fa fa-check" aria-hidden="true"></i> <span>Bác sĩ, kỹ thuật viên tay nghề cao, dày dặn
kinh nghiệm đến từ những bệnh viện YHCT lớn và uy tín nhất</span></p>
					<p class="line"><i class="fa fa-check" aria-hidden="true"></i> <span>An toàn, không gây ra các tai biến nguy hiểm,
không đau, không để lại sẹo</span></p>
				</div>
				<div class="col-md-6 item">
					<p class="line"><i class="fa fa-check" aria-hidden="true"></i> <span>Cơ sở vật chất hiện đại, phục vụ ân cần, chu đáo</span></p>
					<p class="line"><i class="fa fa-check" aria-hidden="true"></i> <span>Giúp giảm lượng thuốc phải dùng kết hợp điều trị</span></p>
					<p class="line"><i class="fa fa-check" aria-hidden="true"></i> <span>Giảm những tác dụng phụ không mong muốn như khi
sử dung thuốc giảm đau, kháng viêm để điều trị bệnh</span></p>
					<p class="line"><i class="fa fa-check" aria-hidden="true"></i> <span>Tiết kiệm thời gian và chi phí điều trị.</span></p>
				</div>
			</div>
			<div class="row tham-khao">
				<div class="col-md-10 col-md-offset-1 box-tham-khao">
					<h3>Báo chí nói về chúng tôi:</h3>
					<p><a target="_blank" href="http://www.tapchithegioiphunu.com/cay-chi-chua-benh-lam-dep-buoc-tien-moi-cua-cham-cuu-viet-nam.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Cấy chỉ chữa bệnh, làm đẹp – Bước tiến mới của châm cứu Việt Nam(Tạp chí thế giới phụ nữ)</a></p>
					<p><a target="_blank" href="http://www.chuyenkhoanamhoc.com/bac-si-van-anh-ban-tay-cay-nen-nhung-dieu-ky-dieu.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Bác sĩ Vân Anh – bàn tay cấy nên những điều kỳ diệu(Chuyên khoa nam học)</a></p>
					<p><a target="_blank" href="http://www.tapchiyhoccotruyen.com/gap-nguoi-dan-ong-chua-khoi-benh-hen-suyen-bang-phuong-phap-cay-chi-huyet-dao.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Gặp người đàn ông chữa khỏi bệnh hen suyễn bằng phương pháp cấy chỉ huyệt đạo(Tạp chí y học cổ truyền)</a></p>
					<p><a target="_blank" href="http://www.chuyenkhoaxuongkhop.net/phuong-phap-cay-chi-huyet-dao-va-nhung-cau-hoi-thuong-gap.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Phương pháp cấy chỉ huyệt đạo và những câu hỏi thường gặp(Chuyên khoa xương khớp)</a></p>
				</div>
			</div>

		</div>
	</div><!-- /Vì sao chọn cấy chỉ YHCT Sài Gòn? -->
	
	<div id="quy-trinh">
		<div class="container">
				<h2 class="title">Quy trình cấy chỉ
					<span>tại Trung tâm Ứng dụng YHCT Sài Gòn</span>
				</h2>
			<div class="content">
				<ul>
					<li class="item">
						<span class="icon">B1</span>
						<span class="description">Khám & Tư vấn</span>

					</li>
					<li class="item">
						<span class="icon">B2</span>
						<span class="description">Chỉ định liệu trình cấy chỉ</span>
					</li>
					<li class="item">
						<span class="icon">B3</span>
						<span class="description">Tiến hành trị liệu: uống trà thông kinh lạc, xoa bóp cấy chỉ thông kinh lạc</span>
						<span class="detail">Cấy chỉ</span>
					</li>
					<li class="item">
						<span class="icon">B4</span>
						<span class="description">Theo dõi phản ứng của cơ thể sau cấy chỉ (mức độ giảm đau, giảm bệnh)</span>
					</li>
					<li class="item">
						<span class="icon">B5</span>
						<span class="description">Tái khám và cấy chỉ lần tiếp theo </span>
					</li>
				</ul>
			</div>
		</div>
	</div>
	
	<div id="chuyen-gia-nhan-xet">
		<div class="container">
			<h2 class="title">Chuyên gia nhận xét gì
				<span>về Cấy chỉ YHCT Sài Gòn</span>
			</h2>
			<div class="row content">
				<div class="col-sm-6 item" id="bs-1">
					<div class="image">
						<img src="landingpage-caychi/images/bs-none.jpg" alt="Ths.Bs Nguyễn Thị Tuyết Lan">
					</div>
					<div class="description">
						<p class="doctor">Ths.Bs Nguyễn Thị Tuyết Lan</p>
						<p class="line-1">Nguyên Trưởng khoa Khám bệnh</p>
						<p class="line-2">BV YHCT Trung ương</p>

						<p class="line-3">Cấy chỉ YHCT Sài Gòn đã được chứng minh mang lại hiệu quả cao...</p>
						<p class="xem-them"><a>>> Xem chi tiết</a></p>
					</div>
				</div>
				<div class="col-sm-6 item" id="bs-2">
					<div class="image">
						<img src="landingpage-caychi/images/bs-le-thi-phuong.jpg" alt="Ths.Bs Nguyễn Thị Tuyết Lan">
					</div>
					<div class="description">
						<p class="doctor">Bác sĩ Lê Thị Phương</p>
						<p class="line-1">Thầy thuốc ưu tú,</p>
						<p class="line-2">Nguyên Phó Giám đốc BV YHCT Hà Đông</p>
						<p class="line-3">Hiện nay cấy chỉ được xem như một phương pháp chữa bệnh không dùng thuốc...</p>
						<p class="xem-them"><a>>> Xem chi tiết</a></p>
					</div>	
				</div>
			</div>

			<div class="box-information">
				<div class="window-information">
					<span class="close"><i class="fa fa-times" aria-hidden="true"></i></span>
					<h3 class="name"></h3>
					<h4 class="description"></h4>
					<p class="line-1"></p>
				</div>
			</div>
		</div><!-- /Hiển thị thông tin chi tiết của các bác sĩ -->
	</div><!-- /Chuyên gia nhận xét -->
	
	<div id="cam-nhan-benh-nhan">
		<div class="container">
			<h2 class="tilte">Cảm nhận của bệnh nhân</h2>
			<div class="content">
				<div class="item" id="benh-nhan-1">
					<img src="landingpage-caychi/images/nguyen-duc-tan.png" alt="">
					<h2 class="name">Bác Nguyễn ĐứcTấn</h2>
					<p class="address">56 tuổi ở Thanh Hóa</p>
					<p class="detail">Người đã khỏi bệnh hen suyễn nhờ phương pháp cấy chỉ</p>
					<p class="xem-them"><a>>> Xem chi tiết</a></p>
				</div>
				<div class="item" id="benh-nhan-2">
					<img src="landingpage-caychi/images/hong-ha.png" alt="">
					<h2 class="name">Cô Phạm Hồng Hà</h2>
					<p class="address">62 tuổi, Hà Nội</p>
					<p class="detail">Bệnh nhân viêm đa khớp dạng thấp</p>
					<p class="xem-them"><a>>> Xem chi tiết</a></p>
				</div>
				<div class="item" id="benh-nhan-3">
					<img src="landingpage-caychi/images/anh-daniel.png" alt="">
					<h2 class="name">Anh Daniel</h2>
					<p class="address">31 tuổi, du khách Úc</p>
					<p class="detail">“Tôi đã có những trải nghiệm khó quên ở đất nước Việt Nam xinh đẹp</p>
					<p class="xem-them"><a>>> Xem chi tiết</a></p>
				</div>
				<div class="item" id="benh-nhan-4">
					<img src="landingpage-caychi/images/trong-ha.png" alt="">
					<h2 class="name">Anh Nguyễn Trọng Hà</h2>
					<p class="address">39 tuổi, Bắc Ninh</p>
					<p class="detail">Có con trai 4 tuổi chậm nói, chậm phát triển trí tuệ</p>
					<p class="xem-them"><a>>> Xem chi tiết</a></p>
				</div>
			</div>
			<div class="controller">
				<span class="prev"><i class="fa fa-2x fa-chevron-left" aria-hidden="true"></i></span>
				<span class="next"><i class="fa fa-2x fa-chevron-right" aria-hidden="true"></i></span>
			</div><!-- /Chứa bảng điều khiển slider -->
		</div>
		
		<div class="box-information">
			<div class="window-information">
				<span class="close"><i class="fa fa-times" aria-hidden="true"></i></span>
				<h3 class="name">Hoang van manh</h3>
				<h4 class="description">Hoang van manh</h4>
				<p class="line-1">Lionel Messi nhận án treo giò 4 trận do hành động chửi trợ lý trọng tài trong trận Chile – Argentina. Tuy nhiên đội trưởng của ĐT Argentina đã bào chữa cho hành động của mình trong bản báo cáo của LĐBĐ Argentina (AFA), theo tin từ tờ La Nacion.Theo nhà báo Marco Tinelli của tờ La Nacion, cá nhân Messi không trực tiếp gửi lời giải thích của mình cho AFA mà được ghi lại bởi người khác. Do đó không rõ những gì Messi nói là thật lòng hay đây chỉ là một sự bào chữa muộn màng.</p>
			</div>
		</div><!-- /Hiển thị thông tin chi tiết phản hồi của bệnh nhân-->
	</div><!-- /Cảm nhận bệnh nhân -->
	<div class="logo-footer">
		<div class="container">
					<p class="image"><img src="landingpage-caychi/images/logo.png" alt=""></p>
					<h2 class="title">Phòng khám y học cổ truyền sài gòn</h2>
					<h3>Cấy chỉ YHCT Sài Gòn</h3>
					<p class="connect">Kết nối với chúng tôi</p>
					<p class="contact-social">
						<span class="social"><a href="mailto:info@phongkhamyhoccotruyensaigon.vn"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i></a></span>
						<span class="social"><a target="blank" href="<?=$link_fb;?>"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></span>
						<span class="social"><a target="blank" href="<?=$link_yt;?>"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a></span>
					</p>
					<p class="address"><span><i class="fa fa-map-marker" aria-hidden="true"></i> </span>1061B CMT8, P.7, Q.TÂN BÌNH, HCM | <span><i class="fa fa-phone" aria-hidden="true"></i> </span>028.62.680.111  </p>
		</div>
	</div><!-- /chân trang -->

	<div class="copy-right">
		<div class="container">
			<p>Coppyright 2017 <span>@phongkhamyhoccotruyensaigon.vn</span></p>
			<p class="luu-y">***Công dụng có thể tùy thuộc theo thể trạng của từng người</p>
			<a class="scroll-top" href="#"><i class="fa fa-arrow-circle-up fa-2x" aria-hidden="true"></i></a>
		</div>
	</div>

</div><!-- //Content -->
	<footer id="footer">
		<div class="container">
				<div class="telephone-support">
					<form action="#" method="post" name="sendTelephone" class="sendTelephone" accept-charset="utf-8">
						<span class="lb-telephone">Điền số điện thoại để được tư vấn</span>
						<input type="text" id="ftsdt" class="txtTelephone" name="txtTelephone" placeholder="Số điện thọai" >
						<input type="button" class="btnSend ajax_submit" value="Gửi"></button>
					</form>
					<div class="box-message">
						<div class="successMessage"></div>
					</div>
				</div><!-- /Form đăng ký tư vấn -->
				<div class="hotline">
					<span><i class="fa fa-phone" aria-hidden="true"></i> Hotline: <a href="tel:02862680111">028.62.680.111 </a></span>
				</div>
				<a class="contact-facebook" href="<?=$link_chat;?>">
					<span class="chatbox"><i class="fa fa-comments-o" aria-hidden="true"></i> Chat với chúng tôi</span>
				</a>
			</div>

		</div>
		
		<div class="container-facebook">
			<div class="header-facebook">
				<span class="icon-remove"><i class="fa fa-times" aria-hidden="true"></i></span>
				<p>Chat với chúng tôi</p>
			</div>
			<div class="content-facebook">
				
			</div>
			
		</div><!-- /Chứa khung chat facebook -->

		<script src="landingpage-caychi/js/jquery-3.1.1.min.js"></script>
		<script src="landingpage-caychi/js/bootstrap.min.js"></script>
		<script src="landingpage-caychi/js/jquery-ui.min.js"></script>
		<script src="landingpage-caychi/js/slick.min.js"></script>
		<script src="landingpage-caychi/js/validation.js"></script>
		<script src="landingpage-caychi/js/script.js"></script>
		<script src="landingpage-caychi/js/cac-benh-thuong-gap.js"></script>
	</footer>
</body>

</html>