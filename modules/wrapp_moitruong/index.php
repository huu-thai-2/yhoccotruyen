<style type="text/css" media="screen">
  .moduletable {
    width: 95%;
    display: block;
    margin: 0 auto;
    position: relative;
  } 
  .moduletable .owl-prev {
    position: absolute;
    left: -40px;
    top:0;
    background: none !important;
  }
  .moduletable .owl-next {
    background: none !important;
    position: absolute;
    right: -40px;
    top:0;
  }
  #owl-demo .item {
    margin: 0px !important;
  }
  #owl-demo .owl-item img {
    border: none;
    border-radius: 0px;
    padding: 3px;
    max-width: 239px;
  }
</style>
<div class="col-md-12">
    <div class="wrapp_moitruong">
        <h3 class="title_pc">
            <a href="/" title="">
                <span>Video bệnh nhân đánh giá hiệu quả điều trị</span>
            </a>
            <img src="modules/wrapp_moitruong/img/icon-tva.png" alt="">
        </h3>
        <div class="moduletable">

            <div id="demo">
                <div class="span12">
                    <div id="owl-demo">
                        <div class="item">
                            <a href="https://www.youtube.com/watch?v=KjFV8Va8Qoo" target="_blank">
                                <img src="modules_m/moi-truong/img/video_00_off.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://www.youtube.com/watch?v=Hgm7kDT1AWs&list=PLbQRBwGR2YYWW3foEaJLEAPtQ4VxlG7ZX&index=3" target="_blank">
                                <img src="modules_m/moi-truong/img/video_01_off.jpg" alt="">
                            </a>
                        </div>
                        <div>
                            <a href="https://www.youtube.com/watch?v=SG3-0dRU9mA&list=PLbQRBwGR2YYWW3foEaJLEAPtQ4VxlG7ZX&index=2" target="_blank">
                                <img src="modules_m/moi-truong/img/video_02_off.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://www.youtube.com/watch?v=0QRSRq2ncJY&list=PLbQRBwGR2YYWW3foEaJLEAPtQ4VxlG7ZX&index=5" target="_blank">
                                <img src="modules_m/moi-truong/img/video_03_off.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://www.youtube.com/watch?v=XM0_Wd_w3Ro&list=PLbQRBwGR2YYWW3foEaJLEAPtQ4VxlG7ZX" target="_blank">
                                <img src="modules_m/moi-truong/img/video_04_off.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://www.youtube.com/watch?v=_Fa4MuxAA30&index=4&list=PLbQRBwGR2YYWW3foEaJLEAPtQ4VxlG7ZX" target="_blank">
                                <img src="modules_m/moi-truong/img/video_05_off.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://www.youtube.com/watch?v=twGLAr7BCQ8&feature=youtu.be" target="_blank">
                                <img src="modules_m/moi-truong/img/video_06_off.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $("#owl-demo").owlCarousel({
                        autoPlay: 3000,
                        items: 4,
                        itemsDesktop: [1199, 3],
                        itemsDesktopSmall: [979, 3],
                        pagination : false,
                        navigation: true,
                        navigationText: ["<img src='modules/wrapp_moitruong/img/left-arrow-slide.png'>","<img src='modules/wrapp_moitruong/img/right-arrow-slide.png'>"]
                    });

                });
            </script>
        </div>

    </div>
    <!-- //moi truong -->
</div>