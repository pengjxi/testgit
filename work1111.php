<?php
 echo 'hello! nice to meet you!';
 //����������ǰ�php����ȫ��ѧ��
 //��ϰʱ�亯�����ַ������������麯��
 //��ȫ�ֱ��������ã���ʹ��
 //���env��������η��ʻ�����Ϣ
 //��ȡ��վ�������Լ���ǰ���ʵĽű�,�ͻ�IP
 
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