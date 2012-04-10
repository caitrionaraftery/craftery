<?php  include "header.php" ?>


	<div align="center">
<h1>Craftery Blog <a href="http://craftery-ie.tumblr.com/rss"><img src="images/icons/default/16/rss.png"></a></h1>



</div>
<div class="container">
<?php
$request_url = 'http://craftery-ie.tumblr.com/api/read?start=0&num=20';
$xml = simplexml_load_file($request_url);

$count = count($xml->posts->post);	


for ($i = 0; $i < $count; $i++) {
?>

<div class="well">
<?php
	$title = $xml->posts->post[$i]->{'regular-title'};
	$date =  $xml->posts->post[$i]->attributes()->date;
	$content = $xml->posts->post[$i]->{'regular-body'};
	echo '<h2>'.$title.'<small><span class="pull-right">'.$date.'</span></small></h2>';
	echo '<br>';
	echo '<p>'.$content.'</p>';
?>

</div>
<?php
}


?>


</div>
