<?php
//9) Вывести все элементы массива с помощью цыкла for:

$states_of_the_USA=array("Alabama", "Colorado", "Hawaii", "California");

for($i = 0; $i < count($states_of_the_USA); $i++){
    print $states_of_the_USA[$i]."\n";
}