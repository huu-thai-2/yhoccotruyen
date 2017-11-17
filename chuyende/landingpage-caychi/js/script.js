$(document).ready(function(){

	//Cuộn chuột lên đầu
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scroll-top').fadeIn();
		} else {
			$('.scroll-top').fadeOut();
		}
	});

	$(".header-logo .icon-toggle").click(function(){
		$(".menu").slideToggle(300);
		
	});
	
	//Click event to scroll to top
	$('.scroll-top').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});

    $("#form-dat-lich-kham #fullname").focus();

    $(".form-contact .box-message .successMessage .close").click(function(){
        $(".contact .box-message").fadeOut("fast");
    });

    $(".form-contact .box-message").click(function(e){
        if(e.target.className == "box-message"){
            $(".contact .box-message").fadeOut("fast");
        }
    });

    //Làm hiệu ứng nhấp esc tắt div
    $( document ).on( 'keydown', function ( e ) {
        if ( e.keyCode === 27 ) {
            $(".contact .box-message").fadeOut("fast");
        }
    });

    $(".chatbox").click(function(){
        $(".container-facebook").show();
    });
    $(".icon-remove").click(function(){
        $(".container-facebook").hide();
    });

});

 //Play video ngay trên trang chủ
 $('.layer-phuong-phap-chua-benh .image .icon-play').click(function(event) {
	var data_video_id = $(this).attr('data-video-id');
	var title = $(this).parent().find('.title').text();
	var widget_height = $(this).parent().height();
	var contentHTML = '<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/'+data_video_id+'?rel=0&amp;showinfo=0;autoplay=1&amp;controls=1" frameborder="0" allowfullscreen=""></iframe></div><h4 class="text-center title">'+title+'</h4>';
	$(this).parent().addClass('active');
	$(this).parent().height(widget_height);
	$(this).parent().html(contentHTML);

	return false;
});

//Slick
(function(document, window, $){
	$(document).ready(function(){
		$("#cam-nhan-benh-nhan .content").slick({
			speed: 300,
			slidesToShow: 3,
			
			slidesToScroll: 1,
			prevArrow: '.controller .prev',
			nextArrow: '.controller .next',
			responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2,
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		  ]
		});
	});
})(document, window, jQuery);

//Cuộn mượt
$('.menu .click').click(function(e){
   // prevent default action
   e.preventDefault();
   
   // get id of target div (placed in href attribute of anchor element)
   // and pass it to the scrollToElement function
    // also, use 2000 as an argument for the scroll speed (2 seconds, 2000 milliseconds)
   scrollToElement( $(this).attr('href'), 1500 );
});

var scrollToElement = function(el, ms){
    var speed = (ms) ? ms : 600;
    $('html,body').animate({
        scrollTop: $(el).offset().top
    }, speed);
}



