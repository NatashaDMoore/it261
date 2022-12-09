<?php

include('config.php');

// is our get set? is is isset?

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location:people.php');
        // sends to another page
}

// SELECT from table (people) WHERE people_id = id

$sql = 'SELECT * FROM people WHERE people_id = '.$id.'';

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
        $first_name = stripcslashes($row['first_name']);
        $last_name = stripcslashes($row['last_name']);
        $email = stripcslashes($row['email']);
        $birthdate = stripcslashes($row['birthdate']);
        $occupation = stripcslashes($row['occupation']);
        $blurb = stripcslashes($row['blurb']);
        $details = stripcslashes($row['details']);
    } // end while

} else { // end if num rows > 0
    $feedback = 'There is a problem';

} // end else

include('./includes/header.php');
?>

<div id="wrapper">
    <main>
        <h1>The People View Page</h1>
        <h2>Introducing <?php echo ''.$first_name.' '.$last_name.'' ;?></h2>
        <ul>
            <?php
            echo '
            <li><b>First Name: </b>'.$first_name.'</li>
            <li><b>Last Name: </b>'.$last_name.'</li>
            <li><b>Email: </b>'.$email.'</li>
            <li><b>Birthdate: </b>'.$birthdate.'</li>
            <li><b>Occupation: </b>'.$occupation.'</li>
            <li><p>'.$details.'</p></li>
            ';
            ?>
        </ul>
        <p><a href="./people.php">BACK</a></p>
    </main>
    <aside>
        <h3></h3>
        <figure>
        <img src="./images/people<?php echo $id ;?>.jpg" alt="<?php echo $first_name, $last_name ;?>">
        <figcaption>
            <?php
                echo ' '.$first_name.' '.$last_name.', '.$occupation.' ';
            ?>
        </figcaption>
        </figure>
        <p><i><?php echo $blurb ;?></i></p>
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