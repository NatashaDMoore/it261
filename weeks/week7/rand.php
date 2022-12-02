<?php

// random function
// Play with dice!

$dice = rand(1,6);
echo $dice;

$dice1 = rand(1,6);
$dice2 = rand(1,6);
echo '<br>';
echo '<p>'.$dice1.' and '.$dice2.'</p>';

echo '<h2>Let\'s add if else statements</h2>';

// if double 6 - win big
// elseif double - win
// else no double - no win

$dice1a = rand(1,6);
$dice2a = rand(1,6);

if($dice1a ==6 && $dice2a ==6) {
    echo 'Die One: <b>'.$dice1a.'</b> <br>Die Two: <b>'.$dice2a.'</b>';
    echo '<h2>Winner winner, chicken dinner!<h2>';
} elseif($dice1a !=6 && $dice1a == $dice2a) {
    echo 'Die One: <b>'.$dice1a.'</b> <br>Die Two: <b>'.$dice2a.'</b>';
    echo '<h2>We\'ve got a winner!<h2>';
} else {
    echo 'Die One: <b>'.$dice1a.'</b> <br>Die Two: <b>'.$dice2a.'</b>';
    echo '<h2>Sorry, no dice<h2>';
}

echo '<h2>Random Images</h2>';

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

$i = rand(0,4);

$selected_image = ''.$photos[$i].'.jpg';

echo '<img src="./images/'.$selected_image.'" alt="'.$photos[$i].'">';

echo '<h2>Creating a function</h2>';
 function random_images($photos) {
    $return = '';
    $i = rand(0,4);
    $selected_image = ''.$photos[$i].'.jpg';
    $return = '<img src="./images/'.$selected_image.'" alt="'.$photos[$i].'">';
    return $return;
 } // end function

 echo random_images($photos);
