<?php 
	// header("Content-Type:text/html;charset=utf-8");
	header("Access-Control-Allow-Origin:*");
	$conn = @mysql_connect("localhost","sz1700018","pass123456");
	if(!$conn){
		echo "链接失败";
	}
	

	mysql_select_db("sz1700018");
	mysql_set_charset("utf8");

	$web = 'http://localhost/szwengdo/';
	define('IMGPATH',$web.'upload/');
	include "function.php";
 ?>