<?php

// Constant
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// Navigation switch
switch (THIS_PAGE) {
    case 'index.php';
    $title = 'Home Page';
    $body = 'home';
    break;

    case 'about.php';
    $title = 'About Natasha';
    $body = 'about-inner';
    break;

    case 'daily.php';
    $title = 'Daily';
    $body = 'daily-inner';
    break;

    case 'project.php';
    $title = 'Project';
    $body = 'project-inner';
    break;

    case 'contact.php';
    $title = 'Contact Natasha';
    $body = 'contact-inner';
    break;

    case 'gallery.php';
    $title = 'Galley';
    $body = 'gallery-inner';
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

// Isset for cartoon switch
if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

// Cartoon of the Day switch
switch($today) {

    case 'Thursday':
        $day = '<h2>Thursday</h2>';
        $color = 'brown';
        $pic = 'mess.png';
        $alt = 'woman speaking to man in fornt of building';
        $content = '<h3><a href="https://substack.com/profile/6215739-liza-donnelly?utm_source=about-page">Liza Donnelly</a></h3><br>
        <p>Thursday\'s cartoon features Liza, a cartoonist and writer for The New Yorker. She is the innovator of digital live drawing, a form of visual journalism. She draws and writes about culture and politics, trying to get at what\'s funny but also what\'s important.</p>';
    break;

    case 'Friday':
        $day = '<h2>Friday</h2>';
        $color = 'darkblue';
        $pic = 'intelligent_dog.png';
        $alt = 'hot dog laying on couch';
        $content = '<h3><a href="https://www.elisabethmcnair.com/about">Elisabeth McNair</a></h3><br>
        Friday\'s cartoon features Elisabeth McNair, a cartoonist, illustrator, and designer living in Atlanta, Georgia. She draws cartoons for The New Yorker and work as a designer at Family Brothers.';
    break;        

    case 'Saturday':
        $day = '<h2>Saturday</h2>';
        $color = 'darkgrey';
        $pic = 'confidence.png';
        $alt = 'man and women having dinner';
        $content = '<h3><a href="https://www.jasonadamkatzenstein.com/about">Jason Adam Katzenstein</a></h3><br>
        Saturday\'s cartoon features Jason Adam Katzenstein, a cartoonist and comedy writer whose work has appeared in The New Yorker, The New York Times and MAD Magazine. He is the author and illustrator of the graphic memoir Everything Is an Emergency.';
    break;

    case 'Sunday':
        $day = '<h2>Sunday</h2>';
        $color = 'green';
        $pic = 'devastating.png';
        $alt = 'man speaking to child';
        $content = '<h3><a href="https://www.instagram.com/eflakeagogo/">Emily Flake</a></h3><br>
        Sunday\'s cartoon features Emily Flake, New Yorker Cartoonist, writer who makes jokes and pies. Founder of @stnells Humor Writing Residency. A self-proclaimed apocalypse-minded GenX horndog fool.';
    break;

    case 'Monday':
        $day = '<h2>Monday</h2>';
        $color = 'mediumseagreen';
        $pic = 'insignificant.png';
        $alt = 'woman taking photo of man';
        $content = '<h3><a href="https://afinecaseforpencils.com/post/179875110506/colin-tom">Colin Tom</a></h3><br>
        Monday\'s cartoon features Tom Colin, a Brooklyn-based artist and doodler. He was born in Singapore and moved around a lot as a kid, but predominantly grew up between the Bay Area, California, and Atlanta, Georgia.';
    break;

    case 'Tuesday':
        $day = '<h2>Tuesday</h2>';
        $color = 'red';
        $pic = 'screen_time.png';
        $alt = 'woman at computer screen';
        $content = '<h3><a href="http://erikasjule.com/">Erika Sjule</a></h3><br>
        Tuesday\'s cartoon features Erika Sjule, a cartoonist and storyboard artist residing out of the San Francisco Bay Area. Erika has no memory of ever not drawing. There is a chance that this relates to her being dropped a lot as a baby, but she likes to tell herself otherwise.';
    break;

    case 'Wednesday':
        $day = '<h2>Wednesday</h2>';
        $color = 'purple';
        $pic = 'earbud.jpg';
        $alt = 'two apple earbuds';
        $content = '<h3><a href="https://www.brookeabourgeois.com/">Brooke Ann Bourgeois</a></h3><br>
        Wednesday\'s cartoon features Brooke Ann Bourgeois, is a cartoonist and illustrator based in London. Originally from New Orleans, Louisiana, she first moved to the UK for a post-graduate fellowship in storytelling and comedy after she graduated from Harvard with a degree in neurobiology. ';
    break;
}

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