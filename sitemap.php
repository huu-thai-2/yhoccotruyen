<?php

  header('Content-type: application/xml');
  require_once "lib/class_tintuc.php";
  if(isset($qly_tin) == false) $qly_tin = new qly_tin;
  $output = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
  $output .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
  echo $output;
  $posts = $qly_tin->ListTinMoi(-1,216,0,500);
  $len = count($posts);
  $url_main = 'http://phongkhamdakhoahongphong.vn/benh-gan/';
?>
<url>
  <loc><?php echo $url_main; ?></loc>
  <lastmod>2017-01-12 17:28:39</lastmod>
  <changefreq>daily</changefreq>
</url>
<?php while($row_tt = mysql_fetch_assoc($posts)){ ?>
<url>
  <loc><?php echo $url_main.$row_tt['TieuDeKD'].'.html'; ?></loc>
  <lastmod><?php echo $row_tt['NgayDang']; ?></lastmod>
  <changefreq>daily</changefreq>
  <priority>0.7</priority>
</url>
<?php } ?>
</urlset>