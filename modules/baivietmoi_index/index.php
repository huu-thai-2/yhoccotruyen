<div class="baivietmoi_index">
    <h3 class="title_pc">
        <a href="/" title="">
            <span>Bài viết mới</span>
        </a>
        <img src="modules/baivietmoi_index/img/icon-bvm.png" alt="">
    </h3>
    <div class="moduletable">
        <div class="sj-basic-news">
            <?php 
            $tinlq_2 = $qly_tin->ListTin_Where(-1,-1, 0, 5, '', ' ORDER BY idTT Desc');
            if(mysql_num_rows($tinlq_2)>0) {
            ?>
            <ul class="bs-items">
                <?php $count_news_index = 1;?>
                <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                
                <li class="bs-item cf <?php if($count_news_index == 1) echo 'first';?>">
                    <div class="bs-image">
                        <a href="/<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>">
                            <img class="lazy" data-original="<?=$rowlq['UrlHinh'];?>" alt="<?=$rowlq['TieuDeKD'];?>"> </a>
                    </div>
                    <div class="bs-content">
                        <div class="bs-title">
                            <a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>">
                            <?=$rowlq['TieuDe'];?></a>
                        </div>
                        <div class="bs-description">
                            <?= $qly_tin->cutString(strip_tags($rowlq['TomTat']),80,' ...');?></div>
                    </div>
                </li>
                <?php $count_news_index++; ?>
                <?php } ?>
            </ul>
            <?php } ?>
        </div>

    </div>

</div>
<!-- //Bài viết mới nhất -->