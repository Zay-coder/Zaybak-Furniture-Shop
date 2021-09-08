<?php
include('functions.php');
?>


<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="header" style="background-color: #45ccb8">
    <h2>Register</h2>
</div>
<form method="post" action="register.php">
    <?php echo display_error(); ?>

    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username=!empty($_POST['username']) ? $_POST['username'] : ''; ?>">
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $email=!empty($_POST['email']) ? $_POST['email'] : ''; ?>">
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">
    </div>
    <div class="input-group">
        <label>Confirm password</label>
        <input type="password" name="password_2">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="register_btn" style="background-color: #45ccb8">Register</button>
    </div>
    <p>
        Already a member? <a href="login.php">Sign in</a>
    </p>
    <br>
    <p>
        Are you an admin? <a href="admin/secure.php">Sign up for admins</a>
    </p>
</form>
</body>
</html>