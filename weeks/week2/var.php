<?php
// my variables

// Don't forget that a variable is merely a container for data

$name = "Natasha"; // Natasha is a string
$name = 'Otis';

echo $name;

$body_temp = 98; // 98 is an integer
$body_temp_new = 98.6; // 98.6 is a float

echo "<br>";
echo '<br>';
echo $body_temp;
echo '<br>';
echo $body_temp_new;
echo '<br>';
echo "My name is $name!";
echo '<br>';
echo 'My name is '.$name.'!'; // Variable inside a string must use double quote ~OR~ single quote dot around variable
echo '<br>';
echo 'The normal body temperature of a human being is '.$body_temp_new.'!';

echo '<br>';
$name = 'Sharon';
echo $name;

echo '<br>';

$x =20;
$y = 5;
$z = $x + $y; // X plus Y is "assigned" to Z. Not using the term "equals".
echo $z;

echo '<br>';
$z = $x * $y;
echo $z;

echo '<br>';
$z = $x / $y;
echo $z;

echo '<br>';
$first_name = 'Natasha';
$last_name = 'Moore';
echo $first_name.' '.$last_name; // Echoing just the variables requires .' '. (white space matters here). Can also use double ." ". 
echo '<br>';
echo $first_name." ".$last_name;

echo '<br>';
echo "My full name is $first_name $last_name"; // Double quotes will display both variables (white space is displayed)
echo '<br>';
echo 'My full name is '.$first_name.'  '.$last_name.' '; // Single quotes require '.[variable].' to display variables.