<style type="text/css" media="screen">

	.right_form_content h3{
		text-align: center;
	    color: #ffec01;
	    text-transform: uppercase;
	    font-size: 20px;
	    width: 100%;
	    float: left;
	}
	.right_form_content .input-line {
		width: 100%;
	    padding: 8px 15px;
	    border-radius: 2px;
	    border: none;
	    background: #fff;
	    float: left;
	    margin-bottom: 5px;
	    font-size: 16px
	}
	.right_form_content input::-webkit-input-placeholder {
		color: #666;
	}
	.right_form_content {
		background: #098d44;
	}
	.right_form .right_form_content .main_form {
		width: 100%;
		float: left;
	}
	.bottom_form_right .btn_form_right {
	    background: #ffec01;
	    height: 30px;
	    width: 50px;
	    line-height: 30px;
	    text-align: center;
	    color: #000;
	    text-transform: uppercase;
	    float: right;
	    border-radius: 4px;
	    text-decoration: none;
	    font-weight: bold;
	}
</style>
<?php 
if(isset($_POST["dathenTK"]))
	{	
		if($_POST["sodienthoai"] != ""){
			$hoten = $_POST["HoTen"];
			$trieuchung = $_POST["NamSinh"];
			$ghichu = $hoten.' - '.$trieuchung;
			$qly_ql->LienHe4($ghichu);
			
		}
		else echo "<script>alert('Bạn vui lòng nhập số điện thoại ! ')</script>";	
	}
?>
<div class="right_form">
   <h3 class="title_pc">
            <a href="/" title="">
                <span>Đặt hẹn thăm khám</span>
            </a>
            <img src="modules/camnhan_right/img/cn.png" alt="">
    
    </h3>
    <div class="moduletable">
        <div class="right_form_content">
        	<h3>Thông tin đặt hẹn</h3>
            <form action="" method="POST">
				<div class="main_form">
					<input type="text" class="input-line" name="HoTen" placeholder="Nhập tên" />
					<input type="text" class="input-line" name="NamSinh" placeholder="Nhập năm sinh" />
					<input type="text" class="input-line" name="sodienthoai" placeholder="Nhập số điện thoại(*):" />
					<div class="bottom_form_right">
						<span>Để lại thông tin chúng tôi sẽ gọi lại cho bạn <strong style="color:#ffec01;">MIỄN PHÍ</strong></span>
						<input type="submit" class="btn_form_right" name="dathenTK" value="Gửi">
					</div>
				</div>	
				
			</form>
        </div>
    </div>

</div>
<div style="background: #098d44; border-radius: 5px;text-align: center;" class="right_form">
        	<h3 style="text-align: center;
    color: #ffec01;
    text-transform: uppercase;
    font-size: 20px;
    width: 100%;
    float: left;">FACEBOOK</h3>
	<iframe src="https://www.facebook.com/plugins/page.php?href=https://www.facebook.com/PhongKhamDongySaiGon/%2F&tabs=timeline&width=305&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1718621411693549" width="305" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
</div>