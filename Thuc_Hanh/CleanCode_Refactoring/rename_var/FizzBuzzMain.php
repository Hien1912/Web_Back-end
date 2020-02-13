<?php
include('FizzBuzz.php');
include("FizzBuzzTest.php");

$fizzBuzz = new FizzBuzz(15);
echo $fizzBuzz;
echo "<br>";
$test = new FizzBuzzTest();
echo $test;
