<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 1</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <fieldset>
        <legend>Contact Natasha</legend>

        <label>First Name</label>
        <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ?>">

        <label>Last Name</label>
        <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ?>">

        <label>Email</label>
        <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ?>">

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

        <label>Phone</label>
        <input type="tel" name="phone">

            <!-- Square brackets in name indicate an array -->

        <label>Favorite Wines</label>
        <ul>
            <li> <!-- STICKY CHECKBOX ARRAY if(isset($_POST['name']) && in_array('which value?, which array?')) -->
                 <!-- name="wines[]" this indicates an array -->
            <input type="checkbox" name="wines[]" value="cab" <?php if(isset($_POST['wines']) && in_array('cab', $wines)) ?>> Cabernet
            </li>
            <li>
            <input type="checkbox" name="wines" value="merlot" <?php if(isset($_POST['wines']) && in_array('merlot', $wines)) ?>> Merlot
            </li>
            <li>
            <input type="checkbox" name="wines" value="syrah" <?php if(isset($_POST['wines']) && in_array('syrah', $wines)) ?>> Syrah
            </li>
            <li>
            <input type="checkbox" name="wines" value="red"<?php if(isset($_POST['wines']) && in_array('red', $wines)) ?>> Red Blend
            </li>
            <li>
            <input type="checkbox" name="wines" value="malbec"<?php if(isset($_POST['wines']) && in_array('malbec', $wines)) ?>> Malbec
            </li>
        </ul>

        <label>Regions</label>
        <select name="region">
            <option value="" NULL <?php if(isset($_POST['regions']) && $_POST['regions'] == NULL) echo 'selected="unselected" ' ;?>>Select One</option>
            <option value="nw" <?php if(isset($_POST['region']) && $_POST['region'] == 'nw') echo 'selected="selected" ' ;?>>Northwest</option>
            <option value="sw" <?php if(isset($_POST['region']) && $_POST['region'] == 'sw') echo 'selected="selected" ' ;?>>Southwest</option>
            <option value="mw" <?php if(isset($_POST['region']) && $_POST['region'] == 'mw') echo 'selected="selected" ' ;?>>Midwest</option>
            <option value="ne" <?php if(isset($_POST['region']) && $_POST['region'] == 'ne') echo 'selected="selected" ' ;?>>Northeast</option>
            <option value="ec" <?php if(isset($_POST['region']) && $_POST['region'] == 'ec') echo 'selected="selected" ' ;?>>East Coast</option>

            <!-- More options to come -->
        </select>

        <!-- PHP must go between textarea tags NOT within the opening tag! -->
        <label>Comments</label>
        <textarea name="comments"><?php if(isset($_POST['comments]'])) echo htmlspecialchars($_POST['comments']) ?></textarea>

        <label>Privacy</label>
        <ul>
            <li>
            <input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'yes') echo 'checked="checked"' ;?>> I agree
            </li>
        </ul>

        <input type="submit" value="SUBMIT">
        <p><a href="">RESET</a></p>


    </fieldset>
    </form>

    <footer>
            <ul>
                <li>Copyright &copy; 2022</li>
                <li>All Rights Reserved</li>
                <li><a href="https://natashadmoore.com/it261/index.php">Web Design by Natasha Moore</a></li>
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