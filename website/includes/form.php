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
        <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']) ?>">
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