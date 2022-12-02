<?php

// str_replace() and substr() functions
// substr(string,start,length)
    // a positive number - Start at a specified position in the string
    // a negative number - Start at a specified position from the end of the string
    // 0 - Start at the first character in the string

$statement = 'Presently, I am reading Eleanor Roosevelt\'s biography';
echo $statement;
echo '<br>';
echo substr($statement, 0);
echo '<br>';
echo substr($statement, 1);
echo '<br>';
echo substr($statement, 6);
echo '<br>';
echo substr($statement, 11, 12);
echo '<br>';
echo substr($statement,-30,18);
echo '<br>';

// str_replace(word to be replaced, replace with, string)
$statement2 = 'Ken Burns has made a docu-series about the roosevelt family on PBS named The roosevelt\'s';
echo $statement2;
echo '<br>';
echo str_replace('roosevelt','Roosevelt',$statement2);