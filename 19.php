<?php
//19) Какие ключи и значения содержит массив $c?

$a=1;
$p="a";
// определяем константу
define("b",2);
//0=>a
$c[]=$p;

//a=>1
$c[$p]=$a;

//2=>a
$c[b]=$p;

//3=>a
$c[]="a";

//1=>2
$c[$a]=b;

//0=> a меняет на aa
for($i=0; $i<=b; $i++)
{
    if($c[$i]=="a")
    {
        $c[$i]="aa";
        break;
    }
}

/*
 * 0=>aa a=>1 2=>a 3=>a 1=>2
 */

var_dump($c);
