<?php 
class Foo
{
    function printItem($string)
    {
        echo 'Foo: ' . $string . "</br>";
    }
    
    function printPHP()
    {
        echo 'PHP is great.' . "</br>";
    }
}

class Bar extends Foo
{
    function printItem($string)
    {
        return 'Bar: ' . $string . "</br>";
    }
}

$foo = new Foo();
$bar = new Bar();
$foo->printItem('baz'); // Output: 'Foo: baz'
$foo->printPHP();       // Output: 'PHP is great' 
echo $bar->printItem('Inheritance Class Values'); // Output: 'Bar: baz'
$bar->printPHP();       // Output: 'PHP is great'

?>