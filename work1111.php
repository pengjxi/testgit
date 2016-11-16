<?php
 echo 'hello! nice to meet you!';
 //今天的任务是把php基础全部学完
 //练习时间函数和字符串函数和数组函数
 //超全局变量的设置，和使用
 //如果env禁用了如何访问环境信息
 //获取网站的域名以及当前访问的脚本,客户IP
 
var_dump($_POST);
var_dump($_GET);
var_dump($_REQUEST);
var_dump($_SERVER);
var_dump($_ENV);
var_dump($_COOKIE);
var_dump($_FILES);
// $vvv = $_SERVER['REMOTE_ADDR'];
print_r ($_SERVER['REMOTE_ADDR']);

$v = 34;
$nu = 555;
echo $GLOBALS['v'];


echo "<br />";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];