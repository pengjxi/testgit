<?php
    echo "你好十一月九号！"."<br />";
    echo "今天的主要工作还是复习PHP基础部分"."<br />";
    
//  冒泡排序
//  选择排序
    
//  比较几种循环的边界值
//超全局变量的使用 打印$_GET  $_POST的值，并取ip
//检测一个函数是否被定义

//一道面试题
$GLOBALS['var1'] = 5;
$var2 = 1;

function get_value(){
    global $var2;
    $var1 = 0;
    return $var2++;
 
}
get_value();
echo $var1."\n";
echo $var2;
echo "<br />";

//日期时间函数

//
echo time();
echo "<br />";
echo microtime();
echo "<br />";

echo strtotime("now");
echo "<br />";
echo $va = sin(60);
echo "<br />";
echo date(time());

echo <<<EOD
Example of string
spanning multiple lines
using heredoc syntax$var2
EOD;

echo <<<"str"
 dfsafsafsfsfsafasf
 sfdafa$var2
 sfaf. 
str;
$line = <<<strr
dsfsafsfs
    sffs
    sfsf
strr;
echo $line;

function testfunc(){
    echo '我是自定义函数';
}
echo function_exists(testfunc());
echo function_exists("testfunc");

echo "<br />";
var_dump($_SERVER);
var_dump($_ENV);
var_dump;
var_dump($_GET);