<!-- banner_qc_trai -->
<script type="text/javascript">
	$(function(){
		$("#popup-close").click(function(){
			$("#banner_qc_trai").hide();
		});
		$("#center-popup-close").click(function(){
			$("#banner_qc_center").hide();
		});
		if(screen.width > 1300) {
			$("#banner_qc_trai").show();
			setTimeout(function(){
				$("#banner_qc_center").show();
			},30000);
		}

	});
</script>
<style type="text/css">
	.banner_qc_trai {
		left: 0px;
		top: 10%;
		position: fixed !important;
		z-index: 1000;
		display: none;
	}
	.banner_qc_trai > span {
		position: absolute;
		right: 0px;
		bottom: 100%;
		cursor: pointer;
	}
	.banner_qc_trai img {
		max-width: 155px;
	}
	.banner_qc_center {
		left: 0px;
		top: 20%;
		right: 0px;
		margin-left:auto;
   		margin-right:auto;
   		width: 441px;
		position: fixed !important;
		z-index: 1000;
		display: none;
	}
	.banner_qc_center > span {
		position: absolute;
		right: 0px;
		bottom: 100%;
		cursor: pointer;
	}
	.banner_qc_center img {
		max-width: 500px;
	}
</style>
<div id="banner_qc_trai" class="banner_qc_trai">
	<span id="popup-close" title="Đóng cửa sổ">
		<img src="img/close.png" width="auto"></span>
	<a rel="nofollow" target="_blank" href="<?=$link_chat;?>">
		<img src="img/bannertrai.gif" width="100%"></a>
</div>
<div id="banner_qc_center" class="banner_qc_center">
	<span id="center-popup-close" title="Đóng cửa sổ">
		<img src="img/close.png" width="auto"></span>
	<a rel="nofollow" target="_blank" href="<?=$link_chat;?>">
		<img src="img/bannercenter.gif" width="100%"></a>
</div>