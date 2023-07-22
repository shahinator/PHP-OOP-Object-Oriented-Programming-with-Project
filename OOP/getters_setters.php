<?php 
    class Cars{
        
        private $door_count = 2;

        function get_values(){
           echo $this -> door_count . "<br>";
        }
        function set_values(){
            $this -> door_count = 10 . "<br>";
        }
    }

    $bmw = new Cars();
    $bmw -> get_values();
    $bmw -> set_values();
   

?>