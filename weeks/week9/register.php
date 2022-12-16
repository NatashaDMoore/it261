<?php
include('server.php');
include('./includes/header.php');
?>
<div id="wrapper">
<h1>Register</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>
    <label>First Name</label>
    <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ;?>">

    <label>Last Name</label>
    <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ;?>">

    <label>Email</label>
    <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">

    <label>User Name</label>
    <input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']) ;?>">

    <label>Password</label>
    <input type="password" name="password_1" value="<?php if(isset($_POST['password_1'])) echo htmlspecialchars($_POST['password_1']) ;?>">

    <label>Confirm Password</label>
    <input type="password" name="password_2" value="<?php if(isset($_POST['password_2'])) echo htmlspecialchars($_POST['password_2']) ;?>">

    <button type="submit" name="reg_user" class="btn">Register</button>

    <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>'" class="btn">Reset</button>
    <!-- window.location.href returns the href (URL) of the current page -->
    <!-- The $_SERVER[“PHP_SELF”] is a super global variable that returns the filename of the currently executing script. It sends the submitted form data to the same page, instead of jumping on a different page. -->

    <?php include('errors.php'); ;?>

</fieldset>
</form>
<p>Already have an account?</p>
<p><a href="login.php">Login</a></p>
</div>
<?php
include('./includes/footer.php');