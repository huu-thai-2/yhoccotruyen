<style type="text/css" media="screen">
    .title_nav_footer {
        position: relative;
        padding-left: 0px !important;
    }
    .title_nav_footer:before {
        position: absolute;
        left: 0px;
    }
    .nav_footer li a {
        position: relative;

    }
    .nav_footer li a:before {
        content: url(modules/footer/img/arrow.gif);
        position: absolute;
        left: 10px;
    }
</style>
<div class="main_footer">

    <div class="main_nav_footer">
        <div class="row">
            <div class="col-md-3">
                <ul class="nav_footer">
                    <li><span class="title_nav_footer">Tai mũi họng</span></li>
                    <?php
                    $cap2_bt = $qly_loai->ListLoai(1, 1, 2,-1);
                    while($row_bt = mysql_fetch_assoc($cap2_bt)){
                    ?>
                    <li><a href="<?=$row_bt['TieuDeKD']?>/"><?=$row_bt['TieuDe']?></a></li>            
                    </li>
                    <?php } ?>
                </ul>
                <ul class="nav_footer">
                    <li><span class="title_nav_footer">Vật lý trị liệu</span></li>
                    <?php
                    $cap2_bt = $qly_loai->ListLoai(1, 1, 54,-1);
                    while($row_bt = mysql_fetch_assoc($cap2_bt)){
                    ?>
                    <li><a href="<?=$row_bt['TieuDeKD']?>/"><?=$row_bt['TieuDe']?></a></li>            
                    </li>
                    <?php } ?>
                </ul>
                <ul class="nav_footer">
                    <li><span class="title_nav_footer">Hậu môn</span></li>
                    <?php
                    $cap2_bt = $qly_loai->ListLoai(1, 1, 43,-1);
                    while($row_bt = mysql_fetch_assoc($cap2_bt)){
                    ?>
                    <li><a href="<?=$row_bt['TieuDeKD']?>/"><?=$row_bt['TieuDe']?></a></li>            
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="nav_footer">
                    <li><span class="title_nav_footer">Xương khớp</span></li>
                    <?php
                    $cap2_bt = $qly_loai->ListLoai(1, 1, 11,-1);
                    while($row_bt = mysql_fetch_assoc($cap2_bt)){
                    ?>
                    <li><a href="<?=$row_bt['TieuDeKD']?>/"><?=$row_bt['TieuDe']?></a></li>            
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="nav_footer">
                    <li><span class="title_nav_footer">Đau nhức</span></li>
                    <?php
                    $cap2_bt = $qly_loai->ListLoai(1, 1, 23,-1);
                    while($row_bt = mysql_fetch_assoc($cap2_bt)){
                    ?>
                    <li><a href="<?=$row_bt['TieuDeKD']?>/"><?=$row_bt['TieuDe']?></a></li>            
                    </li>
                    <?php } ?>
                </ul>
                <ul class="nav_footer">
                    <li><span class="title_nav_footer">Bệnh xã hội</span></li>
                    <?php
                    $cap2_bt = $qly_loai->ListLoai(1, 1, 59,-1);
                    while($row_bt = mysql_fetch_assoc($cap2_bt)){
                    ?>
                    <li><a href="<?=$row_bt['TieuDeKD']?>/"><?=$row_bt['TieuDe']?></a></li>            
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="nav_footer">
                    <li><span class="title_nav_footer">Da liễu</span></li>
                    <?php
                    $cap2_bt = $qly_loai->ListLoai(1, 1, 34,-1);
                    while($row_bt = mysql_fetch_assoc($cap2_bt)){
                    ?>
                    <li><a href="<?=$row_bt['TieuDeKD']?>/"><?=$row_bt['TieuDe']?></a></li>            
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="nav_footer">
                    <li><span class="title_nav_footer">Yếu sinh lý</span></li>
                    <?php
                    $cap2_bt = $qly_loai->ListLoai(1, 1, 45,-1);
                    while($row_bt = mysql_fetch_assoc($cap2_bt)){
                    ?>
                    <li><a href="<?=$row_bt['TieuDeKD']?>/"><?=$row_bt['TieuDe']?></a></li>            
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <!--//main_nav_footer-->

    

</div>
<!-- //footer -->
<style type="text/css" media="screen">
    .bottom-footer {
        clear: both;
        width: 1004px;
        height: auto;
        margin: 35px auto;
        padding-bottom: 33px;
    }
    .boder-footer {
        width: 100%;
        height:8px;
        background: url(modules/footer/img/border-footer.jpg);
    }
    ul.nav_logo_footer li {
        color: #666666;
    }
    ul.nav_logo_footer li b {
        color: #009933;
    }
    .wrapp_map_footer img {
        max-height: 262px;
    }
    .form_bottom {
        background: url(modules/footer/img/bg_nhancuocgoi.png);
        background-size: 100% 66px;
        padding: 15px;
    }
    .right_form_bottom form input.text_form {
        width: 65%;
    }
    .right_form_bottom form input.sub_form {
        background: #ee4d22;
        
    }
</style>
<div class="bottom-footer">
    <div class="wrapp_logo_map_footer" itemscope="itemscope" itemtype="http://schema.org/LocalBusiness">
        <div class="wrapp_logo_footer" >
            <a style="opacity: 0;" href="/" title="Y học cổ truyền Sài gòn" href="." itemprop="url"><img src="modules/footer/img/logo_pc_footer.png" alt=""></a>
            <meta itemprop="name" content="Y học cổ truyền Sài gòn">
            <ul class="nav_logo_footer">
                <li><b>Hotline:</b> </li>
                <span itemprop="openingHoursSpecification" itemscope itemtype="http://schema.org/OpeningHoursSpecification">
                    <span itemprop="dayOfWeek" itemscope itemtype="http://schema.org/DayOfWeek">
                        <meta itemprop="name" content="Tất cả các ngày">
                    </span>
                </span>
                <meta itemprop="telephone" content="">
                <meta itemprop="email" content="">
                <li><b>Khám bệnh:</b> 7h00 - 20h00 tất cả các ngày trong tuần [kể cả ngày lễ]</li>
                <li><b>Địa chỉ:</b> <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress"></span></li>
            </ul>
            <div class="form_bottom">
                <div class="left_form_bottom">
                    <span style="opacity:0;">Để lại số điện thoại chúng tôi sẽ gọi lại!</span>
                </div>
                <div class="right_form_bottom">
                    <form action="" id="footer-form">
                        <input type="text" id="ftsdt" class="text_form sodienthoai" placeholder="Nhập số điện thoại của bạn">
                        <input type="button" data-input="footer-form" class="sub_form ajax_submit" value="Gửi">
                    </form>
                </div>
            </div>
        </div>
        <div class="wrapp_map_footer">
            <a style="opacity: 0;" href="#" rel="nofollow" title="1061b Cách mạng tháng 8, Phường 7, Quận Tân Bình"><img itemprop="image" src="modules/footer/img/ban-do.jpg" alt="1061b Cách mạng tháng 8, Phường 7, Quận Tân Bình"></a>
        </div>
    </div>
    <!--//wrapp_logo_map_footer-->
</div>
<script type="application/ld+json">
    {"@context": "http://schema.org","@type": "Organization","url": "http://phongkhamyhoccotruyensaigon.vn/","logo": "http://phongkhamyhoccotruyensaigon.vn/chuyende/landingpage-caychi/images/logo.png"}
</script>