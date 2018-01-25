<?php
/**
 * Created by PhpStorm.
 * User: jstanasz
 * Date: 1/23/18
 * Time: 11:25 AM
 */

//String Value
$dog = "Doggo";
//Integer Value
$age = 13;
//Boolean Values: true or false
$male = true;

echo $dog;

print "<h1>My dog is $age</h1>";
print '<h1>My dog is $age</h1>';
echo "Is the dog male? $male";

//Single and Double Quotes
echo '<p class="fun">Here is my text</p>';

//Concatenation
echo "My dog is " . $dog . " and she is " . $age . " years old.";

//Arrays
$animals = ["dog", "cat", "mouse", "horse", true, 32];
echo "I hate a $animals[2] the most.";

//Constant Variables
define('BIRTHDATE', "07/04/2000");

echo BIRTHDATE , "<br/>";

$x = 10;
$y = 4;

echo "Addition: " . ($x + $y) . "<br/>";
echo "Subtraction: " . ($x - $y) . "<br/>";
echo "Multiplication: " . ($x * $y) . "<br/>";
echo "Division: " . ($x / $y) . "<br/>";
echo "Modulus: " . ($x % $y) . "<br/>";
echo "Increment: " . ++$x . "<br/>";
echo "Decrement: " . --$y . "<br/>";

//Add and Assign
$z = 12;
$z += 5;
echo $z . "<br/>";

//Comparison Operators
$a = 25;
$b = 35;
$c = "25";

var_dump($a==$b);//checks value
var_dump($a==$c);//checks value
var_dump($a===$b);//checks data type and value
var_dump($a!=$b);
var_dump($a!==$c);
var_dump($a<$b);
var_dump($a<=$b);

?>