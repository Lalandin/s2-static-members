<?php

class Calculator {

    //PI
    public static $PI = 3.14159;

    //Statisk metode til udregning af rektangels areal
    public static function rectangle_area($l, $w){
        $result = $l * $w;
        return $result;
    }
    //Statisk metode til udregning af cirkels omkreds
    public static function circumference($D){
        $result = $D * self::$PI;
        return $result;
    }
    //Statisk metode til udregning af cirkels radius
    public static function circle_area($r){
        $result = ($r * 2) * self::$PI;
        return $result;
    }

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