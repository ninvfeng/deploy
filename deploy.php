<?php
//php 部署脚本
if($_GET['token']=='ninvfeng'){
	exec("cd /data/jiyu && git checkout . && git pull --force");
}else{
	echo "Token Error";
}