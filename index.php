<?php 
	include "include/init.php";
	//轮播
	$sql = "SELECT * FROM 3yy_banner";
	$banner = sql_fn($sql);
	//游戏
	$sql = "SELECT 3yy_app.*,3yy_category.* FROM 3yy_app left join 3yy_category on 3yy_category.category_id=3yy_app.app_category_id WHERE 3yy_category.parent_id=1";
	$game = sql_fn($sql);
	//软件
	$sql = "SELECT 3yy_app.*,3yy_category.* FROM 3yy_app left join 3yy_category on 3yy_category.category_id=3yy_app.app_category_id WHERE 3yy_category.parent_id=2";
	$soft = sql_fn($sql);
	//棋牌
	$sql = "SELECT 3yy_app.*,3yy_category.* FROM 3yy_app left join 3yy_category on 3yy_category.category_id=3yy_app.app_category_id WHERE 3yy_category.parent_id=3";
	$face = sql_fn($sql);
	//详情
	$pid = isset($_GET['id'])?$_GET['id']:1;
	$sql = "SELECT 3yy_app.*,3yy_category.* FROM 3yy_app left join 3yy_category on 3yy_category.category_id=3yy_app.app_category_id WHERE 3yy_app.app_id = $pid";
	$detail = sql_fn($sql);
	
	//应用分类
	$sid = isset($_GET['sid'])?$_GET['sid']:1;
	$sql = "SELECT 3yy_app.*,3yy_category.* FROM 3yy_app left join 3yy_category on 3yy_category.category_id=3yy_app.app_category_id WHERE 3yy_category.category_id = $sid";
	$app_class = sql_fn($sql);

	//游戏分类
	$sql = "SELECT 3yy_class.*,3yy_app.* FROM 3yy_class left join 3yy_app on 3yy_class.class_id=3yy_app.app_class_id WHERE 3yy_class.class_id LIMIT 0,8";
	$game_classfiy = sql_fn($sql);
	//软件分类
	$sql = "SELECT 3yy_class.*,3yy_app.* FROM 3yy_class left join 3yy_app on 3yy_class.class_id=3yy_app.app_class_id WHERE 3yy_class.class_id LIMIT 8,6";
	$soft_classfiy = sql_fn($sql);
	//棋牌分类
	$sql = "SELECT 3yy_class.*,3yy_app.* FROM 3yy_class left join 3yy_app on 3yy_class.class_id=3yy_app.app_class_id WHERE 3yy_class.class_id LIMIT 14,4";
	$face_classfiy = sql_fn($sql);

	//随机游戏
	$sql = "SELECT 3yy_app.*,3yy_category.* FROM 3yy_app left join 3yy_category on 3yy_category.category_id=3yy_app.app_category_id WHERE 3yy_app.app_id ORDER BY RAND() LIMIT 4";
	$rand_detail = sql_fn($sql);

	//用户留言
	$sql = "SELECT * FROM 3yy_message";
	$message = sql_fn($sql);

	//用户社区
	$sql = "SELECT 3yy_commuity.*,3yy_app.* FROM 3yy_commuity left join 3yy_app on 3yy_commuity.id=3yy_app.app_id";
	$community = sql_fn($sql);
	
	$data = array(
		'banner'=>$banner,
		'game'=>$game,
		'soft'=>$soft,
		'face'=>$face,
		'detail'=>$detail,
		'app_class'=>$app_class,
		'game_classfiy'=>$game_classfiy,
		'soft_classfiy'=>$soft_classfiy,
		'face_classfiy'=>$face_classfiy,
		'rand_detail'=>$rand_detail,
		'message'=>$message,
		'community'=>$community
	);
	print_r(json_encode($data));
	exit;
 ?>