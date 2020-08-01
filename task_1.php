<?php
/*
 * Вывести все простые числа в диапазоне от 30 до 60
 */

function is_simple($num){
    // перебираем возможные делители от 2 до sqrt(n)
    for($d=2; $d*$d<=$num; $d++){
        // если разделилось нацело, то составное
        if($num%$d==0)
            return false;
    }
    // если нет нетривиальных делителей, то простое

    print($num." ");
}

for($num=30; $num<=60; $num++){
    is_simple($num);
}

