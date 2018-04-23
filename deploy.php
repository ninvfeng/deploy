<?php
//php 部署脚本
if($_GET['token']=='ninvfeng'){
	$dir=$_GET['path'];
	if(is_dir($dir)){
		$cmd="cd ".$dir." && git checkout . && git pull --force";
		print_r($res);
	}else{
		echo "dir not exist";
	}
}else{
	echo "token error";
}