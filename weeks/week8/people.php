<?php

include('config.php');
include('./includes/header.php');

$sql = 'SELECT * FROM people';
// must now connect to database

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
// created a variable ($iConn) and assigned the mysqli() function to it.
// the function connects to my database using credentials.php included in the config.php file which is included above.
// OR... if we cannot connect to the database... we DIE


$result = mysqli_queri($iConn,$sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));
// query(what DB?, What table?);
// OR... error


// We are asking if the number of rows is greater than 0
if(mysqli_num_rows($result) >0) {
    // read the rows using a 'while loop'
    while($row = mysqli_fetch_assoc($result)) {
        // $result is the row
        // assoc refers to the associative array that makes up the row

        echo '
        <h2>Information About: '.$row['first_name'].'</h2>
        <ul>
            <li><b>First Name:</b>'.$row['first_name'].'</li>
            <li><b>Last Name:</b>'.$row['last_name'].'</li>
            <li><b>Birthdate:</b>'.$row['birthdate'].'</li>
        </ul>
        <p><a href="people-view.php?id='.$row['people_id'].' ">More information about '.$row['first_name'].'</a></p>
        
        ';

    } // end while


} else { // end if number of rows is greater than 0

echo 'Nobody\'s home';

} // end else



// We must now release the server

@mysqli_free_result($result); // $result is the queri for our server connection ($iConn)

// Now close the connection

@mysqli_close($iConn); // close connection to server

?>

<aside>
    <h3>Random Images</h3>

</aside>

<?php
include('./includes/footer.php');