<?php
$password = "123456"; //Change to whatever you want your password to be

if(isset($_POST['submit'])){
    if($_POST['password'] == $password){
        header("Location: create_user.php");
        die();
    } else {
        echo "sorry the username and password were incorrect";
    }
} else { //IF THE FORM WAS NOT SUBMITTED
//SHOW FORM
    ?><form method="post">
        Password: <input type="password" name="password" />
        <input type='submit' name='submit' />
    </form><?php
}


?>