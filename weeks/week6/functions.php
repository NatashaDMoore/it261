<?php

// FUNCTIONS PAGE

function sayHello() {
    echo 'Hello PHP function';
}

sayHello();


echo '<h2>Arithmetic - Cube</h2>';

function cube($num) {
    $cubing = $num * $num * $num;
    echo $cubing;
}

cube(5);


echo '<h2>Area</h2>';

function area($w, $l) {
    $area = $w * $l;
    return $area;
}

$area = area(10,10);
echo $area;
area(10,10);


echo '<h2>Celcius Converter</h2>';

function celcius_converter($cel){
    $far = ($cel * 9/5) + 32;
    echo $far;
}

echo celcius_converter(100);


echo '<h2>Indexed Arrays</h2>';

function area_volume($a,$b,$c) {
    // Index 0
    $area = $a * $b;
    //Index 1
    $volume = $a * $b * $c;
    return array($area,$volume);
}
// assign values to variables
$my_array = area_volume(10,5,10);

// Then echo the indexed array. 0 being $area 1 being $volume.
echo '
    <b>Area</b> '.$my_array[0].' 
    <br>
    <b>Volume</b> '.$my_array[1].'
';


echo '<h2>List Function</h2>';

function area_volume2($a,$b,$c) {

    $area = $a * $b;
    $volume = $a * $b * $c;
    return array($area,$volume);
}

list($area, $volume) = area_volume2(5,10,20);
echo '
    <b>Area</b> '.$area.' 
    <br>
    <b>Volume</b> '.$volume.'
';

echo '<h2>Navigation</h2>';

// Defining 'THIS_PAGE' as index instead of changing the code we copied from header.php. This can go anywhere.
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['galley.php'] = 'Gallery';

function make_links($nav) {
    $my_return = '';
    foreach($nav as $key => $value) {
    if(THIS_PAGE == $key) {
    
        $my_return .= '<li><a class="current" href=" '.$key.' ">';

    } else {
        $my_return .= '<li><a href=" '.$key.' "> '.$value.' </a></li>';

    }

    } // end foreach

    return $my_return;
} // end function

echo '<h2>Navigation Created with a Function</h2>';

echo make_links($nav);

echo '<h2>The implode function</h2>';

$cars = array('toyota', 'ford', 'subaru', 'audi', 'bmw', 'volkswagen');

// first parameter includes comma and space. Second displays the array.
$my_cars = implode(', ', $cars);

echo $my_cars;

echo '<p>If post wines is not empty, take post wines and iplode them, and create a new variable and implode them.</p>';