<?php 
    //defination methods 
    class Cars {
       function gretting(){

       } 
       function gretting2(){

    } 
    }
$the_methods = get_class_methods('Cars');
foreach ($the_methods as $methods) {
    echo $methods. "<br>";
}
?>