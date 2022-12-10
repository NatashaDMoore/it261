<?php

include('config.php');

// is our get set? is is isset?

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location:film.php');
        // sends to another page
}

// SELECT from table (people) WHERE people_id = id

$sql = 'SELECT * FROM film WHERE film_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
// created a variable ($iConn) and assigned the mysqli() function to it.
// the function connects to my database using credentials.php included in the config.php file which is included above.
// OR... if we cannot connect to the database... we DIE

$result = mysqli_query($iConn,$sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));
// query(what DB?, What table?);
// OR... error

// We are asking if the number of rows is greater than 0
if(mysqli_num_rows($result) >0) {

    while($row = mysqli_fetch_assoc($result)) {
        $title = stripcslashes($row['title']);
        $year = stripcslashes($row['year']);
        $director1 = stripcslashes($row['director1']);
        $director2 = stripcslashes($row['director2']);
        $stars1 = stripcslashes($row['stars1']);
        $stars2 = stripcslashes($row['stars2']);
        $stars3 = stripcslashes($row['stars3']);
        $plot = stripcslashes($row['plot']);
    } // end while

} else { // end if num rows > 0
    $feedback = 'There is a problem';

} // end else

include('./includes/header.php');
?>

<div id="wrapper">
    <h1>Film Details</h1>
    <main>
        <h2><?php echo ''.$title.'' ;?></h2>
        <ul>
            <?php
            echo '
            <li><b>Directed by:  </b>'.$director1.''.$director2.'</li>
            <li><b>Starring:  </b>'.$stars1.''.$stars2.''.$stars3.'</li>
            <li><b>Year:  </b>'.$year.'</li>
            <li><b>Summary: </b><br><p>'.$plot.'</p></li>
            ';
            ?>
        </ul>
        <p><a href="./film.php">RETURN</a></p>
    </main>
    <aside>
        <figure>
            <video width="560" height="480" controls autoplay>
                <source src="./images/video<?php echo $id ;?>.mp4" type="video/mp4">
                Your browser does not support this video.
            </video>
        </figure>
    </aside>


<?php
// We must now release the server
@mysqli_free_result($result); 
// $result is the queri for our server connection ($iConn)

// Now close the connection
@mysqli_close($iConn); // close connection to server
?>

    </div>

<?php
    include('./includes/footer.php');
?>