<?php

echo '<h2>is_null() Function</h2>';
echo '<p style="font-style:italic;">The is_null() function checks whether a variable is NULL or not.
<br>This function returns true (1) if the variable is NULL, otherwise it returns false/nothing.</p>';

echo '<h3>First Example: a</h3>';

$a = 0;
echo "a is " . is_null($a) . "<br>";
echo '<p style="color:blue;">0 is assigned to "a" and is not NULL.</p>';

echo '<h3>Second Example: b</h3>';

$b = null;
echo "b is " . is_null($b) . "<br>";
echo '<p style="color:blue;">null is assigned to "b" and is echoing 1. This means TRUE; b is NULL.</p>';


echo '<h3>Third Example: c</h3>';

$c = "null";
echo "c is " . is_null($c) . "<br>";
echo '<p style="color:blue;">"null" (with double quotes) is assigned to "c" and is not NULL</p>';


echo '<h3>Fourth Example: d</h3>';

$d = NULL;
echo "d is " . is_null($d) . "<br>";
echo '<p style="color:blue;">NULL is assigned to "d" and is echoing 1. This means TRUE; d is NULL.</p>';


?>