<?php 
    require_once "lib/class_ratings.php";
    if(isset($qly_rt)==false) $qly_rt = new rating;
    $ip_user_current = $qly_ql->getClientIP();
    $content_vote = $qly_rt->VotebyId($idTT);
    $row_vote = mysql_fetch_assoc($content_vote);
    $_SESSION["idTin_DaXem"] = $idTT;
    $percent_avg = ( $row_vote['total_value'] / $row_vote['total_votes'] ) ;
    $percent = round($percent_avg* 30,2);
    $total_votes = $row_vote['total_votes'];
    $check_vote = $qly_rt->checkVote($idTT,$ip_user_current);
    if(!$check_vote)
    {
        $percent_avg = 0;
        $percent = 0;
        $total_votes  = 0;
    }
    $check_ip = $qly_rt->checkIP($idTT,$ip_user_current);
?>
<style type="text/css" media="screen">
.content_chitiet {
    font-size: 16px;
}
.content_chitiet h2 {
    color: #009e41;
    font-size: 16px;
    border-bottom: 1px #009e41 solid;
    background-image: url(images/icon-chitiet.png);
    background-repeat: no-repeat;
    background-size: 25px 25px;
    padding-left: 30px;
    padding-top: 10px;
    padding-bottom: 10px;
    background-position: center left;
    text-transform: uppercase;
}
.content_chitiet p {
    margin-bottom: 15px;
    text-align: justify;
    font-size: 100%;
}
article.item-page {
    background: white;
    padding: 2%;
    box-sizing: border-box;
}
.item-page img {
    height: auto !important;
}
</style>
<div id="main_all">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php @include "blocks/br_3cap_trangchitiet.php"; ?>
                <?php 
                $TieuDeKD = $_GET['TieuDeKD'];
                $TieuDeKD = $ql_pa->XoaDinhDang($TieuDeKD);
                $idPa = $ql_pa->LayID($TieuDeKD);
                $idTT = $qly_tin->LayID($TieuDeKD);
                $keywords = $qly_tin->LayKeyword($idTT);
                
                $array_kw = explode(',',$keywords);
                $total_kw = count($array_kw);
                $kw_sql = '';
                foreach ($array_kw as $kw) {
                    $total_kw--;
                    $kw = ltrim($kw);
                    if($kw != false && $kw != '')
                    {
                        if($total_kw > 0)
                        {
                            $kw_sql .= "Keyword LIKE '%".$kw."%' or ";
                        }
                        else
                        {
                            $kw_sql .=  "Keyword LIKE '%".$kw."%'";
                        }
                    }
                    
                }
                
                $time_post = sw_get_current_weekday($row['NgayDang']);
                $date_meta = date('d-m-Y', $row['NgayDang']);
                ?>
                <article class="item-page" itemscope itemtype="http://schema.org/NewsArticle">
                    <h2 class="title_article" itemprop="headline" title="<?php echo $row['TieuDe']; ?>">
                        <a  itemprop="name" href="<?=$actual_link;?>">
                    <?php echo $row['TieuDe']; ?></a>
                    </h2>
                    <meta itemprop="description" content="<?php echo $row['TomTat']; ?>">
                    <meta itemprop="mainEntityOfPage" content="http://phongkhamyhoccotruyensaigon.vn/<?php echo $row['TieuDeKD']; ?>.html">
                    <div class="post-date" style="display: none;">
                        <div class="left img-avatar" itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
                                <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                                    <img src="chuyende/landingpage-caychi/images/logo.png" alt="Y Học cổ truyền sài gòn">
                                    <meta itemprop="url" content="http://phongkhamyhoccotruyensaigon.vn/chuyende/landingpage-caychi/images/logo.png">
                                </div>
                                <meta itemprop="name" content="Y Học cổ truyền sài gòn">
                            </div>
                            <div class="date-author left">
                                <div class="author" itemprop="author" itemscope itemtype="http://schema.org/Person"><a href="." title="Y Học cổ truyền sài gòn"><span itemprop="name">Y Học cổ truyền sài gòn</span></a></div>
                        <div class="date"><span itemprop="datePublished" content="<?=$date_meta;?>"><?=$date_meta;?></span><span itemprop="dateModified" content="<?=$date_meta;?>"><?=$date_meta;?></span></div>

                    </div>
                    <meta itemprop="url" content="http://phongkhamyhoccotruyensaigon.vn/<?php echo $row['TieuDeKD']; ?>.html">
                    </div>
                    <?php include_once('modules/rating/index.php');?>
                    <div class="content_chitiet">
                        <div class="featured-image" style="display: none;">
                            <div itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                                <img src="<?=$row['UrlHinh'];?>" alt="<?=$row['TieuDe'];?>">
                                <meta itemprop="width" content="500">
                                <meta itemprop="height" content="350">
                                <meta itemprop="url" content="http://phongkhamyhoccotruyensaigon.vn/<?php echo $row['TieuDeKD']; ?>.html">
                            </div>
                        </div>    
                        <?php echo $row['NoiDung']?>
                    </div>
                    <div class="form_article ">
                        <p class="suprsesf">Để lại SĐT được vấn miễn phí</p>
                        <form method="post" action="">
                            <input type="text" name="SoDT" id="sdtbaiviet" class="khslfha" placeholder="Nhập số điện thoại!">
                            <input type="button" class="btnbaiviet" value="Gửi" name="btn_sdt_goilai">
                        </form>
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
                    <div class="related">
                        <div class="related-items-title">Bài viết liên quan</div>
                        <ul class="related-items">
                            <?php 

                            if($idTT > 0) {
                            $order = " order by idTT DESC";
                            $where = " and idTT <> {$idTT} and (".$kw_sql.")";
                            $tinlq = $qly_tin->ListTin_Where(-1,74, 0, 4, $where, $order);
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
                </article>
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
</div>