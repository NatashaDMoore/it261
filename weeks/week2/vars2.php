<?php
// Concatenation
// Operators - assignment operators
// Some preset functions
// Arrays

$name = 'Natasha';
$first_name = 'Natasha';
$last_name = 'Moore';
echo '<br>';
$name = 'Natasha';
$name .= ' Moore';
echo $name;

echo '<br>';
$color = 'red';
echo $color;

echo '<br>';
echo 'Natasha\'s favorite color is '.$color.'';

echo '<br>';
$x = 20;
$y = 5;
$z = $x + $y;
echo $z;

echo '<br>';
$x += 5;
echo $x;

echo '<br>';
$x = 100;
$x *= 10;
echo $x;

echo '<br>';
echo '<h3>Our products, quantity, and tax exercise</h3>';
$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.097;

echo $total;

echo '<br>';
echo '<h3>Amount should reflect decimal places. Floats and a new function called -- number_format()</h3>';

$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.097;
$total_friendly = number_format($total,2); // Inside number_format -- first argument ($total), Number of decimal places (2)
// $total_friendly [variable] = number_format [function] ($total,2) [argument]

echo $total_friendly;
echo '<br>';
echo 'We have a total of <b>$'.$total_friendly.'</b>';

echo '<br>';
$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.098;
echo 'We have a total of <b>$'.number_format($total, 2).'</b>'; // In-line function instead of function assigned to variable

echo '<h3>Our second preset function is the date funtion</h3>';
echo date('Y');
echo '<br>';
echo date('l'); // l = full textual representation of day. d = day 01-31. D = 3 letter text of day. j = 1-31 without 0s.
echo '<br>';

echo date("l jS \of F Y h:i:s A");
echo '<br>';
date_default_timezone_set('America/Los_Angeles');
echo '<br>';

echo date("l jS \of F Y h:i A");

echo '<br>';
echo '<h3>Time for an array!</h3>';
    // We cannot echo an array!
    // Square brackets [] signifies an array

$fruit[] = 'grapes';    // 0
$fruit[] = 'cherries';  // 1
$fruit[] = 'bananas';   // 2
$fruit[] = 'melons';    // 3
$fruit[] = 'apples';    // 4
$fruit[] = 'oranges';   // 5

echo $fruit[2];
echo '<br>';

$fruit = array(     // array signals array and does not need []
    'grapes',
    'cherries',
    'bananas',
    'melons',
    'apples',
    'oranges'
);

$fruit = [          // [] Needed to signal array
    'grapes',
    'cherries',
    'bananas',
    'melons',
    'apples',
    'oranges'
];

print_r($fruit);
 
echo '<h3>Associative array</h3>';

var_dump($fruit);      // Var_dump signals array and does not need []

echo '<br>';
$nav = [
    'index.php' => 'Home', // Index = Key. Home = Value
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
];

echo '<pre>';
    var_dump($nav);
echo '</pre>';