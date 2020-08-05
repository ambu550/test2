<?php
/*
 *  Задача на логику “Счастливые билеты”
Предположим, что номер билета состоит из 6 цифр. Билет считается
счастливым, если сумма первых трех цифр равняется сумме вторых трех цифр.
Написать функцию luckyTickets($k), которая посчитает и вернет возможное количество таких билетов, где $k — число цифр в билете (четное, 2,4,6...). Билет 000000 считается.
Примеры счастливых билетов: 933591, 030300, 113311.
Обратите внимание: количество цифр в пропуске может быть как больше, так и
меньше 6. Гарантируемое условие - количество цифр четное.
 */

$k = 1;

//проверка на чётное число
if ($k>6 || $k%2 != 0 || $k <0)
{echo 'fail';}
else {echo 'chetn';}