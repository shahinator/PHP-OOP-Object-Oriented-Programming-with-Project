<?php 
    class Cars{
        static $wheel_count = 4;
        static $door_count = 2;

        static function car_details(){
            echo Cars :: $wheel_count . "<br>";
            echo Cars :: $door_count . "<br>";
        }
    }
    
    echo Cars :: $door_count. "<br>";
    echo Cars :: car_details().  "<br>";



?>