<div class="wrapp_tab">
	<h6><span>Tai mũi họng</span></h6>
	<div id="gk-tabs-110" class="gkTabsGK5" data-config="{'activator':'click','animation':'0','animation_interval':'5000','animation_type':'opacity','active_tab':'1','cookie_save':'0','auto_height':'1','module_height':'200','rtl':'0'}" data-swipe="0">
        <div class="gkTabsWrap vertical">
            <ol class="gkTabsNav">

                <li class="gkTab gkTabs-1 active" data-animation="default">
                    Viêm họng </li>
                <li class="gkTab gkTabs-2" data-animation="default">
                    Viêm tai </li>
                <li class="gkTab gkTabs-3" data-animation="default">
                    Viêm xoang </li>
            </ol>

            <div class="gkTabsContainer" style="height: auto;">

                <div class="gkTabsItem gk-opacity gk-active">
                    <div class="jv_news_wrap">

                        <div class="jv-frame-cat">
                            <div class="jv-category">
                                <div class="jvpadding">
                                    <ul class="jv-title-category" style="display:none;">
                                        <li class="jv-firstitem"><a href="/viem-hong/"><span class="jv-title-category">Viêm họng</span></a></li>
                                    </ul>
                                    <div class="cls"></div>
                                    <ul class="lead">
                                        <li class="parent pli1 active">
                                            <?php 
                                            $tinlq_2 = $qly_tin->ListTin_Where(7,2, 0, 1, '', ' ORDER BY LuotXem Desc');
                                            if(mysql_num_rows($tinlq_2)>0) {
                                            ?>
                                            <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                                            <ul class="child">

                                                <li class="jv-article-title">
                                                    <div class="left">
                                                        <a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>">
                                                            <img  src="<?=$rowlq['UrlHinh'];?>" alt="<?=$rowlq['TieuDe'];?>" title="<?=$rowlq['TieuDe'];?>" class="jv-sectcont-thumb-left lazy">
                                                        </a>
                                                    </div>
                                                    <div class="right">
                                                        <h4><a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>"><?=$rowlq['TieuDe'];?></a></h4>
                                                        <p class="jv-sectcont-introtext"><?=$qly_tin->cutString(strip_tags($rowlq['TomTat']),80,' ...');?></p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <?php } ?>
                                            <?php } ?>
                                            
                                        </li>
                                    </ul>
                                    <!--<p class="more_link"><php echo JTEXT::_('NEWS MORE LINK'); ?></p>-->
                                    <ul class="article-item clearfix">
                                        <?php 
                                            $tinlq_2 = $qly_tin->ListTin_Where(7,2, 1, 4, '', ' ORDER BY LuotXem Desc');
                                            if(mysql_num_rows($tinlq_2)>0) {
                                            ?>
                                            <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
 
                                            
                                            <li>
                                                <a href="<?=$rowlq['TieuDeKD'];?>.html"><?=$rowlq['TieuDe'];?></a>
                                            </li>
                                        <?php } }?>
                                    </ul>
                                    <ul class="nav">
                                        <li class="nli active">
                                            <div class="readmore_content">
                                                <a href="/viem-hong">
                                                    <div class="btn_more_all"></div>
                                                </a>
                                            </div>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="gkTabsItem gk-opacity gk-hide">
                    <div class="jv_news_wrap">

                        <div class="jv-frame-cat">
                            <div class="jv-category">
                                <div class="jvpadding">
                                    <ul class="jv-title-category" style="display:none;">
                                        <li class="jv-firstitem"><a href="/viem-tai/"><span class="jv-title-category">Viêm họng</span></a></li>
                                    </ul>
                                    <div class="cls"></div>
                                    <ul class="lead">
                                        <li class="parent pli1 active">
                                            <?php 
                                            $tinlq_2 = $qly_tin->ListTin_Where(8,2, 0, 1, '', ' ORDER BY LuotXem Desc');
                                            if(mysql_num_rows($tinlq_2)>0) {
                                            ?>
                                            <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                                            <ul class="child">

                                                <li class="jv-article-title">
                                                    <div class="left">
                                                        <a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>">
                                                            <img  src="<?=$rowlq['UrlHinh'];?>" alt="<?=$rowlq['TieuDe'];?>" title="<?=$rowlq['TieuDe'];?>" class="jv-sectcont-thumb-left lazy">
                                                        </a>
                                                    </div>
                                                    <div class="right">
                                                        <h4><a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>"><?=$rowlq['TieuDe'];?></a></h4>
                                                        <p class="jv-sectcont-introtext"><?=$qly_tin->cutString(strip_tags($rowlq['TomTat']),80,' ...');?></p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <?php } }?>
                                            
                                        </li>
                                    </ul>
                                    <!--<p class="more_link"><php echo JTEXT::_('NEWS MORE LINK'); ?></p>-->
                                    <ul class="article-item clearfix">
                                        <?php 
                                            $tinlq_2 = $qly_tin->ListTin_Where(8,2, 1, 4, '', ' ORDER BY LuotXem Desc');
                                            if(mysql_num_rows($tinlq_2)>0) {
                                            ?>
                                            <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                                            
                                            <li>
                                                <a href="<?=$rowlq['TieuDeKD'];?>.html"><?=$rowlq['TieuDe'];?></a>
                                            </li>
                                        <?php } }?>
                                    </ul>
                                    <ul class="nav">
                                        <li class="nli active">
                                            <div class="readmore_content">
                                                <a href="/viem-tai">
                                                    <div class="btn_more_all"></div>
                                                </a>
                                            </div>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="gkTabsItem gk-opacity gk-hide">
                    <div class="jv_news_wrap">

                        <div class="jv-frame-cat">
                            <div class="jv-category">
                                <div class="jvpadding">
                                    <ul class="jv-title-category" style="display:none;">
                                        <li class="jv-firstitem"><a href="/viem-tai/"><span class="jv-title-category">Viêm họng</span></a></li>
                                    </ul>
                                    <div class="cls"></div>
                                    <ul class="lead">
                                        <li class="parent pli1 active">
                                            <?php 
                                            $tinlq_2 = $qly_tin->ListTin_Where(9,2, 0, 1, '', ' ORDER BY LuotXem Desc');
                                            if(mysql_num_rows($tinlq_2)>0) {
                                            ?>
                                            <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                                            <ul class="child">

                                                <li class="jv-article-title">
                                                    <div class="left">
                                                        <a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>">
                                                            <img  src="<?=$rowlq['UrlHinh'];?>" alt="<?=$rowlq['TieuDe'];?>" title="<?=$rowlq['TieuDe'];?>" class="jv-sectcont-thumb-left lazy">
                                                        </a>
                                                    </div>
                                                    <div class="right">
                                                        <h4><a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>"><?=$rowlq['TieuDe'];?></a></h4>
                                                        <p class="jv-sectcont-introtext"><?=$qly_tin->cutString(strip_tags($rowlq['TomTat']),80,' ...');?></p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <?php } }?>
                                            
                                        </li>
                                    </ul>
                                    <!--<p class="more_link"><php echo JTEXT::_('NEWS MORE LINK'); ?></p>-->
                                    <ul class="article-item clearfix">
                                        <?php 
                                            $tinlq_2 = $qly_tin->ListTin_Where(9,2, 1, 4, '', ' ORDER BY LuotXem Desc');
                                            if(mysql_num_rows($tinlq_2)>0) {
                                            ?>
                                            <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                                            
                                            <li>
                                                <a href="<?=$rowlq['TieuDeKD'];?>.html"><?=$rowlq['TieuDe'];?></a>
                                            </li>
                                        <?php } }?>
                                    </ul>
                                    <ul class="nav">
                                        <li class="nli active">
                                            <div class="readmore_content">
                                                <a href="/viem-xoang">
                                                    <div class="btn_more_all"></div>
                                                </a>
                                            </div>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- Tab Xương khớp -->
    <h6><span>Xương khớp</span></h6>
    <div id="gk-tabs-114" class="gkTabsGK5" data-config="{'activator':'click','animation':'0','animation_interval':'5000','animation_type':'opacity','active_tab':'1','cookie_save':'0','auto_height':'1','module_height':'200','rtl':'0'}" data-swipe="0">
        <div class="gkTabsWrap vertical">
            <ol class="gkTabsNav">

                <li class="gkTab gkTabs-1 active" data-animation="default">
                    Bệnh gút </li>
                <li class="gkTab gkTabs-2" data-animation="default">
                    Thần kinh tọa </li>
                <li class="gkTab gkTabs-3" data-animation="default">
                    Gai cột sống </li>
            </ol>

            <div class="gkTabsContainer" style="height: auto;">

                <div class="gkTabsItem gk-opacity gk-active">
                    <div class="jv_news_wrap">

                        <div class="jv-frame-cat">
                            <div class="jv-category">
                                <div class="jvpadding">
                                    <ul class="jv-title-category" style="display:none;">
                                        <li class="jv-firstitem"><a href="/benh-gut-gout"><span class="jv-title-category">Viêm họng</span></a></li>
                                    </ul>
                                    <div class="cls"></div>
                                    <ul class="lead">
                                        <li class="parent pli1 active">
                                            <?php 
                                            $tinlq_2 = $qly_tin->ListTin_Where(18,11, 0, 1, '', ' ORDER BY LuotXem Desc');
                                            if(mysql_num_rows($tinlq_2)>0) {
                                            ?>
                                            <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                                            <ul class="child">

                                                <li class="jv-article-title">
                                                    <div class="left">
                                                        <a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>">
                                                            <img  src="<?=$rowlq['UrlHinh'];?>" alt="<?=$rowlq['TieuDe'];?>" title="<?=$rowlq['TieuDe'];?>" class="jv-sectcont-thumb-left lazy">
                                                        </a>
                                                    </div>
                                                    <div class="right">
                                                        <h4><a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>"><?=$rowlq['TieuDe'];?></a></h4>
                                                        <p class="jv-sectcont-introtext"><?=$qly_tin->cutString(strip_tags($rowlq['TomTat']),80,' ...');?></p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <?php } }?>
                                            
                                        </li>
                                    </ul>
                                    <!--<p class="more_link"><php echo JTEXT::_('NEWS MORE LINK'); ?></p>-->
                                    <ul class="article-item clearfix">
                                        <?php 
                                            $tinlq_2 = $qly_tin->ListTin_Where(18,11, 1, 4, '', ' ORDER BY LuotXem Desc');
                                            if(mysql_num_rows($tinlq_2)>0) {
                                            ?>
                                            <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                                            
                                            <li>
                                                <a href="<?=$rowlq['TieuDeKD'];?>.html"><?=$rowlq['TieuDe'];?></a>
                                            </li>
                                        <?php } }?>
                                    </ul>
                                    <ul class="nav">
                                        <li class="nli active">
                                            <div class="readmore_content">
                                                <a href="/benh-gut-gout">
                                                    <div class="btn_more_all"></div>
                                                </a>
                                            </div>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="gkTabsItem gk-opacity gk-hide">
                    <div class="jv_news_wrap">

                        <div class="jv-frame-cat">
                            <div class="jv-category">
                                <div class="jvpadding">
                                    <ul class="jv-title-category" style="display:none;">
                                        <li class="jv-firstitem"><a href="/than-kinh-toa"><span class="jv-title-category">Viêm họng</span></a></li>
                                    </ul>
                                    <div class="cls"></div>
                                    <ul class="lead">
                                        <li class="parent pli1 active">
                                            <?php 
                                            $tinlq_2 = $qly_tin->ListTin_Where(17,11, 0, 1, '', ' ORDER BY LuotXem Desc');
                                            if(mysql_num_rows($tinlq_2)>0) {
                                            ?>
                                            <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                                            <ul class="child">

                                                <li class="jv-article-title">
                                                    <div class="left">
                                                        <a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>">
                                                            <img  src="<?=$rowlq['UrlHinh'];?>" alt="<?=$rowlq['TieuDe'];?>" title="<?=$rowlq['TieuDe'];?>" class="jv-sectcont-thumb-left lazy">
                                                        </a>
                                                    </div>
                                                    <div class="right">
                                                        <h4><a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>"><?=$rowlq['TieuDe'];?></a></h4>
                                                        <p class="jv-sectcont-introtext"><?=$qly_tin->cutString(strip_tags($rowlq['TomTat']),80,' ...');?></p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <?php } }?>
                                            
                                        </li>
                                    </ul>
                                    <!--<p class="more_link"><php echo JTEXT::_('NEWS MORE LINK'); ?></p>-->
                                    <ul class="article-item clearfix">
                                        <?php 
                                            $tinlq_2 = $qly_tin->ListTin_Where(17,11, 1, 4, '', ' ORDER BY LuotXem Desc');
                                            if(mysql_num_rows($tinlq_2)>0) {
                                            ?>
                                            <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                                            
                                            <li>
                                                <a href="<?=$rowlq['TieuDeKD'];?>.html"><?=$rowlq['TieuDe'];?></a>
                                            </li>
                                        <?php } }?>
                                    </ul>
                                    <ul class="nav">
                                        <li class="nli active">
                                            <div class="readmore_content">
                                                <a href="/than-kinh-toa">
                                                    <div class="btn_more_all"></div>
                                                </a>
                                            </div>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="gkTabsItem gk-opacity gk-hide">
                    <div class="jv_news_wrap">

                        <div class="jv-frame-cat">
                            <div class="jv-category">
                                <div class="jvpadding">
                                    <ul class="jv-title-category" style="display:none;">
                                        <li class="jv-firstitem"><a href="/gai-cot-song"><span class="jv-title-category">Viêm họng</span></a></li>
                                    </ul>
                                    <div class="cls"></div>
                                    <ul class="lead">
                                        <li class="parent pli1 active">
                                            <?php 
                                            $tinlq_2 = $qly_tin->ListTin_Where(20,11, 0, 1, '', ' ORDER BY LuotXem Desc');
                                            if(mysql_num_rows($tinlq_2)>0) {
                                            ?>
                                            <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                                            <ul class="child">

                                                <li class="jv-article-title">
                                                    <div class="left">
                                                        <a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>">
                                                            <img  src="<?=$rowlq['UrlHinh'];?>" alt="<?=$rowlq['TieuDe'];?>" title="<?=$rowlq['TieuDe'];?>" class="jv-sectcont-thumb-left lazy">
                                                        </a>
                                                    </div>
                                                    <div class="right">
                                                        <h4><a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>"><?=$rowlq['TieuDe'];?></a></h4>
                                                        <p class="jv-sectcont-introtext"><?=$qly_tin->cutString(strip_tags($rowlq['TomTat']),80,' ...');?></p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <?php } }?>
                                            
                                        </li>
                                    </ul>
                                    <!--<p class="more_link"><php echo JTEXT::_('NEWS MORE LINK'); ?></p>-->
                                    <ul class="article-item clearfix">
                                        <?php 
                                            $tinlq_2 = $qly_tin->ListTin_Where(20,11, 1, 4, '', ' ORDER BY LuotXem Desc');
                                            if(mysql_num_rows($tinlq_2)>0) {
                                            ?>
                                            <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                                            
                                            <li>
                                                <a href="<?=$rowlq['TieuDeKD'];?>.html"><?=$rowlq['TieuDe'];?></a>
                                            </li>
                                        <?php } }?>
                                    </ul>
                                    <ul class="nav">
                                        <li class="nli active">
                                            <div class="readmore_content">
                                                <a href="/gai-cot-song">
                                                    <div class="btn_more_all"></div>
                                                </a>
                                            </div>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- Đau nhức -->
    
    <h6><span>Đau Nhức</span></h6>
    <div id="gk-tabs-23" class="gkTabsGK5" data-config="{'activator':'click','animation':'0','animation_interval':'5000','animation_type':'opacity','active_tab':'1','cookie_save':'0','auto_height':'1','module_height':'200','rtl':'0'}" data-swipe="0">
        <div class="gkTabsWrap vertical">
            <ol class="gkTabsNav">

                <li class="gkTab gkTabs-1 active" data-animation="default">
                    Tê tay chân </li>
                <li class="gkTab gkTabs-2" data-animation="default">
                    Đau vai gáy </li>
                <li class="gkTab gkTabs-3" data-animation="default">
                    Đau lưng </li>
            </ol>

            <div class="gkTabsContainer" style="height: auto;">

                <div class="gkTabsItem gk-opacity gk-active">
                    <div class="jv_news_wrap">

                        <div class="jv-frame-cat">
                            <div class="jv-category">
                                <div class="jvpadding">
                                    <ul class="jv-title-category" style="display:none;">
                                        <li class="jv-firstitem"><a href="/te-tay-chan"><span class="jv-title-category">Viêm họng</span></a></li>
                                    </ul>
                                    <div class="cls"></div>
                                    <ul class="lead">
                                        <li class="parent pli1 active">
                                            <?php 
                                            $tinlq_2 = $qly_tin->ListTin_Where(25,23, 0, 1, '', ' ORDER BY LuotXem Desc');
                                            if(mysql_num_rows($tinlq_2)>0) {
                                            ?>
                                            <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                                            <ul class="child">

                                                <li class="jv-article-title">
                                                    <div class="left">
                                                        <a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>">
                                                            <img  src="<?=$rowlq['UrlHinh'];?>" alt="<?=$rowlq['TieuDe'];?>" title="<?=$rowlq['TieuDe'];?>" class="jv-sectcont-thumb-left lazy">
                                                        </a>
                                                    </div>
                                                    <div class="right">
                                                        <h4><a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>"><?=$rowlq['TieuDe'];?></a></h4>
                                                        <p class="jv-sectcont-introtext"><?=$qly_tin->cutString(strip_tags($rowlq['TomTat']),80,' ...');?></p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <?php } }?>
                                            
                                        </li>
                                    </ul>
                                    <!--<p class="more_link"><php echo JTEXT::_('NEWS MORE LINK'); ?></p>-->
                                    <ul class="article-item clearfix">
                                        <?php 
                                            $tinlq_2 = $qly_tin->ListTin_Where(25,23, 1, 4, '', ' ORDER BY LuotXem Desc');
                                            if(mysql_num_rows($tinlq_2)>0) {
                                            ?>
                                            <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                                            
                                            <li>
                                                <a href="<?=$rowlq['TieuDeKD'];?>.html"><?=$rowlq['TieuDe'];?></a>
                                            </li>
                                        <?php } }?>
                                    </ul>
                                    <ul class="nav">
                                        <li class="nli active">
                                            <div class="readmore_content">
                                                <a href="/te-tay-chan">
                                                    <div class="btn_more_all"></div>
                                                </a>
                                            </div>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="gkTabsItem gk-opacity gk-hide">
                    <div class="jv_news_wrap">

                        <div class="jv-frame-cat">
                            <div class="jv-category">
                                <div class="jvpadding">
                                    <ul class="jv-title-category" style="display:none;">
                                        <li class="jv-firstitem"><a href="/dau-vai-gay"><span class="jv-title-category">Viêm họng</span></a></li>
                                    </ul>
                                    <div class="cls"></div>
                                    <ul class="lead">
                                        <li class="parent pli1 active">
                                            <?php 
                                            $tinlq_2 = $qly_tin->ListTin_Where(28,23, 0, 1, '', ' ORDER BY LuotXem Desc');
                                            if(mysql_num_rows($tinlq_2)>0) {
                                            ?>
                                            <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                                            <ul class="child">

                                                <li class="jv-article-title">
                                                    <div class="left">
                                                        <a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>">
                                                            <img  src="<?=$rowlq['UrlHinh'];?>" alt="<?=$rowlq['TieuDe'];?>" title="<?=$rowlq['TieuDe'];?>" class="jv-sectcont-thumb-left lazy">
                                                        </a>
                                                    </div>
                                                    <div class="right">
                                                        <h4><a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>"><?=$rowlq['TieuDe'];?></a></h4>
                                                        <p class="jv-sectcont-introtext"><?=$qly_tin->cutString(strip_tags($rowlq['TomTat']),80,' ...');?></p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <?php } }?>
                                            
                                        </li>
                                    </ul>
                                    <!--<p class="more_link"><php echo JTEXT::_('NEWS MORE LINK'); ?></p>-->
                                    <ul class="article-item clearfix">
                                        <?php 
                                            $tinlq_2 = $qly_tin->ListTin_Where(28,23, 1, 4, '', ' ORDER BY LuotXem Desc');
                                            if(mysql_num_rows($tinlq_2)>0) {
                                            ?>
                                            <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                                            
                                            <li>
                                                <a href="<?=$rowlq['TieuDeKD'];?>.html"><?=$rowlq['TieuDe'];?></a>
                                            </li>
                                        <?php } }?>
                                    </ul>
                                    <ul class="nav">
                                        <li class="nli active">
                                            <div class="readmore_content">
                                                <a href="/dau-vai-gay">
                                                    <div class="btn_more_all"></div>
                                                </a>
                                            </div>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="gkTabsItem gk-opacity gk-hide">
                    <div class="jv_news_wrap">

                        <div class="jv-frame-cat">
                            <div class="jv-category">
                                <div class="jvpadding">
                                    <ul class="jv-title-category" style="display:none;">
                                        <li class="jv-firstitem"><a href="/dau-lung"><span class="jv-title-category">Viêm họng</span></a></li>
                                    </ul>
                                    <div class="cls"></div>
                                    <ul class="lead">
                                        <li class="parent pli1 active">
                                            <?php 
                                            $tinlq_2 = $qly_tin->ListTin_Where(30,23, 0, 1, '', ' ORDER BY LuotXem Desc');
                                            if(mysql_num_rows($tinlq_2)>0) {
                                            ?>
                                            <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                                            <ul class="child">

                                                <li class="jv-article-title">
                                                    <div class="left">
                                                        <a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>">
                                                            <img  src="<?=$rowlq['UrlHinh'];?>" alt="<?=$rowlq['TieuDe'];?>" title="<?=$rowlq['TieuDe'];?>" class="jv-sectcont-thumb-left lazy">
                                                        </a>
                                                    </div>
                                                    <div class="right">
                                                        <h4><a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>"><?=$rowlq['TieuDe'];?></a></h4>
                                                        <p class="jv-sectcont-introtext"><?=$qly_tin->cutString(strip_tags($rowlq['TomTat']),80,' ...');?></p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <?php } }?>
                                            
                                        </li>
                                    </ul>
                                    <!--<p class="more_link"><php echo JTEXT::_('NEWS MORE LINK'); ?></p>-->
                                    <ul class="article-item clearfix">
                                        <?php 
                                            $tinlq_2 = $qly_tin->ListTin_Where(30,23, 1, 4, '', ' ORDER BY LuotXem Desc');
                                            if(mysql_num_rows($tinlq_2)>0) {
                                            ?>
                                            <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                                            
                                            <li>
                                                <a href="<?=$rowlq['TieuDeKD'];?>.html"><?=$rowlq['TieuDe'];?></a>
                                            </li>
                                        <?php } }?>
                                    </ul>
                                    <ul class="nav">
                                        <li class="nli active">
                                            <div class="readmore_content">
                                                <a href="/dau-lung">
                                                    <div class="btn_more_all"></div>
                                                </a>
                                            </div>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- Da liễu -->
    <h6><span>Da liễu</span></h6>
    <div id="gk-tabs-23" class="gkTabsGK5" data-config="{'activator':'click','animation':'0','animation_interval':'5000','animation_type':'opacity','active_tab':'1','cookie_save':'0','auto_height':'1','module_height':'200','rtl':'0'}" data-swipe="0">
        <div class="gkTabsWrap vertical">
            <ol class="gkTabsNav">

                <li class="gkTab gkTabs-1 active" data-animation="default">
                    Dị Ứng da</li>
                <li class="gkTab gkTabs-2" data-animation="default">
                    Bệnh mề đay</li>
                <li class="gkTab gkTabs-3" data-animation="default">
                    Bệnh chàm</li>
            </ol>

            <div class="gkTabsContainer" style="height: auto;">

                <div class="gkTabsItem gk-opacity gk-active">
                    <div class="jv_news_wrap">

                        <div class="jv-frame-cat">
                            <div class="jv-category">
                                <div class="jvpadding">
                                    <ul class="jv-title-category" style="display:none;">
                                        <li class="jv-firstitem"><a href="/di-ung-da"><span class="jv-title-category">Viêm họng</span></a></li>
                                    </ul>
                                    <div class="cls"></div>
                                    <ul class="lead">
                                        <li class="parent pli1 active">
                                            <?php 
                                            $tinlq_2 = $qly_tin->ListTin_Where(35,34, 0, 1, '', ' ORDER BY LuotXem Desc');
                                            if(mysql_num_rows($tinlq_2)>0) {
                                            ?>
                                            <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                                            <ul class="child">

                                                <li class="jv-article-title">
                                                    <div class="left">
                                                        <a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>">
                                                            <img  src="<?=$rowlq['UrlHinh'];?>" alt="<?=$rowlq['TieuDe'];?>" title="<?=$rowlq['TieuDe'];?>" class="jv-sectcont-thumb-left lazy">
                                                        </a>
                                                    </div>
                                                    <div class="right">
                                                        <h4><a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>"><?=$rowlq['TieuDe'];?></a></h4>
                                                        <p class="jv-sectcont-introtext"><?=$qly_tin->cutString(strip_tags($rowlq['TomTat']),80,' ...');?></p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <?php } }?>
                                            
                                        </li>
                                    </ul>
                                    <!--<p class="more_link"><php echo JTEXT::_('NEWS MORE LINK'); ?></p>-->
                                    <ul class="article-item clearfix">
                                        <?php 
                                            $tinlq_2 = $qly_tin->ListTin_Where(35,34, 1, 4, '', ' ORDER BY LuotXem Desc');
                                            if(mysql_num_rows($tinlq_2)>0) {
                                            ?>
                                            <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                                            
                                            <li>
                                                <a href="<?=$rowlq['TieuDeKD'];?>.html"><?=$rowlq['TieuDe'];?></a>
                                            </li>
                                        <?php } }?>
                                    </ul>
                                    <ul class="nav">
                                        <li class="nli active">
                                            <div class="readmore_content">
                                                <a href="/di-ung-da">
                                                    <div class="btn_more_all"></div>
                                                </a>
                                            </div>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="gkTabsItem gk-opacity gk-hide">
                    <div class="jv_news_wrap">

                        <div class="jv-frame-cat">
                            <div class="jv-category">
                                <div class="jvpadding">
                                    <ul class="jv-title-category" style="display:none;">
                                        <li class="jv-firstitem"><a href="/benh-me-day"><span class="jv-title-category">Viêm họng</span></a></li>
                                    </ul>
                                    <div class="cls"></div>
                                    <ul class="lead">
                                        <li class="parent pli1 active">
                                            <?php 
                                            $tinlq_2 = $qly_tin->ListTin_Where(36,34, 0, 1, '', ' ORDER BY LuotXem Desc');
                                            if(mysql_num_rows($tinlq_2)>0) {
                                            ?>
                                            <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                                            <ul class="child">

                                                <li class="jv-article-title">
                                                    <div class="left">
                                                        <a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>">
                                                            <img  src="<?=$rowlq['UrlHinh'];?>" alt="<?=$rowlq['TieuDe'];?>" title="<?=$rowlq['TieuDe'];?>" class="jv-sectcont-thumb-left lazy">
                                                        </a>
                                                    </div>
                                                    <div class="right">
                                                        <h4><a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>"><?=$rowlq['TieuDe'];?></a></h4>
                                                        <p class="jv-sectcont-introtext"><?=$qly_tin->cutString(strip_tags($rowlq['TomTat']),80,' ...');?></p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <?php } }?>
                                            
                                        </li>
                                    </ul>
                                    <!--<p class="more_link"><php echo JTEXT::_('NEWS MORE LINK'); ?></p>-->
                                    <ul class="article-item clearfix">
                                        <?php 
                                            $tinlq_2 = $qly_tin->ListTin_Where(36,34, 1, 4, '', ' ORDER BY LuotXem Desc');
                                            if(mysql_num_rows($tinlq_2)>0) {
                                            ?>
                                            <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                                            
                                            <li>
                                                <a href="<?=$rowlq['TieuDeKD'];?>.html"><?=$rowlq['TieuDe'];?></a>
                                            </li>
                                        <?php } }?>
                                    </ul>
                                    <ul class="nav">
                                        <li class="nli active">
                                            <div class="readmore_content">
                                                <a href="/benh-me-day">
                                                    <div class="btn_more_all"></div>
                                                </a>
                                            </div>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="gkTabsItem gk-opacity gk-hide">
                    <div class="jv_news_wrap">

                        <div class="jv-frame-cat">
                            <div class="jv-category">
                                <div class="jvpadding">
                                    <ul class="jv-title-category" style="display:none;">
                                        <li class="jv-firstitem"><a href="/benh-cham"><span class="jv-title-category">Viêm họng</span></a></li>
                                    </ul>
                                    <div class="cls"></div>
                                    <ul class="lead">
                                        <li class="parent pli1 active">
                                            <?php 
                                            $tinlq_2 = $qly_tin->ListTin_Where(38,34, 0, 1, '', ' ORDER BY LuotXem Desc');
                                            if(mysql_num_rows($tinlq_2)>0) {
                                            ?>
                                            <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                                            <ul class="child">

                                                <li class="jv-article-title">
                                                    <div class="left">
                                                        <a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>">
                                                            <img  src="<?=$rowlq['UrlHinh'];?>" alt="<?=$rowlq['TieuDe'];?>" title="<?=$rowlq['TieuDe'];?>" class="jv-sectcont-thumb-left lazy">
                                                        </a>
                                                    </div>
                                                    <div class="right">
                                                        <h4><a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>"><?=$rowlq['TieuDe'];?></a></h4>
                                                        <p class="jv-sectcont-introtext"><?=$qly_tin->cutString(strip_tags($rowlq['TomTat']),80,' ...');?></p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <?php } }?>
                                            
                                        </li>
                                    </ul>
                                    <!--<p class="more_link"><php echo JTEXT::_('NEWS MORE LINK'); ?></p>-->
                                    <ul class="article-item clearfix">
                                        <?php 
                                            $tinlq_2 = $qly_tin->ListTin_Where(38,34, 1, 4, '', ' ORDER BY LuotXem Desc');
                                            if(mysql_num_rows($tinlq_2)>0) {
                                            ?>
                                            <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                                            
                                            <li>
                                                <a href="<?=$rowlq['TieuDeKD'];?>.html"><?=$rowlq['TieuDe'];?></a>
                                            </li>
                                        <?php } }?>
                                    </ul>
                                    <ul class="nav">
                                        <li class="nli active">
                                            <div class="readmore_content">
                                                <a href="/benh-cham">
                                                    <div class="btn_more_all"></div>
                                                </a>
                                            </div>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    
    
    <!-- Yếu sinh lý -->
    <h6><span>Yếu sinh lý</span></h6>
    <div id="gk-tabs-45" class="gkTabsGK5" data-config="{'activator':'click','animation':'0','animation_interval':'5000','animation_type':'opacity','active_tab':'1','cookie_save':'0','auto_height':'1','module_height':'200','rtl':'0'}" data-swipe="0">
        <div class="gkTabsWrap vertical">
            <ol class="gkTabsNav">

                <li class="gkTab gkTabs-1 active" data-animation="default">
                    Xuất tinh sớm</li>
                <li class="gkTab gkTabs-2" data-animation="default">
                    Liệt dương</li>
                <li class="gkTab gkTabs-3" data-animation="default">
                    Vô sinh</li>
            </ol>

            <div class="gkTabsContainer" style="height: auto;">

                <div class="gkTabsItem gk-opacity gk-hide">
                    <div class="jv_news_wrap">

                        <div class="jv-frame-cat">
                            <div class="jv-category">
                                <div class="jvpadding">
                                    <ul class="jv-title-category" style="display:none;">
                                        <li class="jv-firstitem"><a href="/vo-sinh"><span class="jv-title-category">Viêm họng</span></a></li>
                                    </ul>
                                    <div class="cls"></div>
                                    <ul class="lead">
                                        <li class="parent pli1 active">
                                            <?php 
                                            $tinlq_2 = $qly_tin->ListTin_Where(46,45, 0, 1, '', ' ORDER BY LuotXem Desc');
                                            if(mysql_num_rows($tinlq_2)>0) {
                                            ?>
                                            <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                                            <ul class="child">

                                                <li class="jv-article-title">
                                                    <div class="left">
                                                        <a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>">
                                                            <img  src="<?=$rowlq['UrlHinh'];?>" alt="<?=$rowlq['TieuDe'];?>" title="<?=$rowlq['TieuDe'];?>" class="jv-sectcont-thumb-left lazy">
                                                        </a>
                                                    </div>
                                                    <div class="right">
                                                        <h4><a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>"><?=$rowlq['TieuDe'];?></a></h4>
                                                        <p class="jv-sectcont-introtext"><?=$qly_tin->cutString(strip_tags($rowlq['TomTat']),80,' ...');?></p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <?php } }?>
                                            
                                        </li>
                                    </ul>
                                    <!--<p class="more_link"><php echo JTEXT::_('NEWS MORE LINK'); ?></p>-->
                                    <ul class="article-item clearfix">
                                        <?php 
                                            $tinlq_2 = $qly_tin->ListTin_Where(46,45, 1, 4, '', ' ORDER BY LuotXem Desc');
                                            if(mysql_num_rows($tinlq_2)>0) {
                                            ?>
                                            <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                                            
                                            <li>
                                                <a href="<?=$rowlq['TieuDeKD'];?>.html"><?=$rowlq['TieuDe'];?></a>
                                            </li>
                                        <?php } }?>
                                    </ul>
                                    <ul class="nav">
                                        <li class="nli active">
                                            <div class="readmore_content">
                                                <a href="/vo-sinh">
                                                    <div class="btn_more_all"></div>
                                                </a>
                                            </div>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="gkTabsItem gk-opacity gk-hide">
                    <div class="jv_news_wrap">

                        <div class="jv-frame-cat">
                            <div class="jv-category">
                                <div class="jvpadding">
                                    <ul class="jv-title-category" style="display:none;">
                                        <li class="jv-firstitem"><a href="/liet-duong"><span class="jv-title-category">Viêm họng</span></a></li>
                                    </ul>
                                    <div class="cls"></div>
                                    <ul class="lead">
                                        <li class="parent pli1 active">
                                            <?php 
                                            $tinlq_2 = $qly_tin->ListTin_Where(48,45, 0, 1, '', ' ORDER BY LuotXem Desc');
                                            if(mysql_num_rows($tinlq_2)>0) {
                                            ?>
                                            <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                                            <ul class="child">

                                                <li class="jv-article-title">
                                                    <div class="left">
                                                        <a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>">
                                                            <img  src="<?=$rowlq['UrlHinh'];?>" alt="<?=$rowlq['TieuDe'];?>" title="<?=$rowlq['TieuDe'];?>" class="jv-sectcont-thumb-left lazy">
                                                        </a>
                                                    </div>
                                                    <div class="right">
                                                        <h4><a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>"><?=$rowlq['TieuDe'];?></a></h4>
                                                        <p class="jv-sectcont-introtext"><?=$qly_tin->cutString(strip_tags($rowlq['TomTat']),80,' ...');?></p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <?php } }?>
                                            
                                        </li>
                                    </ul>
                                    <!--<p class="more_link"><php echo JTEXT::_('NEWS MORE LINK'); ?></p>-->
                                    <ul class="article-item clearfix">
                                        <?php 
                                            $tinlq_2 = $qly_tin->ListTin_Where(48,45, 1, 4, '', ' ORDER BY LuotXem Desc');
                                            if(mysql_num_rows($tinlq_2)>0) {
                                            ?>
                                            <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                                            
                                            <li>
                                                <a href="<?=$rowlq['TieuDeKD'];?>.html"><?=$rowlq['TieuDe'];?></a>
                                            </li>
                                        <?php } }?>
                                    </ul>
                                    <ul class="nav">
                                        <li class="nli active">
                                            <div class="readmore_content">
                                                <a href="/liet-duong">
                                                    <div class="btn_more_all"></div>
                                                </a>
                                            </div>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="gkTabsItem gk-opacity gk-active">
                    <div class="jv_news_wrap">

                        <div class="jv-frame-cat">
                            <div class="jv-category">
                                <div class="jvpadding">
                                    <ul class="jv-title-category" style="display:none;">
                                        <li class="jv-firstitem"><a href="/ro-hau-mon"><span class="jv-title-category">Viêm họng</span></a></li>
                                    </ul>
                                    <div class="cls"></div>
                                    <ul class="lead">
                                        <li class="parent pli1 active">
                                            <?php 
                                            $tinlq_2 = $qly_tin->ListTin_Where(49,45, 0, 1, '', ' ORDER BY LuotXem Desc');
                                            if(mysql_num_rows($tinlq_2)>0) {
                                            ?>
                                            <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                                            <ul class="child">

                                                <li class="jv-article-title">
                                                    <div class="left">
                                                        <a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>">
                                                            <img  src="<?=$rowlq['UrlHinh'];?>" alt="<?=$rowlq['TieuDe'];?>" title="<?=$rowlq['TieuDe'];?>" class="jv-sectcont-thumb-left lazy">
                                                        </a>
                                                    </div>
                                                    <div class="right">
                                                        <h4><a href="<?=$rowlq['TieuDeKD'];?>.html" title="<?=$rowlq['TieuDe'];?>"><?=$rowlq['TieuDe'];?></a></h4>
                                                        <p class="jv-sectcont-introtext"><?=$qly_tin->cutString(strip_tags($rowlq['TomTat']),80,' ...');?></p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <?php } }?>
                                            
                                        </li>
                                    </ul>
                                    <!--<p class="more_link"><php echo JTEXT::_('NEWS MORE LINK'); ?></p>-->
                                    <ul class="article-item clearfix">
                                        <?php 
                                            $tinlq_2 = $qly_tin->ListTin_Where(49,45, 1, 4, '', ' ORDER BY LuotXem Desc');
                                            if(mysql_num_rows($tinlq_2)>0) {
                                            ?>
                                            <?php  while($rowlq = mysql_fetch_assoc($tinlq_2)){ ?>
                                            
                                            <li>
                                                <a href="<?=$rowlq['TieuDeKD'];?>.html"><?=$rowlq['TieuDe'];?></a>
                                            </li>
                                        <?php } }?>
                                    </ul>
                                    <ul class="nav">
                                        <li class="nli active">
                                            <div class="readmore_content">
                                                <a href="/xuat-tinh-som">
                                                    <div class="btn_more_all"></div>
                                                </a>
                                            </div>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>