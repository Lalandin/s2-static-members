<?php
require_once 'classes/Calculator.php';

//Array med tal
$array = [1,2,3,4,5];
//Udskrift af statiske metoder
echo Calculator::Sum($array) . "<br>";
echo Calculator::Subtract(7,5) . "<br>";
echo Calculator::Multiply($array) . "<br>";
echo Calculator::Divide(20,2);