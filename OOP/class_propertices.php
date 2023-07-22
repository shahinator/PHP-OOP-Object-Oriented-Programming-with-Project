<?php 
    //defination methods 
    class Cars {


        var $wheel_count = 4;



       function car_detail(){
        return "This car has" .$this -> wheel_count;
       } 
    }




    $bmw = new Cars();
    echo $bmw ->  wheel_count = 10 ."<br>";
    echo $bmw ->  car_detail() ."wheels <br>";

?>