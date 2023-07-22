<?php 
    class Cars{
        static $wheel_count = 4;
        static function car_details(){
            return self::$wheel_count . "<br>";
        }
    }
    class Trucks extends Cars{
        static function display(){
            echo parent:: car_details();
        }
    }

    Trucks::display();

?>