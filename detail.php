<?php 
	include "include/init.php";

	$pid = isset($_GET['id'])?$_GET['id']:1;
	$sql = "SELECT * FROM 3yy_app WHERE app_id = $pid";
	$list = getArr($sql);
	echo json_encode($list);
	exit;
 ?>