<?php

class Calculator {
    //Statisk metode til addition med array metode
    public static function Sum(array $arr){
        //$result = $num1 + $num2;
        $result = array_sum($arr);
        return $result;
    }

    //Statisk metode til subtraktion
    public static function Subtract($num1, $num2){
        $result = $num1 - $num2;
        return $result;
    }

    //Statisk metode til multiplikation med array metode
    public static function Multiply(array $arr){
        //$result = $num1 * $num2;
        $result = array_product($arr);
        return $result;
    }

    //Statisk metode til division
    public static function Divide($num1, $num2){
        $result = $num1 / $num2;
        return $result;
    }
}