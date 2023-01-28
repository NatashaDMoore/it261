<?php

include('config.php');
include('./includes/header.php');


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<!-- wrapper -->
<div id="wrapper">
<h1>Independent Films</h1>
<main>
<?php

$sql = 'SELECT * FROM film';
// must now connect to database

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
// created a variable ($iConn) and assigned the mysqli() function to it.
// the function connects to my database using credentials.php included in the config.php file which is included above.
// OR... if we cannot connect to the database... we DIE


$result = mysqli_query($iConn,$sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));
// query(what DB?, What table?);
// OR... error


// We are asking if the number of rows is greater than 0
if(mysqli_num_rows($result) >0) {
    
    // read the rows using a 'while loop'
    while($row = mysqli_fetch_assoc($result)) {
        // $result is the row
        // assoc refers to the associative array that makes up the row

        echo '
        <h2>'.$row['title'].'</h2>
        <ul>
            <li><b>Directed by: </b>'.$row['director1'].''.$row['director2'].'</li>
            <li><b>Starring: </b>'.$row['stars1'].''.$row['stars2'].''.$row['stars3'].'</li>
            <li>
            <p><a href="film-details.php?id='.$row['film_id'].'">DETAILS</a></p>
            </li>
        </ul>        
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
</main>
<aside>
<?php
$poster[0] = 'poster1';
$poster[1] = 'poster2';
$poster[2] = 'poster3';
$poster[3] = 'poster4';
$poster[4] = 'poster5';
$poster[5] = 'poster6';

$i = rand(0,5);

$poster_image = ''.$poster[$i].'.jpg';

echo '<img src="./images/'.$poster_image.'" alt="'.$poster[$i].'">';
?>
</aside>

</div>

<!-- end wrapper -->
<div class="sock"></div>
<?php
include('./includes/footer.php');