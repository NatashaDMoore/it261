<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <link href="css/form.css" type="text/css" rel="stylesheet">

</head>
<body>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<fieldset>

    <h2>Travel Calculator</h2>

        <label>Name</label>
        <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ;?>">

        <label>Email</label>
        <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">

        <label>Total Drive Miles</label>
        <input type="number" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']) ;?>">

        <label>Average Speed</label>
        <input type="number" name="speed" value="<?php if(isset($_POST['speed'])) echo htmlspecialchars($_POST['speed']) ;?>">

        <label>Daily Drive Time (Hours)</label>
        <input type="number" name="time" min="1" max="24" value="<?php if(isset($_POST['time'])) echo htmlspecialchars($_POST['time']) ;?>">

    <label>Gas Price</label>

        <ul>
            <li><input type="radio" name="price" value="3" <?php if(isset($_POST['price']) && $_POST['price'] == 3) echo 'checked="checked"' ;?>>$3.00</li>
            <li><input type="radio" name="price" value="3.5" <?php if(isset($_POST['price']) && $_POST['price'] == 3.5) echo 'checked="checked"' ;?>>$3.50</li>
            <li><input type="radio" name="price" value="4" <?php if(isset($_POST['price']) && $_POST['price'] == 4) echo 'checked="checked"' ;?>>$4.00</li>
        </ul>

    <label>Fuel Efficiency</label>

        <select name="fuel">
            <option value= "" NULL <?php if(isset($_POST['fuel']) && $_POST['fuel'] == NULL) echo 'selected="unselected" ' ;?>>Select One</option>
            <option value= 20 <?php if(isset($_POST['fuel']) && $_POST['fuel'] == '20') echo 'selected="selected" ' ;?>>20 MPG (Poor)</option>
            <option value= 30 <?php if(isset($_POST['fuel']) && $_POST['fuel'] == '30') echo 'selected="selected" ' ;?>>30 MPG (Average)</option>
            <option value= 40 <?php if(isset($_POST['fuel']) && $_POST['fuel'] == '40') echo 'selected="selected" ' ;?>>40 MPG (Good)</option>
            <option value= 50 <?php if(isset($_POST['fuel']) && $_POST['fuel'] == '50') echo 'selected="selected" ' ;?>>50 MPG (Great)</option>
        </select>

    <input type="submit" value="Convert">

    <p><a href="">RESET</a></p>
</fieldset>
</form>

<?php

// If empty echo error

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(empty($_POST['name'])) {
        echo '<p class="error">Please include name</p>';
    }
    
    if(empty($_POST['email'])) {
        echo '<p class="error">Please include email</p>';
    }
    
    if(empty($_POST['miles'])) {
        echo '<p class="error">Please include miles per day</p>';
    }
    
    if(empty($_POST['speed'])) {
        echo '<p class="error">Please include average speed</p>';
    }
    
    if(empty($_POST['time'])) {
        echo '<p class="error">Please include daily drive time</p>';
    }

    if(empty($_POST['price'])) {
        echo '<p class="error">Please select gas price</p>';
    }

    // Select option: if() == NULL instead of if(empty())

    if($_POST['fuel'] == NULL) {
        echo '<p class="error">Please select fuel efficiency</p>';
    }

// Assign variables

if(isset($_POST['name'],
$_POST['email'],
$_POST['miles'],
$_POST['speed'],
$_POST['time'],
$_POST['price'],
$_POST['fuel'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    // Use floatval() to indicate integer instead of string (fixes error)
    $miles = floatval($_POST['miles']);
    $speed = floatval($_POST['speed']);
    $time = floatval($_POST['time']);
    $price = floatval($_POST['price']);
    $fuel = $_POST['fuel'];

    $time_total = $miles/$speed;
    $days = $time_total/$time;
    $gallons = $miles/$fuel;
    $cost = $gallons*$price;

    $nice_cost = number_format($cost,2);
    $nice_gallons = number_format($gallons);
    $nice_time_total = number_format($time_total);
    $nice_days = number_format($days,2);

        // If ONLY NOT empty (!empty)
    // Does not echo unless all fields are complete
    // List variables ($name) inside [] brackets with &&
    if(!empty($name && $email && $miles && $speed && $time && $price && $fuel)) {

        echo '
        <div class="box">
        <h3>Hello '.$name.'</h3>
        <p>Your trip will total '.$nice_time_total.' hours and take '.$nice_days.' days.</p>
        <p>You will use '.$nice_gallons.' gallons of gas, costing you $'.$nice_cost.'.</p>

        </div>
        ';
    } // end if(!empty) 
} // end isset

} // end server request


// type = text
// type = number
// type = email
// select-option
// radio
// submit

// Name
// Miles
// Price
// Efficiency
?>

</body>
</html>