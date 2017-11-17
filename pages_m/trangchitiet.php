<style type="text/css">
    .item-page p {
        font-size: 12pt;
        line-height: 15pt;
        font-family: arial,helvetica,sans-serif;
    }
    ul.related-items {
        padding: 0;
        margin: 0;
    }
    .item-page img {
        height: auto !important;
    }
</style>
    <?php include_once('modules_m/wrapp_logo_search/index.php'); ?>
    <?php include_once('modules_m/menu_top/index.php'); ?>
    <?php include_once('modules_m/slide_mb/index.php'); ?>
    <?php include_once('modules_m/wrapp_img/index.php'); ?>
    <?php include_once('blocks_m/br_3cap_trangchitiet.php'); ?>
    <div class="item-page">
        <h2 class="title_article"><a href="<?=$actual_link;?>"><?php echo $row['TieuDe']; ?></a></h2>
        <?php echo $row['NoiDung']?>
        <div class="form_article">
                        <p class="suprsesf">Để lại SĐT được vấn miễn phí</p>
                        <form method="post" action="">
                            <input type="text" name="SoDT" id="sdtbaiviet" class="khslfha" placeholder="Nhập số điện thoại!">
                            <input type="button" class="btnbaiviet" value="Gửi" name="btn_sdt_goilai" style="
    padding: 4px;
">
                        </form>
        </div>
        <div class="related">
            <div class="related-items-title">Bài viết liên quan</div>
                <ul class="related-items">
                            <?php 
                            if($idTT > 0) {
                            $order = " order by idTT DESC";
                            $where = " and idTT <> {$idTT}";
                            $tinlq = $qly_tin->ListTin_Where(-1,-1, 0, 4, $where, $order);
                            if(mysql_num_rows($tinlq)>0) { ?>
                            <?php while($rowlq = mysql_fetch_assoc($tinlq)){ ?>
                            <li class="related-item">
                                <a href="<?=$rowlq['TieuDeKD'];?>.html"><?= $qly_tin->cutString(strip_tags($rowlq['TieuDe']),80,' ...');?></a>
                            </li>
                            <?php } ?>
                            <?php } ?>
                            <?php } ?>
                            
                </ul>
        </div>
    </div>

    <?php include_once('modules_m/moi-truong/index.php'); ?>