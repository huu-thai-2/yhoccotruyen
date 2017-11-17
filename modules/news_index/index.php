<div class="news_index">
    <h3 class="title_pc">
        <a href="/" title="">
            <span>Các bệnh tai mũi họng</span>
        </a>
        <img src="modules/news_index/img/icon-btg.png" alt="">
    </h3>
    <style type="text/css" media="screen">
        .list_cate_slide {
            width: 100%;
            display: inline-block;
            overflow: hidden;
        }
        .list_cate_slide a {
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background:url(images/bg_all.gif) repeat;
            float: left;
            margin-right: 5px;
            box-sizing: border-box;
            text-decoration: none;
            text-transform: uppercase;
            cursor: pointer;

        }
        .list_cate_slide a.active-cate {
            background: #098d44;
        }
        .list_cate_slide a:hover {
            color: white;
            background: #009e41;
        }
        ul.bs-items li .bs-description{
            overflow: hidden;
            white-space: nowrap;
            text-overflow:ellipsis;
        }
        ul.bs-items li.first .bs-description{
            overflow: inherit;
            white-space: inherit;
        }
        .sj-basic-news .bs-items li.bs-item.cf.first .bs-image{
            display: table;
            width: 100%;
            height: 200px;
            box-sizing: border-box;
            background: #eee;
            padding: 0px;
            margin-bottom: 10px;
        }
        .sj-basic-news .bs-items li.bs-item.cf.first .bs-image a {
            display: table-cell;
            vertical-align: middle;
            height: 200px;
            width: auto;
            text-align: center;
        }
        .sj-basic-news .bs-items li.bs-item.cf.first .bs-image a img {
            max-height: 100%;
            max-width: 100%;
        }
        .sj-basic-news .bs-items li.bs-item.cf .bs-image{
            display: table;
            width: 80px;
            height: 55px;
            box-sizing: border-box;
            background: #eee;
            padding: 0px;
            margin-right: 10px;
        }
        .sj-basic-news .bs-items li.bs-item.cf .bs-image a {
            display: table-cell;
            vertical-align: middle;
            height: 55px;
            width: auto;
            text-align: center;
        }
        .sj-basic-news .bs-items li.bs-item.cf .bs-image a img {
            max-height: 100%;
            max-width: 100%;
        }
    </style>
    <div class="list_cate_slide" parent="2">
        <a class="active-cate" idLoai="10">Viêm mũi dị ứng</a>
        <a idLoai="9">Viêm xoang</a>
        <a idLoai="8">Viêm tai</a>
        <a idLoai="7">Viêm họng</a>
    </div>
    <div id="list_news_index_2" class="moduletable">
        <div class="sj-basic-news">
            <?php 
            $tinlq_2 = $qly_tin->ListTin_Where(-1,2, 0, 5, '', '');
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
                                <?= $qly_tin->cutString(strip_tags($rowlq['TieuDe']),50,' ...');?>
                            </a>
                        </div>
                        <div class="bs-description">
                            <?= $qly_tin->cutString(strip_tags($rowlq['TomTat']),100,' ...');?></div>
                    </div>
                </li>
                <?php $count_news_index++; ?>
                <?php } ?>
            </ul>
            <?php } ?>
        </div>

    </div>

</div>
<!-- //bai viet xem nhieu -->
<!-- //Xương khớp -->
<div class="news_index">
    <h3 class="title_pc">
        <a href="/" title="">
            <span>Các bệnh xương khớp</span>
        </a>
        <img src="modules/news_index/img/icon-btg.png" alt="">
    </h3>
    <div class="list_cate_slide" parent="11">
        <a idLoai="21" class="active-cate">Thoái hóa khớp</a>
        <a idLoai="20">Gai cột sống</a>
        <a idLoai="19">Thoái hóa khớp gối</a>
    </div>
    <div id="list_news_index_11" class="moduletable">
        <div class="sj-basic-news">
            <?php 
            $tinlq_2 = $qly_tin->ListTin_Where(-1,11, 0, 5, '', '');
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
                            <?= $qly_tin->cutString(strip_tags($rowlq['TieuDe']),50,' ...');?>
                            </a>

                        </div>
                        <div class="bs-description">
                            <?= $qly_tin->cutString(strip_tags($rowlq['TomTat']),100,' ...');?></div>
                    </div>
                </li>
                <?php $count_news_index++; ?>
                <?php } ?>
            </ul>
            <?php } ?>
        </div>

    </div>

</div>
<!-- // Đau nhức -->
<div class="news_index">
    <h3 class="title_pc">
        <a href="/" title="">
            <span>Các bệnh đau nhức</span>
        </a>
        <img src="modules/news_index/img/icon-btg.png" alt="">
    </h3>
    <div class="list_cate_slide" parent="23">
        <a idLoai="27" class="active-cate">Đau khớp háng</a>
        <a idLoai="28">Đau vai gáy</a>
        <a idLoai="29">Đau khớp gối</a>
        <a idLoai="30">Đau lưng</a>
    </div>
    <div id="list_news_index_23" class="moduletable">
        <div class="sj-basic-news">
            <?php 
            $tinlq_2 = $qly_tin->ListTin_Where(-1,23, 0, 5, '', '');
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
                                <?= $qly_tin->cutString(strip_tags($rowlq['TieuDe']),50,' ...');?>
                            </a>
                        </div>
                        <div class="bs-description">
                            <?= $qly_tin->cutString(strip_tags($rowlq['TomTat']),100,' ...');?></div>
                    </div>
                </li>
                <?php $count_news_index++; ?>
                <?php } ?>
            </ul>
            <?php } ?>
        </div>

    </div>

</div>
<!-- // Da liễu -->
<div class="news_index">
    <h3 class="title_pc">
        <a href="/" title="">
            <span>Các bệnh da liễu</span>
        </a>
        <img src="modules/news_index/img/icon-btg.png" alt="">
    </h3>
    <div class="list_cate_slide" parent="34">
        <a idLoai="60" class="active-cate">Bệnh sùi mào gà</a>
        <a idLoai="37">Bệnh vảy nến</a>
        <a idLoai="36">Bệnh mề đay</a>
        <a idLoai="35">Dị ứng da</a>
    </div>
    <div id="list_news_index_34" class="moduletable">
        <div class="sj-basic-news">
            <?php 
            $tinlq_2 = $qly_tin->ListTin_Where(60,-1, 0, 5, '', '');
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
                                <?= $qly_tin->cutString(strip_tags($rowlq['TieuDe']),50,' ...');?>
                            </a>
                        </div>
                        <div class="bs-description">
                            <?= $qly_tin->cutString(strip_tags($rowlq['TomTat']),100,' ...');?></div>
                    </div>
                </li>
                <?php $count_news_index++; ?>
                <?php } ?>
            </ul>
            <?php } ?>
        </div>

    </div>

</div>
<!-- // Vật lý trị liệu -->
<div class="news_index">
    <h3 class="title_pc">
        <a href="/" title="">
            <span>Vật lý trị liệu</span>
        </a>
        <img src="modules/news_index/img/icon-btg.png" alt="">
    </h3>
    <div class="list_cate_slide" parent="54">
        <a idLoai="57" class="active-cate">Điện Châm</a>
        <a idLoai="56">Thủy Châm</a>
        <a idLoai="55">Châm cứu bấm huyệt</a>
    </div>
    <div id="list_news_index_54" class="moduletable">
        <div class="sj-basic-news">
            <?php 
            $tinlq_2 = $qly_tin->ListTin_Where(-1,54, 0, 5, '', '');
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
                                <?= $qly_tin->cutString(strip_tags($rowlq['TieuDe']),50,' ...');?>
                            </a>
                        </div>
                        <div class="bs-description">
                            <?= $qly_tin->cutString(strip_tags($rowlq['TomTat']),100,' ...');?></div>
                    </div>
                </li>
                <?php $count_news_index++; ?>
                <?php } ?>
            </ul>
            <?php } ?>
        </div>

    </div>

</div>

