<?php
include_once('Circle.php');
include_once('Cylinder.php');
include_once('Rectangle.php');
include_once('Square.php');


$circle = new Circle('Circle 01', 3);
echo 'Circle area: ' . $circle->calculateArea() . '<br />';
echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';

$cylinder = new Cylinder('Cylinder 01',4,3);
echo 'Cylinder area: ' . $cylinder->calculateArea().'<br/>';
echo 'Cylinder volume: '.$cylinder->calculateVolume().'<br/>';

$Rectangle = new Rectangle('Rectangle 01',4,4);
echo 'Rectangle area' . $Rectangle->calculateArea()."<br/>";
echo 'Rectangle Perimeter'.$Rectangle->calculatePerimeter()."<br/>";

$Square = new Square('Square 01',5);
echo 'Square'.$Square->calculateArea()."<br/>";
echo 'Square'.$Square->calculatePerimeter()."<br/>";