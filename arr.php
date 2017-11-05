<?php
/**
 * Created by PhpStorm.
 * User: pozdny
 * Date: 05.10.2017
 * Time: 12:16
 */

$var_arr[] = 1;
$var_arr[] = 2;
$var_arr[] = 3;
$var_arr[] = 4;
foreach($var_arr as $key =>&$value){
    $value = true;
}
unset($value);
var_dump($var_arr);
echo '<hr>';
$value = 100;
var_dump($var_arr);


$a = 0;
$b = "0";
$c = null;

var_dump($a==$b);
var_dump($a==$c);
var_dump($b==$c);


$a = 3;
$b = "5";
$c = "4c";
$d = "v1";
var_dump($a + $b);
var_dump($b + $c);
var_dump($a + $d);
var_dump($b + $d);
var_dump($c + $d);