<?php
    echo "���ʮһ�¾źţ�"."<br />";
    echo "�������Ҫ�������Ǹ�ϰPHP��������"."<br />";
    
//  ð������
//  ѡ������
    
//  �Ƚϼ���ѭ���ı߽�ֵ
//��ȫ�ֱ�����ʹ�� ��ӡ$_GET  $_POST��ֵ����ȡip
//���һ�������Ƿ񱻶���

//һ��������
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

//����ʱ�亯��

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
    echo '�����Զ��庯��';
}
echo function_exists(testfunc());
echo function_exists("testfunc");

echo "<br />";
var_dump($_SERVER);
var_dump($_ENV);
var_dump;
var_dump($_GET);