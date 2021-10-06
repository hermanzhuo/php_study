<?php

    //逻辑运算 if判断放的逻辑运算值
    //等于号 ==
    //不等于 !=
//>,<,>=,<=
// ===

//为真的情况： 不为0的数字，不空的字符串是真，true，不空的数组，对象也是真
//变量为0，空为假
//    if([]){
//        echo '这是真';
//    }else{
//        echo '这是假';
//    }

    //php中的运算符

    //+ - * /
 /*$direction='';
 if($direction == '东'){
    echo '东';
 }else if($direction == '南'){
     echo '南';
 }else if($direction == '西'){
     echo  '西';
 }else if($direction == '北'){
     echo  '北';
 }else {
     echo '方向错误！';
 }*/

//var_dump(0 == null);

//+,-,*,/

/*$a=2;
$b=4;


$he = $a+$b;
echo $he,"\r\n";

$cha = $b-$a;
echo $cha,"\r\n";

$ji = $a*$b;
echo $ji,"\r\n";

$shang = $b/$a;
echo $shang,"\r\n";*/

/*
 * $a 第一个参数
 * $b 第二个参数
 * $op 运算符
 * */
function jisuanqi($a,$b,$op){
    if($op=='*'){
        echo $a*$b ;
    }
    elseif ($op=='/'){
        echo $a/$b ;
    }
    elseif ($op=='+'){
        echo $a+$b;
    }
    elseif ($op=='-'){
        echo $a-$b;
    }


}

jisuanqi(1234,56,'/');






