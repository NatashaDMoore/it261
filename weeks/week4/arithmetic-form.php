<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Form</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>My Arithmetic Form</h1>

    <form action="" method="post">
        <fieldset>
            <label>Name</label>
            <input type="text" name="name">

            <label>Phone</label>
            <input type="tel" name="phone">

            <label>Latte Quantity</label>
            <input type="number" name="lattes">
        
            <label>Capucino Quantity</label>
            <input type="number" name="capucinos">

            <label>Americano Quantity</label>
            <input type="number" name="americanos">

            <label>Special Requests</label>
            <textarea name="comments"></textarea>

            <input type="submit" value="Submit Order">
    
        </fieldset>

    </form>

    <p><a href="">RESET</a></p>


<?php

    date_default_timezone_set('America/Los_Angeles');
    $our_time = date('H,i');

    if(isset($_POST['name'],
    $_POST['phone'],
    $_POST['lattes'],
    $_POST['capucinos'],
    $_POST['americanos'],
    $_POST['comments'])){

    // Add if statement for empty fields - echo error

    if(empty($_POST['name'] &&
    $_POST['phone'] &&
    $_POST['lattes'] &&
    $_POST['capucinos'] &&
    $_POST['americanos'] &&
    $_POST['comments'])) {

    echo '<p class="error">Please Complete Form</p>';

    } else {
        // Define our variables

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $lattes = $_POST['lattes'];
        $capucinos = $_POST['capucinos'];
        $americanos = $_POST['americanos'];
        $comments = $_POST['comments'];
        $total = $lattes + $capucinos + $americanos;

        // if and ifelse statement for our time - echo greetings

    if($our_time <= 11) {
        $our_time = "Good Morning";

    } elseif($our_time <= 17) {
        $our_time = "Good Afternoon";

    } else {
        $our_time = "Good Evening";

    }

    echo '
    <div class="box">
        <h2> '.$our_time.' '.$name.'!</h2>
        <p>We have texted your order to: 
        <br>'.$phone.'
        <br>
        <br>You have ordered the following <b>'.$total.'</b> beverages:</p>
        <ul>
            <li> '.$lattes.' lattes </li>
            <li> '.$capucinos.' capucinos</li>
            <li> '.$americanos.' americanos</li>
        </ul>
        <p><b>Special Requests</b></p>
        <p>'.$comments.'</p>
    </div>
    ';

    } // end else

    } // end isset

?>

</body>
</html>