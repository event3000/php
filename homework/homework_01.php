<?php 
// ДОМАШНЕЕ ЗАДАНИЕ 1

$login = "Ivan";
echo "Вы вошли под именем {$login}";
unset($login);

// ДОМАШНЕЕ ЗАДАНИЕ 2

$number1 = 12;
$number2 = 15;
$result1 = ($number1 * $number1) + ($number2 * $number2); // простой вариант
$result2 = pow($number1, 2) + pow($number2, 2); // через pow - возведение в степень

var_dump( $result2 );

// ДОМАШНЕЕ ЗАДАНИЕ 3

$way = 12000; // в м (S)
$time = 600; // в сек (T)

// формула расчета: speed = way / time 
$speed = $way / $time;

var_dump("Скорость машины была " . $speed . "(м/с)" . ", расстояние пройдено " . $way . "(м),"  
. " время потрачено на дорогу " . $time . "(с).");

var_dump("Скорость машины была " . $speed * 3600 / 1000 . "(км/ч)" . ", расстояние пройдено " . $way / 1000 . "(км),"  
. " время потрачено на дорогу " . $time / 60 . "(мин).");

// ДОМАШНЕЕ ЗАДАНИЕ 4

define("CONST_NEW_NAME", 1000); // задаем имя константы и ее значение
var_dump( CONST_NEW_NAME );

//переопределить не получается, оно и понятно
// define("CONST_NEW_NAME", 1200)
// var_dump( CONST_NEW_NAME );


// ДОМАШНЕЕ ЗАДАНИЕ 4
// про приоритет http://php.net/manual/ru/language.operators.precedence.php

$i = 6;
var_dump( $i += ++$i + $i++ );  

$i = 1;
var_dump(++$i + $i++ + $i); 

$a = 2;
$b = $a++ + (--$a * ++$a); 
var_dump($b);	


 ?>