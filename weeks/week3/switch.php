<?php

// Global variables and switch
// if $GET['today] is set, $today, all is well. But it is not set, therefore else is the day.
// else today is TODAY

// global variable start with $_GET and are capitalized

// isset function is asking if something has been set

// $variable = 'This is our variable';     // Variable has been set/assigned
// if(isset($variable)) {                  // Has the variable ($variable) been set/assigned?
//     echo 'Variable has been set';       // If yes, display this
// } else
//     echo 'Variable has not been set';   // If no, display this

// echo '<br>';

// if(isset($_GET['today'])) {
//     echo 'Today is set';
// } else { 
//     echo 'Not set';
// }

if(isset($_GET['today'])) {             // If $_GET('today) is set/assigned
    $today = $_GET['today'];            // Then $today is that assigned value
} else {
    $today = date('l');                 // $_GET('today') is not set/assigned, therefore $today will be date('l') (day of the week)
}

switch($today) {

    case 'Thursday':
        $day = '<h2>Thursday</h2>';
        $pic = 'mess.png';
        $alt = 'woman speaking to man in fornt of building';
        $content = '<h3><a href="https://substack.com/profile/6215739-liza-donnelly?utm_source=about-page">Liza Donnelly</a></h3><br>
        <p>Thursday\'s cartoon features Liza, a cartoonist and writer for The New Yorker. She is the innovator of digital live drawing, a form of visual journalism. She draws and writes about culture and politics, trying to get at what\'s funny but also what\'s important.</p>';
    break;

    case 'Friday':
        $day = '<h2>Friday</h2>';
        $pic = 'intelligent_dog.png';
        $alt = 'hot dog laying on couch';
        $content = '<h3><a href="https://www.elisabethmcnair.com/about">Elisabeth McNair</a></h3><br>
        Friday\'s cartoon features Elisabeth McNair, a cartoonist, illustrator, and designer living in Atlanta, Georgia. She draws cartoons for The New Yorker and work as a designer at Family Brothers.';
    break;        

    case 'Saturday':
        $day = '<h2>Saturday</h2>';
        $pic = 'confidence.png';
        $alt = 'man and women having dinner';
        $content = '<h3><a href="https://www.jasonadamkatzenstein.com/about">Jason Adam Katzenstein</a></h3><br>
        Saturday\'s cartoon features Jason Adam Katzenstein, a cartoonist and comedy writer whose work has appeared in The New Yorker, The New York Times and MAD Magazine. He is the author and illustrator of the graphic memoir Everything Is an Emergency.';
    break;

    case 'Sunday':
        $day = '<h2>Sunday</h2>';
        $pic = 'devastating.png';
        $alt = 'man speaking to child';
        $content = '<h3><a href="https://www.instagram.com/eflakeagogo/">Emily Flake</a></h3><br>
        Sunday\'s cartoon features Emily Flake, New Yorker Cartoonist, writer who makes jokes and pies. Founder of @stnells Humor Writing Residency. A self-proclaimed apocalypse-minded GenX horndog fool.';
    break;

    case 'Monday':
        $day = '<h2>Monday</h2>';
        $pic = 'insignificant.png';
        $alt = 'woman taking photo of man';
        $content = '<h3><a href="https://afinecaseforpencils.com/post/179875110506/colin-tom">Colin Tom</a></h3><br>
        Monday\'s cartoon features Tom Colin, a Brooklyn-based artist and doodler. He was born in Singapore and moved around a lot as a kid, but predominantly grew up between the Bay Area, California, and Atlanta, Georgia.';
    break;

    case 'Tuesday':
        $day = '<h2>Tuesday</h2>';
        $pic = 'screen_time.png';
        $alt = 'woman at computer screen';
        $content = '<h3><a href="http://erikasjule.com/">Erika Sjule</a></h3><br>
        Tuesday\'s cartoon features Erika Sjule, a cartoonist and storyboard artist residing out of the San Francisco Bay Area. Erika has no memory of ever not drawing. There is a chance that this relates to her being dropped a lot as a baby, but she likes to tell herself otherwise.';
    break;

    case 'Wednesday':
        $day = '<h2>Wednesday</h2>';
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
    <title>Switch Exercise</title>
    <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

#wrapper {
    width: 500px;
    margin: 20px auto;

}

a {
    text-decoration: none;
    color: mediumseagreen;
}

h1, h2, h3, p {
    text-align: center;
    font-weight: 100;
}

h3 {
    margin-top: 30px;
}

li {
    padding: 5px;
    text-align: center;
    list-style-type: none;
}

img {
    width: 500px;
    margin-top: 30px;
}

    </style>
</head>
<body>
<div id="wrapper">
    <h1>Cartoon of the Day</h1>
    <?php echo $day; ?>
    <img src="./images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
    <?php echo $content; ?>
    <br>

    <h3>See This Week's Cartoons</h3>
    <br>
    <ul>
        <li><a href="switch.php?today=Sunday">Sunday</a></li>
        <li><a href="switch.php?today=Monday">Monday</a></li>
        <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
        <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
        <li><a href="switch.php?today=Thursday">Thursday</a></li>
        <li><a href="switch.php?today=Friday">Friday</a></li>
        <li><a href="switch.php?today=Saturday">Saturday</a></li>
    </ul>

</div>
<!-- end wrapper -->

</body>
</html>
