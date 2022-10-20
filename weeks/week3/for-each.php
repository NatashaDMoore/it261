<?php

echo '<h2>This will be my wine list</h2>';

$wines = array(
    'Cabernet',
    'Merlot',
    'Syrah',
    'Malbec',
    'Red Blend'
);

// We cannot echo an array so we will use a foreach loop

echo '<ul>';
foreach($wines as $key) {
echo '<li>'.$key.'</li>';
}
echo '</ul>';

echo '<h2>Movies and shows list which will have both key and value</h2>';

$shows = [
    'Netflix'=> 'Ozark',
    'Netflix'=> 'Handmaid\'s Tale',
    'Netflix'=> 'Paper Girls',
    'Paramount Plus'=> 'Evil',
    'Showtime'=> 'Dexter',
    'Prime'=> 'Interview with the Vampire',
    'HBO'=> 'Landscapers'
];

echo '<ul>';
foreach($shows as $key => $value) {
echo '<li><b>'.$key.':</b> '.$value.'</li>';
}
echo '</ul>';

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
