
<div class="menu_top">
    <div id="dl-menu" class="dl-menuwrapper">
        <div class="home_m">
            <a href="/./"><img src="images/layout/home.png" alt=""></a>
        </div>
        <div class="gt_m"><a href="gioi-thieu-phong-kham-y-hoc-co-truyen.html">Giới thiệu</a></div>
        <button class="dl-trigger">Điều trị</button>
        <!-- The class on the root UL tag was changed to match the Blueprint nav style -->
        <ul class="joomla-nav dl-menu">
            <li class="dl-back"><a href="#">Quay lại</a></li>
            <li id="current" class="selected item435">
                <a href="/"><img src="images/layout/home.png" alt="Trang chủ"><span class="image-title">Trang chủ</span> </a>
            </li>
            <li class="item468"><a href="/gioi-thieu">Giới thiệu</a></li>
            <li class="parent item294"><a href="#" class="separator">Tai mũi họng</a>
                <ul class="dl-submenu">
                    <?php
                    $cap2_bt = $qly_loai->ListLoai(1, 1, 2,-1);
                    while($row_bt = mysql_fetch_assoc($cap2_bt)){
                    ?>
                    <li class="item<?=$row_bt['idLoai']?>"><a href="<?=$row_bt['TieuDeKD']?>/"><?=$row_bt['TieuDe']?></a></li>            
                    </li>
                    <?php } ?>
                </ul>
            </li>
            <li class="parent item233"><a href="#" class="separator">Xương khớp</a>
                <ul class="dl-submenu">
                    <?php
                    $cap2_bt = $qly_loai->ListLoai(1, 1, 11,-1);
                    while($row_bt = mysql_fetch_assoc($cap2_bt)){
                    ?>
                    <li class="item<?=$row_bt['idLoai']?>"><a href="<?=$row_bt['TieuDeKD']?>/"><?=$row_bt['TieuDe']?></a></li>            
                    </li>
                    <?php } ?>
                </ul>
            </li>
            <li class="parent item238"><a href="#" class="separator">Đau nhức</a>
                <ul class="dl-submenu">
                    <?php
                    $cap2_bt = $qly_loai->ListLoai(1, 1, 23,-1);
                    while($row_bt = mysql_fetch_assoc($cap2_bt)){
                    ?>
                    <li class="item<?=$row_bt['idLoai']?>"><a href="<?=$row_bt['TieuDeKD']?>/"><?=$row_bt['TieuDe']?></a></li>            
                    </li>
                    <?php } ?>
                </ul>
            </li>
            <li class="parent item448"><a href="#" class="separator">Da liễu</a>
                <ul class="dl-submenu">
                    <?php
                    $cap2_bt = $qly_loai->ListLoai(1, 1, 34,-1);
                    while($row_bt = mysql_fetch_assoc($cap2_bt)){
                    ?>
                    <li class="item<?=$row_bt['idLoai']?>"><a href="<?=$row_bt['TieuDeKD']?>/"><?=$row_bt['TieuDe']?></a></li>            
                    </li>
                    <?php } ?>
                </ul>
            </li>
            
            <li class="parent item469"><a href="#" class="separator">Hậu môn</a>
                <ul class="dl-submenu">
                    <?php
                    $cap2_bt = $qly_loai->ListLoai(1, 1, 43,-1);
                    while($row_bt = mysql_fetch_assoc($cap2_bt)){
                    ?>
                    <li class="item<?=$row_bt['idLoai']?>"><a href="<?=$row_bt['TieuDeKD']?>/"><?=$row_bt['TieuDe']?></a></li>            
                    </li>
                    <?php } ?>
                </ul>
            </li>
            <li class="parent item470"><a href="#" class="separator">Yếu sinh lý</a>
                <ul class="dl-submenu">
                    <?php
                    $cap2_bt = $qly_loai->ListLoai(1, 1, 45,-1);
                    while($row_bt = mysql_fetch_assoc($cap2_bt)){
                    ?>
                    <li class="item<?=$row_bt['idLoai']?>"><a href="<?=$row_bt['TieuDeKD']?>/"><?=$row_bt['TieuDe']?></a></li>            
                    </li>
                    <?php } ?>
                </ul>
            </li>
            <li class="parent item470"><a href="#" class="separator">Bệnh xã hội</a>
                <ul class="dl-submenu">
                    <?php
                    $cap2_bt = $qly_loai->ListLoai(1, 1, 59,-1);
                    while($row_bt = mysql_fetch_assoc($cap2_bt)){
                    ?>
                    <li class="item<?=$row_bt['idLoai']?>"><a href="<?=$row_bt['TieuDeKD']?>/"><?=$row_bt['TieuDe']?></a></li>            
                    </li>
                    <?php } ?>
                </ul>
            </li>
           <li class="parent item790"><a href="#" class="separator">Vật lý trị liệu</a>
                <ul class="dl-submenu">
                    <?php
                    $cap2_bt = $qly_loai->ListLoai(1, 1, 54,-1);
                    while($row_bt = mysql_fetch_assoc($cap2_bt)){
                    ?>
                    <li class="item<?=$row_bt['idLoai']?>"><a href="<?=$row_bt['TieuDeKD']?>/"><?=$row_bt['TieuDe']?></a></li>            
                    </li>
                    <?php } ?>
                   
                </ul>
            </li>
            <li class="item471"><a href="#">Liên hệ</a></li>
        </ul>

        <div class="lh_m"><a href="lien-he-phong-kham-y-hoc-co-truyen.html">Liên hệ</a></div>
    </div>
</div>
<!-- //menu_top -->
