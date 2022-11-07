<?php
// Using forms with AND (&&)

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['comments'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];

        // if fields are empty "Fill out form"
        // if empty requires &&, no commas
        // "if" WITHIN the original "isset" (before else)

        if(empty($_POST['first_name'] &&
        $_POST['last_name'] &&
        $_POST['email'] &&
        $_POST['comments'])) {

            echo 'Please Complete Form';

        } else {
            echo $first_name;
            echo '<br>';
            echo $last_name;
            echo '<br>';
            echo $email;
            echo '<br>';
            echo $comments;
            echo '<br>';

        } // end else
    } else {                    // End isset. Form goes below

    echo '
        <form action = "" method = "post">

        <label>First Name</label>
            <input type="text" name="first_name">

        <label>Last Name</label>
            <input type="text" name="last_name">

        <label>Email</label>
            <input type="email" name="email">

        <label>Comments</label>
            <textarea name="comments"></textarea>

        <input type="submit" value="Send It">
    
        </form>

        <p><a href="">RESET</a></p>
    ';

} // end else