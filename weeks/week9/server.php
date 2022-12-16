<?php

// This is where the session will begin
// The session is a way to store information

// This page checks that user is registered
// Also contains error messages if reg_user is not completely filled out

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

session_start();
include('config.php');
// include('./includes/header.php');


// Server page will communicate with the database

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// LOGIC- if reg_user (registered user) is set
    // $_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post".

if(isset($_POST['reg_user'])) {
    //mysqli_real_escape_string() function escapes special characters in a string for use in an SQL query
    $first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
    $email = mysqli_real_escape_string($iConn, $_POST['email']);
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password_1 = mysqli_real_escape_string($iConn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($iConn, $_POST['password_2']);

    // Have all the fields been filled out?
    // If empty, use array_push() function
    // The array_push() function inserts one or more elements to the end of an array
    if(empty($first_name)) {
        array_push($errors, 'First name required');
    }
    if(empty($last_name)) {
        array_push($errors, 'Last name required');
    }
    if(empty($email)) {
        array_push($errors, 'Email required');
    }
    if(empty($username)) {
        array_push($errors, 'User name required');
    }
    if(empty($password_1)) {
        array_push($errors, 'Please set a password');
    }
    // LOGIC- is password_1 !== to password_2?

    if($password_1 !== $password_2) {
        array_push($errors, 'Passwords do not match');
    }

    // NOW check username and password AND selecting it from the table
    $user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";

    $result = mysqli_query($iConn,$user_check_query)or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

    $rows = mysqli_fetch_assoc($result);

    // NOW we will have an if statement AND nest two additional if statements within it.

    // LOGIC- There cannot be duplicate usernames or duplicate emails
    if($rows) {

        if($rows['username'] == $username) {
            array_push($errors,'This username already exists');
        }

        if($rows['email'] == $email) {
            array_push($errors,'This email already exists');
        }

    } // end big if statement

    // Are there errors? If so, count them

    if(count($errors) == 0 ) {
        // The MD5 (message-digest algorithm) hashing algorithm is a one-way cryptographic function that accepts a message of any length as input and returns as output a fixed-length digest value to be used for authenticating the original message.
        $password = md5($password_1);

        // Insert this information into the table

        $query = "INSERT INTO users (first_name, last_name, email, username, password) VALUE ('$first_name','$last_name','$email','$username','$password')";

        mysqli_query($iConn, $query);

        $_SESSION['username'] = $username;
        $_SESSION['success'] = $success;

        // If this query is successful we will be sent to login page
        header('Location:login.php');

    } // end if count errors



} // end if isset reg_user

// NOW we will communicate with the login page. ASK if login user is set.

if(isset($_POST['login_user'])) {
    // Connect to database, if username is set then assign to $username. same w password.
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password = mysqli_real_escape_string($iConn, $_POST['password']);

    // error message if username or pass is not entered
    if(empty($username)) {
        array_push($errors, 'Username required');
    }

    if(empty($password)) {
        array_push($errors, 'Password required');
    }

    // Count errors (We want 0 errors)
    if(count($errors) == 0 ) {
        // translating into md5 to check against database
        $password = md5($password); // NOT password_1 NOW just password

        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";

        // New variable named $results (results not result)
        // Query the connection and the results from my table. Assigning it to results
        $results = mysqli_query($iConn, $query);

        // If the number of rows is equal to 1 this means there is a username and password. Begin session.
        if(mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = $success;

            //If the above is successful, the user will be directed to index.php

            header('Location:index.php');

        } else {
            array_push($errors, 'Incorrect username or password');


        } // end else num of rows


    } // end if count errors for login


} // end if isset login_user