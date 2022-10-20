<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch (THIS_PAGE) {
    case 'index.php';
    $title = 'Home Page';
    $body = 'home';
    break;

    case 'about.php';
    $title = 'About Natasha';
    $body = 'about inner';
    break;

    case 'daily.php';
    $title = 'Daily';
    $body = 'daily inner';
    break;

    case 'project.php';
    $title = 'Project';
    $body = 'project inner';
    break;

    case 'contact.php';
    $title = 'Contact Natasha';
    $body = 'contact inner';
    break;

    case 'gallery.php';
    $title = 'Galley';
    $body = 'gallery inner';
    break;
}

// Navigation
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'galley.php' => 'Gallery'
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/styles.css" type="text/css"/>
 </head>
    <body class="<?php $body; ?>">
     <header>
        <div class="inner-header">
            <a href="index.php">
                <img style="width: 150px"; id="logo" src="images/logo.png" alt="logo">
            </a>

            <!-- <nav>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Daily</a></li>
                    <li><a href="">Project</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Gallery</a></li>
                </ul>

            </nav> -->

        <nav>
            <ul>
            <?php

            foreach($nav as $key => $value) {
                if(THIS_PAGE == $key) {
                    echo '<li><a style="font-size: 1.4em; color:mediumseagreen;" href=" '.$key.' "> '.$value.' </a></li>';
                } else {
                    echo '<li><a style="font-size: 1.4em; color:white;" href=" '.$key.' "> '.$value.' </a></li>';
                }
            }; // end for each

            ?>
            </ul>
        </nav>

        </div>
        <!-- end inner header -->
     </header>