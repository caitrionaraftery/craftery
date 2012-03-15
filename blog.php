<?php  include "header.php" ?>

<div class="hero-unit">
	<div align="center">
<h1>Craftery Blog</h1>
<p><a href="http://craftery-ie.tumblr.com/rss">RSS Feed</a></p>
<hr/>
http://api.tumblr.com/v2/blog/craftery-ie.tumblr.com/info?api_key=YCREdxJBoOW0IUVMVqGvz2oTVQR1pVhwrEcdrFyr2cylp7BMIp

</div>
 <!--<script type="text/javascript" src="http://craftery-ie.tumblr.com/js"></script> 


-->
<?php
$request_url = 'http://craftery-ie.tumblr.com/api/read?type=post&start=0&num=20';
$xml = simplexml_load_file($request_url);
$title = $xml->posts->post->{'regular-title'};
$post = $xml->posts->post->{'regular-body'};
$link = $xml->posts->post['url'];
$small_post = substr($post,0,320);
echo '<h1>'.$title.'</h1>';
echo '<p>'.$post.'</p>';
echo '…'; 
?>
</div>
<?php  include "footer.php" ?>