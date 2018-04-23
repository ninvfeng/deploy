# PHP部署脚本
1. 查看执行php脚本的用户 exec('whoami',$res) 如:apache
2. 在服务器使用脚本执行用户拉取代码 sudo -Hu apache git pull
 a.需要给项目777权限