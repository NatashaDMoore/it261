<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 3 HTML</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>Form3.php</h1>
    <form action="" method="post">
        <fieldset>

        <label>First Name</label>
        <input type="text" name="first_name">

        <label>Last Name</label>
        <input type="text" name="last_name">

        <label>Email</label>
        <input type="email" name="email">

        <label>Comments</label>
        <textarea name="comments"></textarea>

        <input type="submit" value="Send It">

        <p><a href="">RESET</a></p>

        </fieldset>


    </form>

<?php

// LOGIC
// --First Statement-- If fields are complete, great
// --Second Statement-- If fields are not complete, echo "Complete all fields"
// Else (fields are complete) echo the information

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['comments'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];

        // Nest another statement in reference to the fields being empty

        if(empty($_POST['first_name'] &&
        $_POST['last_name'] &&
        $_POST['email'] &&
        $_POST['comments'])) {
            echo '<p class="error">Please Complete All Fields</p>';

} else { // End empty

    echo '
    
    <div class="box">
        <h2>Hello '.$first_name.' '.$last_name.'</h2>
        <p>We have received your email from <b>'.$email.'</b> and will be reviewing your comments: <b>'.$comments.'</b></p>
    
    
    </div>

    ';

} // End else


} // End isset


?>

</body>
</html>