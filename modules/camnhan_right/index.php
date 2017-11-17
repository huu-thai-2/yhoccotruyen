<style type="text/css">
        .right_camnhan {
            float: left;
            width: 100%;
        }   
        ul.col_cn_bn{
            margin: 0;
            padding: 0;
        }
        ul.col_cn_bn li.bs-item .bs-image{
            display: table;
            width: 100px;
            height: 100px;
            box-sizing: border-box;
            background: #eee;
            padding: 0px;
            margin-bottom: 10px;
            float: left;
            margin-right: 15px;
        }
        ul.col_cn_bn li.bs-item .bs-image a {
            display: table-cell;
            vertical-align: middle;
            height: 100px;
            width: auto;
            text-align: center;
        }
        ul.col_cn_bn li.bs-item .bs-image a img {
            max-height: 100%;
            max-width: 100%;
        }
        ul.col_cn_bn li.bs-item .bs-content .bs-title a{
            text-align: justify;
            text-decoration: none;
            color: #000;
            text-transform: uppercase;
            font-size: 12px;
            font-weight: bold;
        }
        ul.col_cn_bn li.bs-item .bs-content .bs-title a:hover{
            color: #098d44;
            text-decoration: underline;
        }
        ul.col_cn_bn li.bs-item .bs-content .bs-description{
            color: #333;
        }
        .btn_more_all a{
            width: 200px;
            padding: 5px 20px;
            background: #eee;
            color: #000;
            display: table;
            text-align: center;
            text-transform: inherit;
            border-radius: 3px;
            margin: 0 auto;
        }
</style>
<div class="right_camnhan">
    <h3 class="title_pc">
        <a href="<?=$link_chat;?>" title="">
            <span>Cảm nhận bệnh nhân</span>
         </a>
        <img src="modules/camnhan_right/img/cn.png" alt="">
    </h3>
    <div class="cam_nhan_bn">
        <?php 
        $tinlq_2 = $qly_tin->ListTin_Where(-1,2, 0, 10, '', '');
        if(mysql_num_rows($tinlq_2)>0) {
        ?>
        <ul class="col_cn_bn">
        <?php $count_news_index = 1;?>
        <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                    
            <li class="bs-item cf <?php if($count_news_index == 1) echo 'first';?>">
                <div class="bs-image">
                    <a href="/<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>">
                        <img class="lazy" data-original="<?=$rowlq['UrlHinh'];?>" src="<?=$rowlq['UrlHinh'];?>" alt="<?=$rowlq['TieuDeKD'];?>"> 
                    </a>
                </div>
                <div class="bs-content">
                    <div class="bs-title">
                        <a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>">
                            <?= $qly_tin->cutString(strip_tags($rowlq['TieuDe']),80,' ...');?>
                         </a>
                    </div>
                    <div class="bs-description">
                        <?= $qly_tin->cutString(strip_tags($rowlq['TomTat']),80,' ...');?>
                    </div>
                </div>
            </li>
        <?php $count_news_index++; ?>
        <?php } ?>
        </ul>
        <?php } ?>
    </div>
    <div class="btn_more_all">
        <a href="/cam-nhan-benh-nhan/">[ Xem tất cả bài viết... ]</a>
    </div>
</div>