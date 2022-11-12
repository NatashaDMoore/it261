<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celcius</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>

    <h2>Celcius Conversion</h2>

    <form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="post">
        <fieldset>
            <label>Enter Celcius Value</label>
            <input type="number" name="cel">
            <input type="submit" value="Convert">
        </fieldset>
        <p><a href="">RESET</a></p>
    </form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(isset($_POST['cel'])) {
        $cel = $_POST['cel'];
        // new function to ensure that values are integers -- intval()
        $cel_int = intval($cel);
        $far = ($cel_int*9/5)+32;
    } // end isset

// if user does not enter value, say something

if($cel == NULL) {
    echo '<p class="error">Please Enter Celcius Value</p>';

} elseif($far <= 32) {
    echo '<p>'.$cel_int.' degrees celcius equals '.$far.' degrees fahrenheit
    <br> It\'s pretty chilly!</p>';
} elseif($far <= 45) {
    echo '<p>'.$cel_int.' degrees celcius equals '.$far.' degrees fahrenheit
    <br> It\'s getting warmer!</p>';
} elseif($far <= 60) {
    echo '<p>'.$cel_int.' degrees celcius equals '.$far.' degrees fahrenheit
    <br> It\'s classic Seattle weather!</p>';
} elseif($far <= 70) {
    echo '<p>'.$cel_int.' degrees celcius equals '.$far.' degrees fahrenheit
    <br> It\'s time for shorts!</p>';
} else {
    echo '<p>'.$cel_int.' degrees celcius equals '.$far.' degrees fahrenheit
    <br> It\'s hawt!</p>';
}

} //end post

?>

</body>
</html>