<?php

// Using the $_GET global variable
// Asking for a name and an email in the form
// If it is set, great. If it is not set, show e the form

if(isset($_GET['name'],                  // if email and name have been set???
        $_GET['email'])){
            $name = $_GET['name'];      // if $_GET is set, then they will be assigned to variables $name and $email
            $email = $_GET['email'];
        } else {                        // if $_GET is not set (else), show the form. Form goes below.

            // Action stays empty forcing it to read PHP on the page. value will be what is written on the button.
            echo '
            <form action = "" method = "get">

            <label>NAME</label>
                <input type="text" name="name">
            <label>EMAIL</label>
                <input type="email" name="email">
                <input type="submit" value="confirm">

            </form>
            ';
        }
