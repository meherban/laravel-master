<?php
include('db.php'); 
	if ($_POST['url']) {
	//get random string for URL and add http:// if not already there
	$short = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 5);

	mysql_query("INSERT INTO urls (url_link, url_short, url_ip, url_date) VALUES

		(
		'".addslashes($_POST['url'])."',
		'".$short."',
		'".$_SERVER['REMOTE_ADDR']."',
		'".time()."'
		)

	");
	
	echo $short;
	}
?>