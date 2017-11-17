var regexTelephone = /^\+?[0189]{1}\s*\.*\-*\d+\s*\.*\-*\d+\s*\.*\-*\d+\s*\.*\-*\d+$/;
var regexEmail = /^\w+@{1}[a-zA-Z]+\.{1}[a-zA-Z]+$/;

//Lấy ngày hiện tại
function getDate(){
	var date = new Date();
	var day = date.getDate();
	var month = date.getMonth() + 1;
	var year = date.getFullYear();
	if (month < 10) month = "0" + month;
	if (day < 10) day = "0" + day;
	return day + "-" + month + "-" + year;
	
}

//Kiểm tra họ tên
function validateFullName(fullname){
	if (fullname.length <=0 ) {
		$("#form-dat-lich-kham #errName").html("Không được để trống!");
		return false;
		
	}else if(fullname.length < 5 || fullname.length > 40) {
		$("#form-dat-lich-kham #errName").html("Vui lòng nhập từ 5 - 40 kí tự!");
		return false;
	}
	$("#form-dat-lich-kham #errName").html("");
	return true;
}

//Kiểm tra tuổi
function validateAge(age){
	if (age.length <= 0) {
		$("#form-dat-lich-kham #errAge").html("Tuổi của bạn không được để trống!");
		return false;
	}
	if (parseInt(age) <= 0 || parseInt(age) > 120) {
		$("#form-dat-lich-kham #errAge").html("Tuổi bạn nhập vào không hợp lệ!");
		return false;
	}
	$("#form-dat-lich-kham #errAge").html("");
		return true;
}

//Kiểm tra số điện thoại
function validateTelephone(telephone, regexTelephone){
	if (telephone.length <= 0) {
		$("#form-dat-lich-kham #errTelephone").html("Không được để trống trường số điện thoại!");
		return false;
	}else if(telephone.length < 8 || telephone.length > 13){
		$("#form-dat-lich-kham #errTelephone").html("Số điện thoại không hợp lệ!");
		return false;	
	}else if (!regexTelephone.test(telephone)) {
		$("#form-dat-lich-kham #errTelephone").html("Số điện thoại không hợp lệ!");
		return false;
	}
	$("#form-dat-lich-kham #errTelephone").html("");
		return true;
}

//Kiểm tra email
function validateEmail(email, regexEmail){
	if (email.length <= 0) {
		$("#form-dat-lich-kham #errEmail").html("Email không được để trống!");
		return false;
	}else if (email.length > 40) {
		$("#form-dat-lich-kham #errEmail").html("Email không được vượt quá 40 kí tự!");
		return false;
	}else if (!regexEmail.test(email)) {
		$("#form-dat-lich-kham #errEmail").html("Email của bạn không hợp lệ!");
		return false;
	}
	$("#form-dat-lich-kham #errEmail").html("");
		return true;
}

//Kiểm tra tình trạng sức khỏe
function validateStatus(status){
	if (status.length <= 0) {
		$("#form-dat-lich-kham #errStatus").html("Tình trạng sức khỏe không được để trống!");
		return false;
	}
	$("#form-dat-lich-kham #errStatus").html("");
		return true;
}


$("document").ready(function(){	
	//Tạo input date
	$('.box-window-register #dat-ngay').datepicker({
		dateFormat: 'dd-mm-yy',
		minDate : getDate(),
		changeMonth: true,
        changeYear: true,
        inline: true
		
	});

	$('.box-window-register #dat-ngay').val(getDate());

	var telephoneSuccess = $(".telephone-support .box-message .successMessage");
	telephoneSuccess.append("<h3 class='title'>Thông báo</h3>");
	telephoneSuccess.append("<span class='close'><i class='fa fa-times' aria-hidden='true'></i></span>");
	telephoneSuccess.append("<p class='message'>Bạn đã gửi số điện thoại thành công! Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất</p>");

	//Hiển thị thông tin chi tiết của các bác sĩ
	$("#chuyen-gia-nhan-xet .content #bs-1 .description .xem-them").click(function(){
		var name = $("#chuyen-gia-nhan-xet .content #bs-1 .description .doctor").text();
		var description = $("#chuyen-gia-nhan-xet .content #bs-1 .description .line-1").text() + " " + $("#chuyen-gia-nhan-xet .content #bs-1 .description .line-2").text();
		var line = 'Cấy chỉ Đông phương Y pháp đã được chứng minh mang lại hiệu quả cao và ứng dụng rộng rãi trong điều trị/hỗ trợ điều trị nhiều loại bệnh, giúp người bệnh giảm đi triệu chứng của bệnh nhanh chóng mà không cần dùng thuốc, không phải lo lắng tác dụng phụ của thuốc gây ra, nhất là những loại thuốc chứa corticoid.';
		$("#chuyen-gia-nhan-xet .box-information").fadeIn("fast");
		$("#chuyen-gia-nhan-xet .box-information .window-information .name").text(name);
		$("#chuyen-gia-nhan-xet .box-information .window-information .description").text(description);
		$("#chuyen-gia-nhan-xet .box-information .window-information .line-1").text(line);
	});

	$("#chuyen-gia-nhan-xet .content #bs-2 .description .xem-them").click(function(){
		var name = $("#chuyen-gia-nhan-xet .content #bs-2 .description .doctor").text();
		var description = $("#chuyen-gia-nhan-xet .content #bs-2 .description .line-1").text() + " " + $("#chuyen-gia-nhan-xet .content #bs-2 .description .line-2").text();
		var line = 'Hiện nay cấy chỉ được xem như một phương pháp chữa bệnh không dùng thuốc cho hiệu quả cao, nhất là đối với các bệnh mãn tính gây đau đớn khó chịu nhiều như viêm khớp, viêm mũi xoang, hen phế quản…Nhưng điều quan trọng nhất cho một ca cấy chỉ thành công đó là xác định được chính xác và phối hợp các huyệt đạo cần cấy. Điều này được đảm bảo bằng chuyên môn, tay nghề và kinh nghiệm của người thầy thuốc. Do đó, mọi người nên chọn các cơ sở uy tín để cấy chỉ, một địa chỉ tôi đánh giá cao là Trung tâm Ứng dụng Đông phương Y pháp.';
		$("#chuyen-gia-nhan-xet .box-information").fadeIn("fast");
		$("#chuyen-gia-nhan-xet .box-information .window-information .name").text(name);
		$("#chuyen-gia-nhan-xet .box-information .window-information .description").text(description);
		$("#chuyen-gia-nhan-xet .box-information .window-information .line-1").text(line);
	});

	//Hiển thị thông tin chi tiết của bệnh nhân
	$("#cam-nhan-benh-nhan .content #benh-nhan-1 .xem-them").click(function(){
		var name = $("#cam-nhan-benh-nhan .content #benh-nhan-1 .name").text();
		var address = $("#cam-nhan-benh-nhan .content #benh-nhan-1 .address").text();
		var detail = '“Tôi bị hen suyễn nhiều năm, chữa bằng đủ các loại thuốc không đỡ, mỗi lần lên cơn là tím bầm mặt mày vì không thở được. Sau con gái tôi biết đến cấy chỉ Đông phương Y pháp và thuyết phục tôi đi điều trị bằng phương pháp này. Tôi cấy tất cả 7 lần, mỗi lần cách nhau 15 ngày. Cứ sau mỗi lần cấy chỉ là bệnh nhẹ đi nhiều, bớt đau, ăn ngon miệng hơn và ngủ được. Hiện tại tôi đã khỏi bệnh, đi viện khám lại ai cũng bất ngờ. Cấy chỉ Đông phương Y pháp tốt thật đấy.”';
		$("#cam-nhan-benh-nhan .box-information").fadeIn("fast");
		$("#cam-nhan-benh-nhan .box-information .window-information .name").text(name);
		$("#cam-nhan-benh-nhan .box-information .window-information .description").text(address);
		$("#cam-nhan-benh-nhan .box-information .window-information .line-1").text(detail);
	});

	$("#cam-nhan-benh-nhan .content #benh-nhan-2 .xem-them").click(function(){
		var name = $("#cam-nhan-benh-nhan .content #benh-nhan-2 .name").text();
		var address = $("#cam-nhan-benh-nhan .content #benh-nhan-2 .address").text();
		var detail = '“Trung tâm Ứng dụng Đông phương Y pháp ở ngay gần nhà tôi, ngay từ khi mới thành lập đã thấy rất đông người đến khám chữa, mà lạ là nhiều người không cần dùng thuốc gì nhưng vẫn khỏi bệnh. Tôi lân la hỏi thăm, mới biết được Trung tâm ấy chữa bệnh bằng các phương pháp bật lý trị liệu, có thể không cần đến thuốc. Nhân lúc bệnh viêm đa khớp gặp mùa lạnh tái phát đau không chịu được, mà uống thuốc giảm đau mãi không ổn. Thế là tôi quyết định sang Trung tâm. Tiến sĩ, bác sĩ Vân Anh chính là người khám và chỉ định cấy chỉ cho tôi, bác sĩ nói cấy chỉ Đông phương Y pháp có thể giúp giảm bệnh và giảm đau do thấp khớp rất tốt, tác dụng lâu dài. Tôi đồng ý và cấy chỉ 4 lần, từ đó ít đau hẳn. Sang mùa đông thứ 2 rồi đây, không còn mất ăn mất ngủ vì đau như mấy năm trước.”';
		$("#cam-nhan-benh-nhan .box-information").fadeIn("fast");
		$("#cam-nhan-benh-nhan .box-information .window-information .name").text(name);
		$("#cam-nhan-benh-nhan .box-information .window-information .description").text(address);
		$("#cam-nhan-benh-nhan .box-information .window-information .line-1").text(detail);
	});

	$("#cam-nhan-benh-nhan .content #benh-nhan-3 .xem-them").click(function(){
		var name = $("#cam-nhan-benh-nhan .content #benh-nhan-3 .name").text();
		var address = $("#cam-nhan-benh-nhan .content #benh-nhan-3 .address").text();
		var detail = '“Tôi đã có những trải nghiệm khó quên ở đất nước Việt Nam xinh đẹp trong gần 1 tháng. Cảnh đẹp vô cùng, con người thân thiện và biết giúp đỡ người khác. Đặc biệt, tôi còn được cấy chỉ Đông phương Y pháp, một phương pháp chữa bệnh không cần dùng thuốc lần đầu tôi biết đến. Tôi là kỹ sư CNTT, việc ngồi nhiều khiến tôi đau lưng, đi du lịch vì thế không được thoải mái cho lắm, nhưng may mắn có anh HDV giới thiệu vào Trung tâm Ứng dụng Đông phương y pháp để cấy chỉ tôi đã hết đau ngay sau đó vài tiếng và không cần uống hay dán cao. Nhờ đó hành trình du lịch diễn ra suôn sẻ, tôi thoải mái khám phá những cách sắc thiên nhiên hùng vĩ và vẻ đẹp của Sapa, Hạ Long, Tam cốc Bích động, Đà Nẵng…Trước khi về nước, tôi còn tranh thủ quay lại Hà Nội để cấy chỉ thêm một lần nữa. Thật tuyệt vời!”';
		$("#cam-nhan-benh-nhan .box-information").fadeIn("fast");
		$("#cam-nhan-benh-nhan .box-information .window-information .name").text(name);
		$("#cam-nhan-benh-nhan .box-information .window-information .description").text(address);
		$("#cam-nhan-benh-nhan .box-information .window-information .line-1").text(detail);
	});

	$("#cam-nhan-benh-nhan .content #benh-nhan-4 .xem-them").click(function(){
		var name = $("#cam-nhan-benh-nhan .content #benh-nhan-4 .name").text();
		var address = $("#cam-nhan-benh-nhan .content #benh-nhan-4 .address").text();
		var detail = '‘Con cái là lộc trời cho, vợ chồng tôi lấy nhau mấy năm mới có được mụn con thì cháu lại có chút vấn đề, không được nhanh nhẹn như những đứa trẻ khác. Chúng tôi đã thử mọi cách nhưng cháu vẫn chưa biết nói và nhận thức chậm. Sau khi được người quen giới thiệu đến Trung tâm Ứng dụng Đông phương Y pháp – Chữa bệnh không dùng thuốc để cấy chỉ, chúng tôi đã đưa cháu đến và được trực tiếp bác sĩ Doãn Hồng Phương điều trị cấy chỉ cho cháu. Đến nay sau 3 tháng điều trị cháu đã bắt đầu nói được khoảng rên 50 từ, dù còn ngọng nhiều; nhận thức cũng khá dần lên. Chúng tôi đang tiếp tục cho cháu điều trị, chờ đợi kết quả tốt nhất bằng tất cả niềm tin vào phương pháp thần kỳ này.”';
		$("#cam-nhan-benh-nhan .box-information").fadeIn("fast");
		$("#cam-nhan-benh-nhan .box-information .window-information .name").text(name);
		$("#cam-nhan-benh-nhan .box-information .window-information .description").text(address);
		$("#cam-nhan-benh-nhan .box-information .window-information .line-1").text(detail);
	});

	$(".telephone-support .box-message .successMessage .close").click(function(){
		$(".telephone-support .box-message").fadeOut("fast");
	});

	$(".box-window-register .window-register .register-header .close").click(function(){
		$(".form-contact .box-window-register").fadeOut("fast");
	});

	$("#chuyen-gia-nhan-xet .box-information .close").click(function(){
		$("#chuyen-gia-nhan-xet .box-information").fadeOut("fast");
	});

	$("#cam-nhan-benh-nhan .box-information .close").click(function(){
		$("#cam-nhan-benh-nhan .box-information").fadeOut("fast");
	});

	$(".telephone-support .box-message").click(function(e){
		if(e.target.className == "box-message"){
      		$(".telephone-support .box-message").fadeOut("fast");
			$(".telephone-support .box-message .successMessage").fadeOut("fast");
    	}
	});

	//Hiệu ứng khi click ra bên ngoài sẽ tắt thẻ div
	$(".form-contact .box-window-register").click(function(e){
		if(e.target.className == "box-window-register"){
      		$(".form-contact .box-window-register").fadeOut("fast");
    	}
	});

	$("#chuyen-gia-nhan-xet .box-information").click(function(e){
		if(e.target.className == "box-information"){
      		$("#chuyen-gia-nhan-xet .box-information").fadeOut("fast");
    	}
	});

	$("#cam-nhan-benh-nhan .box-information").click(function(e){
		if(e.target.className == "box-information"){
      		$("#cam-nhan-benh-nhan .box-information").fadeOut("fast");
    	}
	});
	
	//Làm hiệu ứng nhấp esc tắt div
	$( document ).on( 'keydown', function ( e ) {
	    if ( e.keyCode === 27 ) {
	        $(".telephone-support .box-message").fadeOut("fast");
			$(".box-message .successMessage").fadeOut("fast");
			$(".contact .box-window-register").fadeOut("fast");
			$("#chuyen-gia-nhan-xet .box-information").fadeOut("fast");
			$("#cam-nhan-benh-nhan .box-information").fadeOut("fast");
	    }
	});

	//Khi click vào link sẽ hiển thị ra ô đăng kí lịch cấy chỉ
	$(".form-contact #register-link").click(function(){
		 $(".form-contact .box-window-register").fadeIn("fast");
	});

	//Khi thay đổi trường họ tên
	$("#form-dat-lich-kham #fullname").change(function(){
		var dat_lich_fullname = $("#form-dat-lich-kham #fullname").val();
		validateFullName(dat_lich_fullname);
	});

	//Khi thay đổi trường tuổi
	$("#form-dat-lich-kham #age").change(function(){
		var dat_lich_age = $("#form-dat-lich-kham #age").val();
		validateAge(dat_lich_age);
	});

	//Khi thay đổi trường số điện thoại
	$("#form-dat-lich-kham #telephone").change(function(){
		var dat_lich_telephone = $("#form-dat-lich-kham #telephone").val();
		validateTelephone(dat_lich_telephone, regexTelephone);
	});

	//Khi thay đổi trường email
	$("#form-dat-lich-kham #email").change(function(){
		var dat_lich_email = $("#form-dat-lich-kham #email").val();
		validateEmail(dat_lich_email, regexEmail);
	});

	//Khi thay đổi trường tình trạng sức khỏe
	$("#form-dat-lich-kham #status").change(function(){
		var dat_lich_status = $("#form-dat-lich-kham #status").val();
		validateStatus(dat_lich_status);
	});

});

//Sự kiện nhấn enter key submit form
$('#form-dat-lich-kham .btnGui').keypress(function(e) {
    var key = e.which;
    if (key == 13) // the enter key code
    {
      $('input[name = butAssignProd]').click();
      return false;
    }
  });

//Đặt lịch khám bệnh
 $("#form-dat-lich-kham .btnGui").click(function() {

    var dat_lich_fullname = $("#form-dat-lich-kham #fullname").val();
    var dat_lich_age = $("#form-dat-lich-kham #age").val();
	var dat_lich_telephone = $("#form-dat-lich-kham #telephone").val();
	var dat_lich_email = $("#form-dat-lich-kham #email").val();
	var dat_lich_status = $("#form-dat-lich-kham #status").val();
	var dat_lich_date = $("#form-dat-lich-kham #dat-ngay").val();
	var phuongPhap = 'Cấy chỉ đông phương Y pháp';
	var getPath = $(location).attr('href');
	if (validateFullName(dat_lich_fullname) && validateAge(dat_lich_age) && validateTelephone(dat_lich_telephone, regexTelephone) && validateEmail(dat_lich_email, regexEmail) && validateStatus(dat_lich_status) ) {
		$.ajax({
	        url: "https://docs.google.com/forms/d/e/1FAIpQLSd4NHWqkBmr3wrUX4Df2ICjxoU5hlCeKhl72ypK31Eq4xcRAw/formResponse",
	        data: {
	            "entry.785838753": dat_lich_fullname,
	            "entry.1168001345": dat_lich_age,
	            "entry.1315414628": dat_lich_telephone,
	            "entry.21047199": dat_lich_email,
	            "entry.1465665026": dat_lich_status,
	            "entry.2113495837": dat_lich_date,
	            "entry.2019995289": phuongPhap,
	            "entry.2088391419": getPath,
	        },
	        type: "POST",
	        dataType: "xml",
	        beforeSend: function() {},
	        statusCode: {
	            0: function() {
	            	$(".form-contact .box-window-register").hide();
	            	$(".form-contact .box-message").fadeIn("fast");
	            	$(".form-contact .box-message .successMessage").fadeIn("fast");

					$(".form-contact .box-message .content-input .itFullname").text(dat_lich_fullname);
					$(".form-contact .box-message .content-input .itAge").text(dat_lich_age);
					$(".form-contact .box-message .content-input .itTelephone").text(dat_lich_telephone);
					$(".form-contact .box-message .content-input .itEmail").text(dat_lich_email);
					$(".form-contact .box-message .content-input .itStatus").text(dat_lich_status);
					$(".form-contact .box-message .content-input .itDate").text(dat_lich_date);
					

				   	$("#form-dat-lich-kham #fullname").val("");
				    $("#form-dat-lich-kham #age").val("");
					$("#form-dat-lich-kham #telephone").val("");
					$("#form-dat-lich-kham #email").val("");
					$("#form-dat-lich-kham #status").val("");
					$("#form-dat-lich-kham #dat-ngay").val(getDate());
	                
	            },
	            200: function() {
	            	$(".form-contact .box-window-register").hide();
	            	$(".form-contact .box-message").fadeIn("fast");
	            	$(".form-contact .box-message .successMessage").fadeIn("fast");

					$(".form-contact .box-message .content-input .itFullname").text(dat_lich_fullname);
					$(".form-contact .box-message .content-input .itAge").text(dat_lich_age);
					$(".form-contact .box-message .content-input .itTelephone").text(dat_lich_telephone);
					$(".form-contact .box-message .content-input .itEmail").text(dat_lich_email);
					$(".form-contact .box-message .content-input .itStatus").text(dat_lich_status);
					$(".form-contact .box-message .content-input .itDate").text(dat_lich_date);

	               	$("#form-dat-lich-kham #fullname").val("");
				    $("#form-dat-lich-kham #age").val("");
					$("#form-dat-lich-kham #telephone").val("");
					$("#form-dat-lich-kham #email").val("");
					$("#form-dat-lich-kham #status").val("");
					$("#form-dat-lich-kham #dat-ngay").val(getDate());
	            }
	        }
	    });

	}else{
		if (!validateFullName(dat_lich_fullname)) {
			validateFullName(dat_lich_fullname);
			$("#form-dat-lich-kham #fullname").focus();
		}else if (!validateAge(dat_lich_age)) {
			validateAge(dat_lich_age);
			$("#form-dat-lich-kham #age").focus();
		}else if (!validateTelephone(dat_lich_telephone, regexTelephone)) {
			validateTelephone(dat_lich_telephone, regexTelephone);
			$("#form-dat-lich-kham #telephone").focus();
		}else if (!validateEmail(dat_lich_email, regexEmail)) {
			validateEmail(dat_lich_email, regexEmail);
			$("#form-dat-lich-kham #email").focus();
		}else if (!validateStatus(dat_lich_status)) {
			validateStatus(dat_lich_status);
			$("#form-dat-lich-kham #status").focus();
		}
	}

});

//Gửi số điện thoại vào google drive
$(".sendTelephone .btnSend").click(function() {
	var telephone = $(".sendTelephone .txtTelephone").val();
	var phuongPhap = 'Cấy chỉ đông phương Y pháp';
	var getPath = $(location).attr('href');

	if (telephone.length <= 0) {
		alert("Số điện thoại của bạn không được để trống");
		return false;
	}else if(telephone.length < 8 || telephone.length > 13){
		alert("Số điện thoại không hợp lệ!");
		return false;	
	}else if (!regexTelephone.test(telephone)) {
		alert("Số điện thoại không hợp lệ!");
		return false;
	}
	$.ajax({
	    url: "https://docs.google.com/forms/d/e/1FAIpQLScPMCTueMNQzAkfUWm5Sx7o_p9IsraI-CjHTqmWXC9J6l-qbw/formResponse",
	    data: {
	        "entry.1774386604": telephone,
	        "entry.2129059203": phuongPhap,
	        "entry.929892849": getPath,
	    },
	    type: "POST",
	    dataType: "xml",
	    beforeSend: function() {},
	    statusCode: {
	        0: function() {
	            $(".telephone-support .box-message").fadeIn("fast");
				$(".telephone-support .box-message .successMessage").fadeIn("fast");
	            $(".telephone-support .sendTelephone .txtTelephone").val("");
	        },
	        200: function() {
	            $(".telephone-support .box-message").fadeIn("fast");
				$(".telephone-support .box-message .successMessage").fadeIn("fast");
	            $(".telephone-support .sendTelephone .txtTelephone").val("");
	        }
	    }
	});
	return true;
});