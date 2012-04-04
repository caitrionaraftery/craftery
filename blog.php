<?php  include "header.php" ?>


	<div align="center">
<h1>Craftery Blog <a href="http://craftery-ie.tumblr.com/rss"><img src="images/icons/default/16/rss.png"></a></h1>



</div>

<?php
$request_url = 'http://craftery-ie.tumblr.com/api/read?type=post&start=0&num=20';
$xml = simplexml_load_file($request_url);
$count = count($xml);
echo $count;
echo '<br>';
for ($i = 0; $i < $count; $i++) {
?>
<div class="well">
<?php
	$title = $xml->posts->post[$i]->{'regular-title'};
	$date =  $xml->posts->post[$i]->attributes()->date;
	echo '<h2>'.$title.'</h2>';
	echo '<h4>'.$date.'</h4>';
?>
</div>
<?php
}


?>

<?php  include "footer.php" ?>