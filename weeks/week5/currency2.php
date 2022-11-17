<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency 2 With Drop Down Option</title>
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

    <label>Choose Your Banking Institution</label>

    <select name="bank">
        <option value="" NULL>Select One</option>
        <option value="boa">Bank of America</option>
        <option value="chase">Chase Bank</option>
        <option value="banner">Banner Bank</option>
        <option value="wells">Wells Fargo</option>
        <option value="becu">Boeing Employee Credit Union</option>
    </select>

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

if(empty($_POST['name'])) {
    echo '<p class="error">Please complete name</p>';
}

if(empty($_POST['email'])) {
    echo '<p class="error">Please complete email</p>';
}

if(empty($_POST['amount'])) {
    echo '<p class="error">Please complete amount</p>';
}

if(empty($_POST['currency'])) {
    echo '<p class="error">Please choose currency to covert</p>';
}

if($_POST['bank'] == NULL) {
    echo '<p class="error">Please choose your financial institution</p>';
}

if (isset($_POST['name'],
$_POST['email'],
$_POST['amount'],
$_POST['currency'],
$_POST['bank'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];
    $currency = $_POST['currency'];
    $bank = $_POST['bank'];
    $dollars = $amount * $currency;

        echo '
        <div class="box">
        <h2>Hello '.$name.'</h2>
        <p>You have deposited <b>'.floor($dollars).' USD</b> into your '.$bank.' account</p>
        <p>Your confirmation email has been sent to:
        <br><b>'.$email.'</b></p>

        </div>
        ';

}

} // end server request method

?>
    
</body>
</html>