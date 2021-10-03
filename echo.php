<?php

    $x=5; //全局变量
    $y=6;
    $z=$x+$y;
    myTest($x);
//    echo $x;

function myTest(&$x)
{
    $y=10; // 局部变量
//    echo $y,"\r\n" ;

    $x= 9;
}

//$接_,[0-9],[a-z],[A-Z]
// iLoveYou 匈牙利命名法 用来命名函数

//下划线命名法
//i_see_you 下划线命名法

//iMissYou
//static 作用域
function myStatic()
{
    static $x = 1;
    $x++;
    $y = 1;
    $y++;
//    echo $x,'---',$y,"\r\n";
}

myStatic();//php把普通变量回收掉，释放内存，$y;
myStatic();
myStatic();
myStatic();



function myFunc($x){
    echo $x,"\r\n";
}

myFunc(1);
myFunc(2);
myFunc(3);