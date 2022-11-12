<!DOCTYPE html>   <!--adder-wrong.php-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celcius</title>
    <!--<link href="css/styles.css" type="text/css" rel="stylesheet">-->
</head>
<title>My Adder Assignment</title>
<style>

</style>
</head>
<body>

    <h1>Adder.php</h1> 
    <form action="" method="post">
        <label>Enter the first number:</label>
        <input type="number" name="num1">
        <br>
        <label>Enter the second number:<input type="number" name="num2"><br>
        <input type="submit" value="Add Em!"> <!-- error -->
    </form>

<?php 

if(isset($_POST['num1'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $myTotal = $num1 + $num2; // error

echo '<h2>You added '.$num1.' and '.$num2.'</h2>'; // error

echo '<p>and the answer is</p>
    <p style="color:red">'.$myTotal.'!</p>'; // error

echo '<p><a href="">Reset page</a>'; // error

} // end isset

?>
</body>
</html> 
