<?php
//2)Вывести количество элементов массива

$box = array(1 => 'помидор',
    '2' => 'яблоко',
    '1key' => 'груша',
    'персик',
    true => 'апельсин');

echo count($box)."\n";

//проверка
echo(implode(",",$box) ."\n");

echo($box[2]."\n");
echo($box['1key']."\n");
echo($box[3]."\n");
///true перезаписывает 1
echo($box[1]."\n");
