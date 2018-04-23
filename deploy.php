<?php
//github webhook php部署脚本

// //判断签名是否存在
// if(!$_SERVER['HTTP_X_HUB_SIGNATURE']){
// 	echo "签名不存在";
// 	exit();
// }

// //验证签名
// $token=include "token.php";
// $data=file_get_contents('php://input');
// list($algo, $hash) = explode('=', $_SERVER['HTTP_X_HUB_SIGNATURE'], 2) + array('', '');
// if($hash!==hash_hmac($algo, $data, $token)){
// 	echo "签名错误";
// 	exit();
// }

//验证部署目录
if(!is_dir($_GET['path'])){
	echo "部署目录不存在";
	exit();
}

//执行更新命令
$cmd="cd ".$_GET['path']." && git checkout . && git pull --force";
exec($cmd,$res);
print_r($res);