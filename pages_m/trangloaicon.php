    <?php include_once('modules_m/wrapp_logo_search/index.php'); ?>
    <?php include_once('modules_m/menu_top/index.php'); ?>
    <?php include_once('modules_m/slide_mb/index.php'); ?>
    <?php include_once('modules_m/wrapp_img/index.php'); ?>
    <?php include_once('blocks_m/br_3cap_trangloaicon.php'); ?>
    <div class="trieuchung_pc">
        <div class="jv_news_wrap">

            <div class="jv-frame-cat">
                <div class="jv-category">
                    <div class="jvpadding">
                        <div class="cls"></div>
                        <ul class="lead">
                            <li class="parent pli1 active">
                                <ul class="child">
                                    <?php while($row_tt = mysql_fetch_assoc($tt)){ ?>
                                    <li class="jv-article-title">
                                        <div class="left">
                                            <a href="<?php echo $row_tt['TieuDeKD']; ?>.html" title="<?php echo $row_tt['TieuDeKD']; ?>">
                                                <img src="<?php echo $row_tt['UrlHinh']; ?>" alt="<?php echo $row_tt['TieuDeKD']; ?>" title="<?php echo $row_tt['TieuDeKD']; ?>" class="jv-sectcont-thumb-left">
                                            </a>
                                        </div>
                                        <div class="right">
                                            <h4><a href="<?php echo $row_tt['TieuDeKD']; ?>.html" title="<?php echo $row_tt['TieuDeKD']; ?>"><?php echo $row_tt['TieuDe']; ?></a></h4>
                                            <p class="jv-sectcont-introtext"><?=$qly_tin->cutString(strip_tags($row_tt['TomTat']), 180, '...');?></p>
                                        </div>
                                    </li>
                                    <?php } ?>
                                    
                                </ul>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <?php include_once('modules_m/moi-truong/index.php'); ?>