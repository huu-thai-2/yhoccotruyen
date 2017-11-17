<div id="main_all">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <div class="breadcrumbs">
                    <div class="moduletable">

                        <?php include_once('blocks/br_3cap_trangloai.php'); ?>
                    </div>

                </div>
                <!-- //breadcrumbs -->

                <div id="system-message-container">
                </div>
                <div class="blog">
                	<?php while($row_tt = mysql_fetch_assoc($tt)){ ?>
                    <div class="items-row cols-1 row-5">
					    <div class="item column-1">

					        <h2>
							<a href="<?php echo $row_tt['TieuDeKD']; ?>.html"><?php echo $row_tt['TieuDe']; ?></a>
							</h2>

					        <a href="<?php echo $row_tt['TieuDeKD']; ?>.html"><img src="<?=$row_tt['UrlHinh']; ?>" class="lazy" alt="<?php echo $row_tt['TieuDe']; ?>" width="404" height="308"></a>
					        <p class="Normal1" style="margin: 0in 0in 0.0001pt; line-height: 13.5pt; background-image: initial; background-position: initial; background-repeat: initial; background-attachment: initial;"><span style="color: #333333; font-size: 14pt;"><?=$qly_tin->cutString(strip_tags($row_tt['TomTat']), 180, '...');?></span></p>

					        <p class="readmore">
					            <a href="<?php echo $row_tt['TieuDeKD']; ?>.html">
										Xem tiếp...</a>
					        </p>

					        <div class="item-separator"></div>
					    </div>
					    <span class="row-separator"></span>
					</div>
                    <?php } ?>
	                <?php if(mysql_num_rows ($tt) < 1)
	                {
	                   echo '<h2>Danh mục này chưa có bài viết</h2>';
	                }
	                ?>

                    <div class="pagination">
						<?php if($totalRows > $pageSize) { ?>
						<?php $urlchinh = $TenLoaiConKD;?>
						<?php echo $qly_tin->pagesList2($urlchinh, $totalRows, $pageNum, $pageSize, 2); ?>
						<?php } ?>
                        
                    </div>

                </div>

               

                <div class="img_notes">
                    <div class="moduletable">

                        <div class="custom">
                            <p>
                                <a href="<?=$link_chat;?>" target="_blank"><img src="images/banners/banner-article.gif" alt="banner-article" class="img_bottom"></a>
                            </p>
                        </div>
                    </div>

                </div>
                <!-- //images notes -->

            </div>
            <div class="col-md-4">
            	<?php include "modules/tuvan_right/index.php"; ?>
            	<?php include "modules/camnhan_right/index.php"; ?>
            	<?php include "modules/right_form/index.php"; ?>
            </div>
            <?php include "modules/wrapp_moitruong/index.php"; ?>
            <?php include "modules/bao_chi/index.php"; ?>
    </div>
</div>