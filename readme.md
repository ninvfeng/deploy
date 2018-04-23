# PHP部署脚本
1. 查看执行php脚本的用户 exec('whoami',$res) 如:apache
2. 在服务器使用脚本执行用户拉取代码 sudo -Hu apache git pull
 a.需要给项目777权限 chmod -R 777 deploy 其中(deploy为项目目录)
 b.为apache用户生成密钥对 sudo -Hu apache ssh-keygen
 c.如果提示目录不存在则需要先创建目录 mkdir -p /usr/share/httpd/.ssh 并修改所属用户 chown apache:apache /usr/share/httpd/.ssh 然后执行b
 d.查看刚生成的公钥 cat /usr/share/httpd/.ssh/id_rsa.pub 并粘贴到github->项目->Settings->Deploy keys里
 e.检测第二步看是否可以正常更新代码
3. 部署deploy.php使外网可直接访问
4. 在github->项目->Settings->Webhooks填写部署url
5. 测试提交代码看是否会自动部署