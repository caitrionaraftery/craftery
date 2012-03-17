<?php  include "header.php" ?>

<div class="hero-unit">
	<div align="center">
<h1>Craftery Blog</h1>
<p><a href="http://craftery-ie.tumblr.com/rss">RSS Feed</a></p>
<hr/>

</div>
<?php
$request_url = 'http://craftery-ie.tumblr.com/api/read?type=post&start=0&num=20';
$xml = simplexml_load_file($request_url);
$blog_array = array();
$blog_array = $xml->posts->post->{'regular-title'};
$post_arry = array();
$post_array = $xml->posts->post->{'regular-body'};
$count = count($blog_array);
$index = 1;
print_r($blog_array);
print_r($post_array);
for ($i = $index; $i < $count; $i++) {
	$j = $blog_array[$i];
}
$title = $xml->posts->post->{'regular-title'};
$post = $xml->posts->post->{'regular-body'};
$link = $xml->posts->post['url'];
$small_post = substr($post,0,320);
?>
<!-- echo '<h1>'.$title.'</h1>';
echo '<p>'.$post.'</p>'; -->
</div>
<?php  include "footer.php" ?>