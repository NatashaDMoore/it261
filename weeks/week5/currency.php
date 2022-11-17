<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency 1 PHP Form</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
<fieldset>

    <label>Name</label>
    <input type="text" name="name">

    <label>Email</label>
    <input type="email" name="email">

    <label>Amount</label>
    <input type="number" name="amount">

    <label>Currency</label>
    <ul>
        <li><input type="radio" name="currency" value="0.017">Rubles</li>
        <li><input type="radio" name="currency" value="0.76">CAN Dollars</li>
        <li><input type="radio" name="currency" value="1.15">Pounds</li>
        <li><input type="radio" name="currency" value="1.00">Euros</li>
        <li><input type="radio" name="currency" value="0.0074">Yen</li>
    </ul>

    <input type="submit" value="Convert">

    <p><a href="">RESET</a></p>

</fieldset>
</form>

<?php

// Start with server request method
// Then, ask if any fields are empty
// If empty, display error
// Else the fields are not empty, if the fields are complete; name, email, etc. is set (isset)
// Then assign $_POST['name'] to $name, etc.
// Assign variables for math


if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['name'] &&
$_POST['email'] &&
$_POST['amount'] &&
$_POST['currency'])) {

    echo '<p class="error">Please Complete All Fields</p>';

} elseif (isset($_POST['name'],
$_POST['email'],
$_POST['amount'],
$_POST['currency'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];
    $currency = $_POST['currency'];
    $dollars = $amount * $currency;

        echo '
        <div class="box">
        <h2>Hello '.$name.'</h2>
        <p>You have deposited <b>'.floor($dollars).' USD</b> into your account</p>
        <p>Your confirmation email has been sent to:
        <br><b>'.$email.'</b></p>

        </div>
        ';

}

} // end server request method

?>
    
</body>
</html>