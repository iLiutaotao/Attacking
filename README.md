Attacking-Server
==
An attack software for Android 

Features
==
---
Cilent
===
+ 可在后台自动接收服务端指令进行攻击
+ 可劫持QQ/WeChat/...各种各样的需要输入密码APP
+ 后台自动发送广播不会被管理软件block
+ 传输过程采用加密算法/服务端可验证token保证不会被他人恶意利用
+ 权限简单,不会引起手机杀软的检测

Server
===
+ 管理员可在后台查看到客户端回传的data
+ 管理员可在数据库中添加attack信息进行定点打击
+ 本身提供多个外传接口方便进行管理软件的开发

Dowload
==
+ Android:
+ PHP:

Usage
==
+ Android APP请在源码中修改您的服务端地址
+ 服务端请修改```/common/conn.php```的数据库信息并将sql.sql导入到数据库中

Thanks
==
+ Android程序由:死焦炭<su@geekzh.com>开发完成
+ 服务端由[涛涛](https://www.liujiantao.me)开发完成

Warning
==
此软件仅供学习交流为目的，切勿用于非法用途以及商业目的，请在下载后24小时之内删除！