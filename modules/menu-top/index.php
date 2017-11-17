<div class="nav_top_pc">

    <style>

    /* Top-to-Bottom */
    #gruemenu > ul {
        padding: 0px 0;
        box-sizing: border-box;
    }
    #gruemenu.grue_87 ul li { margin:0!important; padding:0!important }
    #gruemenu.grue_87 > ul > li {float: left; display: inline-block; }
    /*#gruemenu.grue_87 > ul > li.has-sub > a::after {border-top-color: #333333;  right: 5px; top: 55%; margin-top:-5px; }
    #gruemenu.grue_87 > ul > li.has-sub.active > a::after,
    #gruemenu.grue_87 > ul > li.has-sub:hover > a {border-top-color: #FFFFFF;}*/
    #gruemenu.grue_87 ul ul { position: absolute; left: -9999px; top: auto; padding-top: 6px;}
    #gruemenu.grue_87 > ul > li > ul::after { content: ""; position: absolute; width: 0; height: 0; border: 5px solid transparent; top: -3px; left: 20px;}
    #gruemenu.grue_87 ul ul ul::after {content: "";position: absolute; width: 0; height: 0; border: 5px solid transparent;  top: 11px; left: -3px;}
    #gruemenu.grue_87 > ul > li:hover > ul {top: auto;left: 0;}
    #gruemenu.grue_87 ul ul ul {padding-top: 0;padding-left: 6px;}
    #gruemenu.grue_87 ul ul > li:hover > ul {left: 220px;top: 0;}
    #gruemenu.grue_87 > ul > li > ul::after { border-bottom-color: #1D8542}
    #gruemenu.grue_87 ul ul ul::after {border-right-color:  #1D8542 }
    #gruemenu.grue_87 ul ul li.has-sub > a::after {border-left-color: #FFFFFF;   right: 17px; top: 14px; }
    #gruemenu.grue_87 ul ul li.has-sub.active > a::after,
    #gruemenu.grue_87 ul ul li.has-sub:hover > a::after {border-left-color:#FFFFFF; }
    #gruemenu.grue_87 { }
    #gruemenu.grue_87 ul li a, #gruemenu.grue_87 
    #gruemenu.grue_87 {font-family: "SF", Arial, Helvetica, sans-serif ;font-weight: 700;}
    #gruemenu.grue_87,
    #gruemenu.grue_87 ul,
    #gruemenu.grue_87 ul li,
    #gruemenu.grue_87 ul > li > a { font-size:13px}
    #gruemenu.grue_87 ul > li > ul > li > a { font-size:12px!important; text-align: left;font-weight: 100;}
    #gruemenu.grue_87 > ul > li > a { color: #000; text-transform:uppercase}
    #gruemenu.grue_87 > ul > li:hover > a,
    #gruemenu.grue_87 > ul > li > a:hover,
    #gruemenu.grue_87 > ul > li.active > a {color: #FFFFFF; background: #177437;}
    #gruemenu.grue_87 ul ul li:hover > a,
    #gruemenu.grue_87 ul ul li.active > a {color: #FFFFFF; background: #177437;}
    #gruemenu.grue_87 ul ul li a, #navigation-toggle {color: #FFFFFF; background: #1D8542;}
    #gruemenu.grue_87 ul ul li:hover > a,
    #gruemenu.grue_87 ul ul li.active > a,
    #navigation-toggle:hover {color: #FFFFFF;background:#177437;}
    #gruemenu.grue_87 #menu-button{ color: #333333; }
    #gruemenu.grue_87 {-webkit-border-radius: 0px; -moz-border-radius: 0px; -o-border-radius: 0px; border-radius: 0px;  border-radius: 0px;}
    #gruemenu.grue_87 ul li:first-child > a  { border-top-left-radius: 0px; border-bottom-left-radius: 0px;}
    #gruemenu.grue_87 ul ul li:first-child > a { border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-left-radius: 0px; border-bottom-right-radius: px;}
    #gruemenu.grue_87 ul ul li:last-child > a {border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;}
    #gruemenu.grue_87 #menu-button::after {border-top: 2px solid #333333; border-bottom: 2px solid #333333; }
    #gruemenu.grue_87 #menu-button::before {border-top: 2px solid #333333; }
    /* Enable Fixed Menu */
        #gruemenu.grue_87.gruefixed { position:fixed; top:0; left:0; width:100%; z-index:9999999}
    /* Enable Mobile Menu */
    @media screen and (max-width: 720px) {
    #navigation-toggle { z-index:999; display:block; position: absolute; top:0px; left:0px; padding:6px 9px 5px 8px; font-size:20px;transition:color linear 0.15s; text-decoration: none !important; }
    #navigation-toggle span.nav-line { display:block; height:3px; width:20px; margin-bottom:4px; background:#fff}
    #navigation-toggle:hover {text-decoration:none; }
    #gruemenu.grue_87  {display: none;}
    }
    .nav_top_pc {margin-bottom: 0;border-bottom: 2px solid #098d44;}
    #gruemenu.grue_87.gruefixed {background: #eee;border-bottom: 2px solid #098d44;}
    </style>

    <a href="#sidr-main" title="Danh mục bệnh" id="navigation-toggle" class="navigation-toggle-87"><img src="images/layout/nav_res.png"></a>
    <div id="sidr-close"><a href="#sidr-close" class="toggle-sidr-close"><span>&nbsp;&nbsp;Y Học Cổ Truyền Việt Nam</span></a></div>
    <div id="gruemenu" class="grue_87 ">
        <ul>
            <li class="item-435">
                <a href="./"><img src="modules/menu-top/img/home.png" alt="Trang chủ"><span class="image-title">Trang chủ</span> </a>
            </li>
            <li class="item-468"><a href="gioi-thieu-phong-kham-y-hoc-co-truyen.html">Giới thiệu</a></li>
            <li class="item-294 has-sub parent"><a><span class="separator">
	Tai mũi họng</span></a>
                <ul class="sub-menu">
                    <?php
                    $cap2_bt = $qly_loai->ListLoai(1, 1, 2,-1);
                    while($row_bt = mysql_fetch_assoc($cap2_bt)){
                    ?>
                    <li class="item-<?=$row_bt['idLoai']?> parent"><a href="<?=$row_bt['TieuDeKD']?>/"><?=$row_bt['TieuDe']?></a></li>            
                    </li>
                    <?php } ?>
                </ul>
            </li>
            <li class="item-233 has-sub parent"><a><span class="separator">
	Xương khớp</span></a>
                <ul class="sub-menu">
                    <?php
                    $cap2_bt = $qly_loai->ListLoai(1, 1, 11,-1);
                    while($row_bt = mysql_fetch_assoc($cap2_bt)){
                    ?>
                    <li class="item-<?=$row_bt['idLoai']?> parent"><a href="<?=$row_bt['TieuDeKD']?>/"><?=$row_bt['TieuDe']?></a></li>            
                    </li>
                    <?php } ?>
                </ul>
            </li>
            <li class="item-238 has-sub parent"><a><span class="separator">
	Đau nhức</span></a>
                <ul class="sub-menu">
                    <?php
                    $cap2_bt = $qly_loai->ListLoai(1, 1, 23,-1);
                    while($row_bt = mysql_fetch_assoc($cap2_bt)){
                    ?>
                    <li class="item-<?=$row_bt['idLoai']?> parent"><a href="<?=$row_bt['TieuDeKD']?>/"><?=$row_bt['TieuDe']?></a></li>            
                    </li>
                    <?php } ?>
                </ul>
            </li>
            <li class="item-448 has-sub parent"><a><span class="separator">
	Da liễu</span></a>
                <ul class="sub-menu" >
                    <?php
                    $cap2_bt = $qly_loai->ListLoai(1, 1, 34,-1);
                    while($row_bt = mysql_fetch_assoc($cap2_bt)){
                    ?>
                    <li class="item-<?=$row_bt['idLoai']?> parent"><a href="<?=$row_bt['TieuDeKD']?>/"><?=$row_bt['TieuDe']?></a></li>            
                    </li>
                    <?php } ?>
                </ul>
            </li>
            <li class="item-43 has-sub parent"><a><span class="separator">
	Hậu môn</span></a>
                <ul class="sub-menu">
                    <?php
                    $cap2_bt = $qly_loai->ListLoai(1, 1, 43,-1);
                    while($row_bt = mysql_fetch_assoc($cap2_bt)){
                    ?>
                    <li class="item-<?=$row_bt['idLoai']?> parent"><a href="<?=$row_bt['TieuDeKD']?>/"><?=$row_bt['TieuDe']?></a></li>            
                    </li>
                    <?php } ?>
                </ul>
            </li>
            <li class="item-470 has-sub parent"><a><span class="separator">
	Yếu sinh lý</span></a>
                <ul class="sub-menu">
                    <?php
                    $cap2_bt = $qly_loai->ListLoai(1, 1, 45,-1);
                    while($row_bt = mysql_fetch_assoc($cap2_bt)){
                    ?>
                    <li class="item-<?=$row_bt['idLoai']?> parent"><a href="<?=$row_bt['TieuDeKD']?>/"><?=$row_bt['TieuDe']?></a></li>            
                    </li>
                    <?php } ?>
                </ul>
            </li>
            <li class="item-470 has-sub parent"><a><span class="separator">
    Bệnh xã hội</span></a>
                <ul class="sub-menu">
                    <?php
                    $cap2_bt = $qly_loai->ListLoai(1, 1, 59,-1);
                    while($row_bt = mysql_fetch_assoc($cap2_bt)){
                    ?>
                    <li class="item-<?=$row_bt['idLoai']?> parent"><a href="<?=$row_bt['TieuDeKD']?>/"><?=$row_bt['TieuDe']?></a></li>            
                    </li>
                    <?php } ?>
                </ul>
            </li>
            <li class="item-470 has-sub parent"><a><span class="separator">
    Vật lý trị liệu</span></a>
                <ul class="sub-menu">
                    <?php
                    $cap2_bt = $qly_loai->ListLoai(1, 1, 54,-1);
                    while($row_bt = mysql_fetch_assoc($cap2_bt)){
                    ?>
                    <li class="item-<?=$row_bt['idLoai']?> parent"><a href="<?=$row_bt['TieuDeKD']?>/"><?=$row_bt['TieuDe']?></a></li>            
                    </li>
                    <?php } ?>
                    
                </ul>

            </li>
            <li class="item-1000"><a href="lien-he-phong-kham-y-hoc-co-truyen.html">Liên hệ</a></li>
        </ul>
    </div>

</div>
<!-- //menu top pc -->