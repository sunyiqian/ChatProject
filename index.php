<?php
define('APPID','wxcc6bb2a0b743bf5d');
define('APPSECRET','5baa74f3fa748db70b8fd47ba7f5fd6b');
define('TOKEN','weixinopen');

require './wechat.class.php';
$wechat = new WeChat(APPID, APPSECRET, TOKEN);
$wechat->valid();//处理从微信平台发送的信息
?>
