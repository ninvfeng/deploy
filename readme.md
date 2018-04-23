# PHP部署脚本
1. 查看执行php脚本的用户 exec('whoami',$res) 如:apache
2. 在服务器使用脚本执行用户拉取代码 sudo -Hu apache git pull
如果提示.git 没有权限则,修改项目根目录下.git文件夹权限为777 chmod -R 777 .git