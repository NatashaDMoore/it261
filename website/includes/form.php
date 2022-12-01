<?php 

// $first_name = '';
// $last_name = '';
// $email = '';
// $comments = '';
// $privacy = '';
// $position = '';
// $reason = '';
// $method = '';

// $first_name_err = '';
// $last_name_err = '';
// $email_err = '';
// $phone_err = '';
// $comments_err = '';
// $privacy_err = '';
// $position_err = '';
// $reason_err = '';
// $method_err = '';

// if($_SERVER['REQUEST_METHOD'] == 'POST') {

// // ERROR MESSAGE if(empty)
// // assigning error messages to variables
// if(empty($_POST['first_name'])) {
//     $first_name_err = 'Required';
// } else {
//     $first_name = $_POST['first_name'];
// }

// if(empty($_POST['last_name'])) {
//     $last_name_err = 'Required';
// } else {
//     $last_name = $_POST['last_name'];
// }

// if(empty($_POST['email'])) {
//     $email_err = 'Required';
// } else {
//     $email = $_POST['email'];
// }

// if(empty($_POST['phone'])) {
//     $phone_err = 'Required';
// } else {
//     $phone = $_POST['phone'];
// }

// if(empty($_POST['position'])) {
//     $position_err = 'Required';
// } else {
//     $position = $_POST['position'];
// }

// if(empty($_POST['reason'])) {
//     $reason_err = 'Please select a reason for contact';
// } else {
//     $reason = $_POST['reason'];
// }

// if($_POST['method'] == NULL) {
//     $method_err = 'Required';
// } else {
//     $method = $_POST['method'];
// }

// if(empty($_POST['comments'])) {
//     $comments_err = 'Required';
// } else {
//     $comments = $_POST['comments'];
// }

// if(empty($_POST['privacy'])) {
//     $privacy_err = 'Required';
// } else {
//     $privacy = $_POST['privacy'];
// }

// // function
// function my_reason($reason) {
// $return ='';

// if(!empty($_POST['reason'])) {
// // assign $my_return to implode function including $_POST['wines']
// // Single quote and comma!
// $return = implode(', ', $_POST['reason']);
// }

// // MUST return $return BEFORE the end of the function!
// return $return;

// } // end function

// if(isset($_POST['first_name'],
// $_POST['last_name'],
// $_POST['email'],
// $_POST['phone'],
// $_POST['position'],
// $_POST['reason'],
// $_POST['contact'],
// $_POST['comments'],
// $_POST['privacy'])) {

// $to = 'nmoorejunk@gmail.com';
// $subject = 'Contact Request ' .date('m/d/y, h i A');
// $body = '
// Name: '.$first_name.' '.$last_name.' '.PHP_EOL.'
// Email: '.$email.' '.PHP_EOL.'
// Phone: '.$phone.' '.PHP_EOL.'
// Gender: '.$position.' '.PHP_EOL.'
// Wines: '.my_reason($reason).' '.PHP_EOL.'
// Region: '.$contact.' '.PHP_EOL.'
// Comments: '.$comments.' '.PHP_EOL.'
// Privacy: '.$privacy.' '.PHP_EOL.'
// ';

// // assign 'from' to the $header variable and add to the mail function.
// $headers = array(
//     'From' => 'noreply@gator3401.hostgator.com'
// );

// if(!empty($first_name && $last_name && $email && $position && $reason && $contact && $comments && $privacy)) {

// mail($to, $subject, $body, $headers);
// header('Location:thnx.php');

// } // end if(!empty)

// } // end isset

// } // end server request method


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    
</body>
</html>
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

        <label>Phone</label>
        <input type="tel" name="phone" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']) ?>">
        <span class="error"><?php echo $phone_err  ;?></span>

        <label>Position</label>
            <ul>
                <li>
                <input type="radio" name="position" value="professor" <?php if(isset($_POST['position']) && $_POST['position'] == 'professor') echo 'checked="checked"' ;?>> Professor
                </li>
                <li>
                <input type="radio" name="position" value="student" <?php if(isset($_POST['position']) && $_POST['position'] == 'student') echo 'checked="checked"' ;?>> Student
                </li>
                <li>
                <input type="radio" name="position" value="admirer" <?php if(isset($_POST['position']) && $_POST['position'] == 'admirer') echo 'checked="checked"' ;?>> Admirer
                </li>
                <li>
                <input type="radio" name="position" value="other" <?php if(isset($_POST['position']) && $_POST['position'] == 'other') echo 'checked="checked"' ;?>> Other
                </li>
            </ul>
            <span class="error"><?php echo $position_err  ;?></span>

            <!-- Square brackets in name indicate an array -->

        <label>Reason for contact</label>
        <ul>
            <li> <!-- STICKY CHECKBOX ARRAY if(isset($_POST['name']) && in_array('which value?, which array?')) -->
                 <!-- name="wines[]" this indicates an array -->
            <input type="checkbox" name="reason[]" value="design" <?php if(isset($_POST['reason']) && in_array('design', $reason)) echo 'checked="checked"' ?>> Website Design
            </li>
            <li>
            <input type="checkbox" name="reason[]" value="code" <?php if(isset($_POST['reason']) && in_array('code', $reason)) echo 'checked="checked"' ?>> Coding
            </li>
            <li>
            <input type="checkbox" name="reason[]" value="football" <?php if(isset($_POST['reason']) && in_array('football', $reason)) echo 'checked="checked"' ?>> Flag Football Recruit
            </li>
            <li>
            <input type="checkbox" name="reason[]" value="party"<?php if(isset($_POST['reason']) && in_array('party', $reason)) echo 'checked="checked"' ?>> Party Invite
            </li>
        </ul>
        <span class="error"><?php echo $reason_err  ;?></span>

        <label>Preferred Contact Method</label>
        <select name="method">
            <option value="" NULL <?php if(isset($_POST['method']) && $_POST['method'] == NULL) echo 'selected="unselected" ' ;?>>Select One</option>
            <option value="email" <?php if(isset($_POST['method']) && $_POST['method'] == 'email') echo 'selected="selected" ' ;?>>Email</option>
            <option value="phone" <?php if(isset($_POST['method']) && $_POST['method'] == 'phone') echo 'selected="selected" ' ;?>>Phone</option>
            <option value="text" <?php if(isset($_POST['method']) && $_POST['method'] == 'text') echo 'selected="selected" ' ;?>>Text</option>
            <option value="pigeon" <?php if(isset($_POST['method']) && $_POST['method'] == 'pigeon') echo 'selected="selected" ' ;?>>Carrier Pigeon</option>

            <!-- More options to come -->
        </select>
        <span class="error"><?php echo $method_err  ;?></span>

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