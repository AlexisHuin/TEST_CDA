<?php
$x = 5;
$y = 10;

function test(){
global $x, $y;
$y = $x + $y;
};
test();
echo $y;

function myTest(){
$x = 100;
echo "<p> Variable x à l'intérieur de la function est de $x</p>";
}

myTest();

function myNumb(){
    static $x = 100;
    echo $x;
    $x++;
};

myNumb();
myNumb();





?>