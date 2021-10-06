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
//    echo $x,"\r\n";
}

myFunc(1);
myFunc(2);
myFunc(3);


$x =100;
//echo "$x",'---','$x',"abcd",'---',1234;


$arr = [1,2,3,4];
////下标取值
//echo $arr[3];

//键值对取值
$baoZi = [
    'title' => '灌汤包',
    'price' => 2.5,
    'num' => 30,
    'resource' => '鱼翅鲍鱼'
];

//echo $baoZi['title'];
//echo $baoZi['resource'];

//如何打印数组
//print_r($baoZi);

//如何打印数组元素类型和值
//var_dump($baoZi);


//对象是类的实例,包子类
class BaoZi{
    //定义公有属性public，私有private
    public $title;
    public $price;
    public $num;
    public $resource;

    function  sell(){
        echo '卖你一个'.$this->title;
    }
}

//实例化对象
$baoZi =  new BaoZi();
$baoZi->title='灌汤包';
$baoZi->price='2.5';
$baoZi->num=35;
$baoZi->resource='奶黄';

print_r($baoZi);

$baoZi->sell();




