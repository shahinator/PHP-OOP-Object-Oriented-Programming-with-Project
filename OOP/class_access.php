<?php 
    class Cars{
        public $wheel_count = 4;
        private $door_count = 2;
        protected $seat_count = 12;
        function car_details(){
            echo $this -> wheel_count . "<br>";
            echo $this -> door_count . "<br>";
            echo $this -> seat_count . "<br>";
        }
    }

    $bmw = new Cars();
    //echo $bmw -> wheel_count;
    //echo $bmw -> door_count;
    //echo $bmw -> seat_count;
    $bmw -> car_details();
    class Trucks extends Cars {

    }

    $tacoma = new Trucks();

?>