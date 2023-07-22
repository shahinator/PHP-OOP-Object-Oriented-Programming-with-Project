<?php 
    class Cars{
        static $door_count = 14;
        function __construct(){
            echo self::$door_count++ . "<br>";
        }
        function __destruct(){
            echo self::$door_count-- . "<br>";
        }


    }

    $bmw = new Cars();
    $merceds = new Cars();

    

?>