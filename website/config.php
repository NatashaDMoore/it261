<?php

// ob_start function ensures the entire page is read to eliminate header errors
ob_start();

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
    $body = 'about inner';
    break;

    case 'daily.php';
    $title = 'Daily';
    $body = 'daily inner';
    break;

    case 'film.php';
    $title = 'Film';
    $body = 'film inner';
    break;

    case 'film-details.php';
    $title = 'Film';
    $body = 'film-details inner';
    break;

    case 'contact.php';
    $title = 'Contact Natasha';
    $body = 'contact inner';
    break;

    case 'gallery.php';
    $title = 'Gallery';
    $body = 'gallery inner';
    break;

    case 'thnx.php';
    $title = 'Thank You';
    $body = 'thnx inner';
    break;
}

// Navigation
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'film.php' => 'Film',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);

function make_links($nav) {
    $my_return = '';
    foreach($nav as $key => $value) {
    if(THIS_PAGE == $key) {
        $my_return .= '<li><a style="font-size: 1.4em; color:mediumseagreen;" class="current" href=" '.$key.' "> '.$value.' </a></li>';
    } else {
        $my_return .= '<li><a style="font-size: 1.4em; color:white;" href=" '.$key.' "> '.$value.' </a></li>';
    }

    } // end foreach

    return $my_return;
} // end function


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
        $alt = 'woman speaking to man in front of building';
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


// Form PHP

    // define variables above request method!
    $first_name = '';
    $last_name = '';
    $email = '';
    $comments = '';
    $privacy = '';
    $gender = '';
    $phone = '';
    $wines = '';
    $region = '';
    $first_name_err = '';
    $last_name_err = '';
    $email_err = '';
    $phone_err = '';
    $comments_err = '';
    $privacy_err = '';
    $gender_err = '';
    $wines_err = '';
    $region_err = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    // ERROR MESSAGE if(empty)
    // assigning error messages to variables
    if(empty($_POST['first_name'])) {
        $first_name_err = 'Required';
    } else {
        $first_name = $_POST['first_name'];
    }

    if(empty($_POST['last_name'])) {
        $last_name_err = 'Required';
    } else {
        $last_name = $_POST['last_name'];
    }

    if(empty($_POST['email'])) {
        $email_err = 'Required';
    } else {
        $email = $_POST['email'];
    }

    if(empty($_POST['gender'])) {
        $gender_err = 'Required';
    } else {
        $gender = $_POST['gender'];
    }

    if(empty($_POST['phone'])) {
        $phone_err = 'Required';
    } else {
        $phone = $_POST['phone'];
    }
    
    if(empty($_POST['wines'])) {
        $wines_err = 'Please select a wine';
    } else {
        $wines = $_POST['wines'];
    }

    if($_POST['region'] == NULL) {
        $region_err = 'Required';
    } else {
        $region = $_POST['region'];
    }
    
    if(empty($_POST['comments'])) {
        $comments_err = 'Required';
    } else {
        $comments = $_POST['comments'];
    }

    if(empty($_POST['privacy'])) {
        $privacy_err = 'Required';
    } else {
        $privacy = $_POST['privacy'];
    }

// Wines function
    // create function my_wines and reference variable $wines that will be an array.
function my_wines($wines) {
    // create $my-return variable and it's currently empty.
$my_return ='';

if(!empty($_POST['wines'])) {
    // assign $my_return to implode function including $_POST['wines']
    // Single quote and comma!
$my_return = implode(', ', $_POST['wines']);

} else {
    $wines_err = 'Please select a wine';
}

    // MUST return $my_return BEFORE the end of the function!
return $my_return;

} // end function

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['gender'],
$_POST['phone'],
$_POST['wines'],
$_POST['region'],
$_POST['comments'],
$_POST['privacy'])) {

    $to = 'nmoorejunk@gmail.com';
    $subject = 'Test Email ' .date('m/d/y, h i A');
    $body = '
    Name: '.$first_name.' '.$last_name.' '.PHP_EOL.'
    Email: '.$email.' '.PHP_EOL.'
    Phone: '.$phone.' '.PHP_EOL.'
    Gender: '.$gender.' '.PHP_EOL.'
    Wines: '.my_wines($wines).' '.PHP_EOL.'
    Region: '.$region.' '.PHP_EOL.'
    Comments: '.$comments.' '.PHP_EOL.'
    Privacy: '.$privacy.' '.PHP_EOL.'
    ';

    // assign 'from' to the $header variable and add to the mail function.
    $headers = array(
        'From' => 'noreply@gator3401.hostgator.com'
    );

    if(!empty($first_name && $last_name && $email && $region && $wines && $gender && $comments && $privacy)) {

    mail($to, $subject, $body, $headers);
    header('Location:thx.php');

    } // end if(!empty)

} // end isset

} // end server request method



// Contact form PHP
$first_name = '';
$last_name = '';
$email = '';
$comments = '';
$privacy = '';
$position = '';
$reason = '';
$method = '';

$first_name_err = '';
$last_name_err = '';
$email_err = '';
$phone_err = '';
$comments_err = '';
$privacy_err = '';
$position_err = '';
$reason_err = '';
$method_err = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

// ERROR MESSAGE if(empty)
// assigning error messages to variables
if(empty($_POST['first_name'])) {
    $first_name_err = 'Required';
} else {
    $first_name = $_POST['first_name'];
}

if(empty($_POST['last_name'])) {
    $last_name_err = 'Required';
} else {
    $last_name = $_POST['last_name'];
}

if(empty($_POST['email'])) {
    $email_err = 'Required';
} else {
    $email = $_POST['email'];
}

// if(empty($_POST['phone'])) {
//     $phone_err = 'Required';
// } else {
//     $phone = $_POST['phone'];
// }

if(empty($_POST['phone'])) { // if empty, type in your number
    $phone_err = 'Your phone number please!';
    } elseif(array_key_exists('phone', $_POST)){
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
    { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
    $phone_err = 'Invalid format!';
    } else{
    $phone = $_POST['phone'];
    } // end else
    } // end main if

if(empty($_POST['position'])) {
    $position_err = 'Required';
} else {
    $position = $_POST['position'];
}

if(empty($_POST['reason'])) {
    $reason_err = 'Please select a reason for contact';
} else {
    $reason = $_POST['reason'];
}

if($_POST['method'] == NULL) {
    $method_err = 'Required';
} else {
    $method = $_POST['method'];
}

if(empty($_POST['comments'])) {
    $comments_err = 'Required';
} else {
    $comments = $_POST['comments'];
}

if(empty($_POST['privacy'])) {
    $privacy_err = 'Required';
} else {
    $privacy = $_POST['privacy'];
}

// function
function my_reason($reason) {
$return ='';

if(!empty($_POST['reason'])) {
// assign $my_return to implode function including $_POST['wines']
// Single quote and comma!
$return = implode(', ', $_POST['reason']);
}

// MUST return $return BEFORE the end of the function!
return $return;

} // end function

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['phone'],
$_POST['position'],
$_POST['reason'],
$_POST['method'],
$_POST['comments'],
$_POST['privacy'])) {

$to = 'szemeo@mystudentswa.com';
$subject = 'Contact Request ' .date('m/d/y, h i A');
$body = '
Name: '.$first_name.' '.$last_name.' '.PHP_EOL.'
Email: '.$email.' '.PHP_EOL.'
Phone: '.$phone.' '.PHP_EOL.'
Position: '.$position.' '.PHP_EOL.'
Contact Reason: '.my_reason($reason).' '.PHP_EOL.'
Contact Method: '.$method.' '.PHP_EOL.'
Comments: '.$comments.' '.PHP_EOL.'
Privacy: '.$privacy.' '.PHP_EOL.'
';

// assign 'from' to the $header variable and add to the mail function.
$headers = array(
    'From' => 'noreply@gator3401.hostgator.com'
);

if(!empty($first_name && $last_name && $email && $position && $reason && $method && $comments && $privacy) &&
preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {

mail($to, $subject, $body, $headers);
header('Location:thnx.php');

} // end if(!empty)

} // end isset

} // end server request method




// Gallery
$people['Michelangelo_Buonarroti'] = 'buona_david_David';
$people['Salvador_Dali'] = 'sdali_persi_The Persistence of Memory';
$people['Pablo_Picasso'] = 'picas_demoi_Les Demoiselles d\'Avignon';
$people['Vincent_van_Gogh'] = 'vango_starr_Starry Night';
$people['Auguste_Rodin'] = 'rodin_ageof_The Age of Bronze';
$people['Francisco_Goya'] = 'fgoya_satur_Saturn Devouring His Son'; 
$people['Johannes_Vermeer'] = 'verme_pearl_Girl with a Pearl Earring'; 

// $variable['key'] = 'value';
// $name is key and $image is value (Assigned using the foreach loop below)

// end Gallery


// Film Page

define('DEBUG', 'TRUE');  // We want to see errors

include('credentials.php');

function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  } 
}


