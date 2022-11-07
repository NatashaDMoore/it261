<?php

if(isset($_POST['name'],
 $_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
                                    // $_GET global variable will display in the browser window BUT $_POST will not. 
                                    // We must echo the data for $_POST
    echo $name;
    echo '<br>';
    echo $email;
} else {                            // Include single quote for HTML when building <form>
                                    // Action will remain empty and method will be $_POST
                                    // Forms always need a method. We will be using post
    echo '
    <form action = "" method = "post">

    <label>NAME</label>
        <input type="name" name="name>
    <label>EMAIL</label>
        <input type="email" name="email">
        <input type="submit" value="Send It">
    
    </form>
    ';
}