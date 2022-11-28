<?php

    // define variables above request method!

    $first_name_err = '';
    $last_name_err = '';
    $email_err = '';
    $gender_err = '';
    $phone_err = '';
    $wines_err = '';
    $region_err = '';
    $comments_err = '';
    $privacy_err = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    // ERROR MESSAGE if(empty)
    // assigning error messages to variables
    // cannot echo above DOCTYPE
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
        $gender_name = $_POST['gender'];
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
    $subject = 'Test Email' .date('m/d/y, h i A');
    $body = '
    Name: '.$first_name.' '.$last_name.' '.PHP_EOL.'
    Email: '.$email.' '.PHP_EOL.'
    Phone: '.$phone.' '.PHP_EOL.'
    Gender: '.$gender.' '.PHP_EOL.'

    Region: '.$region.' '.PHP_EOL.'
    Comments: '.$comments.' '.PHP_EOL.'
    Privacy: '.$privacy.' '.PHP_EOL.'
    
    ';

    mail($to, $subject, $body);
    header('Location:thx.php');

} // end isset



} // end server request method

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 2</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <fieldset>
        <legend>Contact Natasha</legend>

        <label>First Name</label>
        <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ?>">
        <span class="error"><?php echo $first_name_err  ;?></span>

        <label>Last Name</label>
        <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ?>">
        <span class="error"><?php echo $last_name_err  ;?></span>

        <label>Email</label>
        <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ?>">
        <span class="error"><?php echo $email_err  ;?></span>

        <label>Gender</label>
            <ul>
                <li>
                <input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked"' ;?>> Female
                </li>
                <li>
                <input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"' ;?>> Male
                </li>
                <li>
                <input type="radio" name="gender" value="nonbinary" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'nonbinary') echo 'checked="checked"' ;?>> Non-Binary
                </li>
            </ul>
            <span class="error"><?php echo $gender_err  ;?></span>

        <label>Phone</label>
        <input type="tel" name="phone">
        <span class="error"><?php echo $phone_err  ;?></span>

            <!-- Square brackets in name indicate an array -->

        <label>Favorite Wines</label>
        <ul>
            <li> <!-- STICKY CHECKBOX ARRAY if(isset($_POST['name']) && in_array('which value?, which array?')) -->
                 <!-- name="wines[]" this indicates an array -->
            <input type="checkbox" name="wines[]" value="cab" <?php if(isset($_POST['wines']) && in_array('cab', $wines)) echo 'checked="checked"' ?>> Cabernet
            </li>
            <li>
            <input type="checkbox" name="wines[]" value="merlot" <?php if(isset($_POST['wines']) && in_array('merlot', $wines)) echo 'checked="checked"' ?>> Merlot
            </li>
            <li>
            <input type="checkbox" name="wines[]" value="syrah" <?php if(isset($_POST['wines']) && in_array('syrah', $wines)) echo 'checked="checked"' ?>> Syrah
            </li>
            <li>
            <input type="checkbox" name="wines[]" value="red"<?php if(isset($_POST['wines']) && in_array('red', $wines)) echo 'checked="checked"' ?>> Red Blend
            </li>
            <li>
            <input type="checkbox" name="wines[]" value="malbec"<?php if(isset($_POST['wines']) && in_array('malbec', $wines)) echo 'checked="checked"' ?>> Malbec
            </li>
        </ul>
        <span class="error"><?php echo $wines_err  ;?></span>

        <label>Region</label>
        <select name="region">
            <option value="" NULL <?php if(isset($_POST['regions']) && $_POST['regions'] == NULL) echo 'selected="unselected" ' ;?>>Select One</option>
            <option value="nw" <?php if(isset($_POST['region']) && $_POST['region'] == 'nw') echo 'selected="selected" ' ;?>>Northwest</option>
            <option value="sw" <?php if(isset($_POST['region']) && $_POST['region'] == 'sw') echo 'selected="selected" ' ;?>>Southwest</option>
            <option value="mw" <?php if(isset($_POST['region']) && $_POST['region'] == 'mw') echo 'selected="selected" ' ;?>>Midwest</option>
            <option value="ne" <?php if(isset($_POST['region']) && $_POST['region'] == 'ne') echo 'selected="selected" ' ;?>>Northeast</option>
            <option value="ec" <?php if(isset($_POST['region']) && $_POST['region'] == 'ec') echo 'selected="selected" ' ;?>>East Coast</option>

            <!-- More options to come -->
        </select>
        <span class="error"><?php echo $region_err  ;?></span>

        <!-- PHP must go between textarea tags NOT within the opening tag! -->
        <label>Comments</label>
        <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']); ?></textarea>
        <span class="error"><?php echo $comments_err  ;?></span>

        <label>Privacy</label>
        <ul>
            <li>
            <input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'yes') echo 'checked="checked"' ;?>> I agree
            </li>
        </ul>
        <span class="error"><?php echo $privacy_err  ;?></span>

        <!-- SUBMIT -->
        <input type="submit" value="SUBMIT">

        <!-- RESET -->
        <input type="button" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF']  ;?>'" value="RESET">

    </fieldset>
    </form>

    <footer>
            <ul>
                <li>Copyright &copy; 2022</li>
                <li>All Rights Reserved</li>
                <li><a href="index.php">Web Design by Natasha Moore</a></li>
                <li><a id="html-checker" href="#">HTML Validation</a></li>
                <li><a id="css-checker" href="#">CSS Validation</a></li>
                </ul>
                
                <script>
                        document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
                        document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
                </script>

     </footer>

</body>
</html>