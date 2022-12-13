<?php
include('server.php');
// include('./includes/header.php');

?>

<h1>Login Page</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
    <fieldset>
        <label>Username</label>
        <input type="text" name="username" value=" <?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']) ;?>">

        <label>Password</label>
        <input type="password" name="password"> <!-- Don't want this to be sticky -->

        <button type="submit" class="btn" name="login_user">Login</button>

        <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>'" class="btn">RESET</button>

    </fieldset>

</form>