<?php
//php 部署脚本

if(!$_SERVER['HTTP_X_HUB_SIGNATURE']){
	echo "签名不存在";
	exit();
}

$token="756605bc1c0a3b29391c3a4e93c7e147";
$data=file_get_contents('php://input');
list($algo, $hash) = explode('=', $_SERVER['HTTP_X_HUB_SIGNATURE'], 2) + array('', '');
if($hash!==hash_hmac($algo, $data, $token)){
	echo "签名错误";
	exit();
}

if(!is_dir($_GET['dir'])){
	echo "部署目录不存在";
	exit();
}

$cmd="cd ".$_GET['dir']." && git checkout . && git pull --force";
exec($cmd,$res);
print_r($res);