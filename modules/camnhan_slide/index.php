<style type="text/css" media="screen">

</style>
<div class="col-md-12">
    <div class="wrapp_moitruong">
        <h3 class="title_pc">
            <a href="/" title="">
                <span>Báo chí đánh giá chúng tôi</span>
            </a>
            <img src="modules/camnhan_right/img/cn.png" alt="">
    
        </h3>
        <div class="moduletable">

            <div id="demo">
                <div class="span12">
                    <div id="camnhan-slide">
                    	<?php 
                        $tinlq_2 = $qly_tin->ListTin_Where(-1,53, 0, 10, '', '');
                        if(mysql_num_rows($tinlq_2)>0) {
                        ?>
                            <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                            	<div class="item">
		                            <a href="<?=$rowlq['TieuDeKD'];?>.html" target="_blank">
		                                <img src="<?=$rowlq['UrlHinh'];?>" alt="<?=$rowlq['TieuDeKD'];?>" >
		                            </a>
		                        </div>
                                
                            <?php } ?>
                         <?php } ?>
                        

                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $("#camnhan-slide").owlCarousel({
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