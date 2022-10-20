<?php

// if statements
// else statements
// if elseif statements

$temp = 61;
if($temp <= 60) { // == Equals, <= Less than or equal
  echo 'It is a classic Seattle day.';
} else {
    echo 'Put your short on, Seattle!';
}

echo '<br>';

$new_temp = 99;
if($new_temp <= 60) {
    echo 'It\'s a classic Seattle day.';
} elseif($new_temp <= 70) {
    echo 'Put your shorts on, Seattle!';
} elseif($new_temp <= 80) {
    echo 'Summer is <b>finally</b> here!';
} else {
    echo 'Better buy an AC unit before they sell out!';
}

echo '<h2>Salary and Bonus Exercise</h2>';

// annual salary $95000
// sales at or above $100000 will bonus
// 100000 = 5%
// 120000 = 10%
// 140000 = 15%
// 150000 = 20%

$salary = 95000;
$sales = 150000;

if($sales <= 99999) {
    echo 'No bonus for you';
} elseif($sales <= 119999) {
    $salary *= 1.05;
    echo '$'.number_format($salary, 2).'';
} elseif ($sales <= 139999) {
    $salary *= 1.1;
    echo '$'.number_format($salary, 2).'';
} elseif ($sales <= 149999) {
    $salary *= 1.15;
    echo '$'.number_format($salary, 2).'';
} else {
    $salary *= 1.2;
    echo 'Your annual salary including bonus totals $'.number_format($salary, 2).'';
}