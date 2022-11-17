<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency 3 Sticky Form</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<!-- XSS -->
<!-- https://www.geeksforgeeks.org/how-to-prevent-xss-with-html-php/ -->

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<fieldset>

    <label>Name</label>
    <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ;?>">

    <label>Email</label>
    <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">

    <label>Amount</label>
    <input type="number" name="amount" value="<?php if(isset($_POST['amount'])) echo htmlspecialchars($_POST['amount']) ;?>">

    <label>Currency</label>
    <ul>
        <!-- Included in value -- sticky checked box -->
        <!-- Input uses checked = "checked/unchecked" instead of select-->
        <!-- If ($_POST)currency (isset)is set (&&)AND value is (ex. 0.017) echo checked = "checked" (checks the box)-->
        <li><input type="radio" name="currency" value="0.017" <?php if(isset($_POST['currency']) && $_POST['currency'] == 0.017) echo 'checked="checked"' ;?>>Rubles</li>
        <li><input type="radio" name="currency" value="0.76" <?php if(isset($_POST['currency']) && $_POST['currency'] == 0.76) echo 'checked="checked"' ;?>>CAN Dollars</li>
        <li><input type="radio" name="currency" value="1.15" <?php if(isset($_POST['currency']) && $_POST['currency'] == 1.15) echo 'checked="checked"' ;?>>Pounds</li>
        <li><input type="radio" name="currency" value="1.00" <?php if(isset($_POST['currency']) && $_POST['currency'] == 1.00) echo 'checked="checked"' ;?>>Euros</li>
        <li><input type="radio" name="currency" value="0.0074" <?php if(isset($_POST['currency']) && $_POST['currency'] == 0.0074) echo 'checked="checked"' ;?>>Yen</li>
    </ul>

    <label>Choose Your Banking Institution</label>

<!-- Select uses 'select = "selected/unselected" ' instead of checked -->

    <select name="bank">
        <option value="" NULL <?php if(isset($_POST['bank']) && $_POST['bank'] == NULL) echo 'selected="unselected" ' ;?>>Select One</option>
        <option value="boa" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'boa') echo 'selected="selected" ' ;?>>Bank of America</option>
        <option value="chase" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'chase') echo 'selected="selected" ' ;?>>Chase Bank</option>
        <option value="banner" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'banner') echo 'selected="selected" ' ;?>>Banner Bank</option>
        <option value="wells" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'wells') echo 'selected="selected" ' ;?>>Wells Fargo</option>
        <option value="becu" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'becu') echo 'selected="selected" ' ;?>>Boeing Employee Credit Union</option>
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
// Only echo if all fields are complete
// Echo message


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

if(isset($_POST['name'],
$_POST['email'],
$_POST['amount'],
$_POST['currency'],
$_POST['bank'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    // Use floatval() to indicate integer instead of string (fixes error)
    $amount = floatval($_POST['amount']);
    $currency = floatval($_POST['currency']);
    $bank = $_POST['bank'];
    $dollars = $amount * $currency;

    // If ONLY NOT empty (!empty)
    // Does not echo unless all fields are complete
    // List variables ($name) inside [] brackets with &&
    if(!empty($name && $email && $amount && $currency && $bank)) {

        echo '
        <div class="box">
        <h2>Hello '.$name.'</h2>
        <p>You have deposited <b>'.floor($dollars).' USD</b> into your '.$bank.' account</p>
        <p>Your confirmation email has been sent to:
        <br><b>'.$email.'</b></p>

        </div>
        ';
    } // end if(!empty) 

} // end isset

} // end server request method

?>
    
</body>
</html>