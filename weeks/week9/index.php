<?php

session_start();

include('config.php');


// if username is not set send back to login
if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login to view this page';
    header('Location:login.php');
} //end if not isset

// unset() detroys a variable. If a globalized variable is unset() inside of a function, only the local variable is destroyed.
// LOGOUT
if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

include('./includes/header.php');
?>

<header>
<?php
// LOGIC- is our session success set?

if(isset($_SESSION['success'])) :?> <!-- colon not semicolon -->
    <div class="success">
        <h3><?php 
            echo $_SESSION['success'];
            unset($_SESSION['success']);
        ?></h3>
    </div>
<!-- end success div -->
<?php endif;?> <!-- ends if isset -->


<?php

// LOGIC- is session username set?

 if(isset($_SESSION['username'])) :?>
     <div class="welcome-logout">
       <h3>Welcome, <?= $_SESSION['username'] ?></h3> <!-- with a short tag no semicolon needed -->
       <p><a href="index.php?query='1' ">LOGOUT</a></p>
     </div>

<?php endif;?> <!-- ends if isset with html instead of curly brackets -->

</header>

<div id="wrapper">

<h2>Welcome to Your Homepage<h2>


</div>

<?php 
include('./includes/footer.php');

