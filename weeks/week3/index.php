<?php

echo '<h2>Navigation with key and value</h2>';

$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'galley.php' => 'Gallery'
);

echo '<ul>';
foreach($nav as $key => $value) {
echo '<li><a href=" '.$key.' "> '.$value.' </a></li>';
}
echo '</ul>';

echo '<h2>Navigation will be a different color on index.php</h2>';

// Define a constant
// THIS_PAGE will make the value equal whatever page we are currently on
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// Add an if statement - if we are on THIS_PAGE and it is the index.php page, do something

echo '<ul>';
foreach($nav as $key => $value) {
    if(THIS_PAGE == $key) {
        echo '<li><a style="color:red;" href=" '.$key.' "> '.$value.' </a></li>';
    } else {
        echo '<li><a style="color:green;" href=" '.$key.' "> '.$value.' </a></li>';
    }


}; // end for each
echo '</ul>';

