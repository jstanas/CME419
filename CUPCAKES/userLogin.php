<?php

$page_title="User Login";
include('includes/header.php');

if(isset($errors) && !empty($errors)){
    echo "<h1>Error!</h1>";
    echo "<p>The following error(s) occurred:<br/>";
    foreach($errors as $msg){
        echo "- $msg<br/>";
    }
    echo "</p><p>Please try again.</p>";
}

?>

<div class="loginMain">
    <fieldset>
        <legend>User Login</legend>
    <form action="user_loginCk.php" method="POST">
        <label for="userLogin">Login:</label>
        <input type="text" name="userLogin" id="userLogin"/><br/>
        <label for="userPass">Password:</label>
        <input type="password" name="userPass" id="userPass"/><br/>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <input class="loginSubmit" type="submit" value="Login" name="login"/>
    </form>
    </fieldset>

<fieldset>
    <legend>Registration</legend>
    <form action="registration.php" method="POST">
        <p>Create New Account:</p><br/><br/>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <input class="loginSubmit" type="submit" value="Register" name="register"/>
    </form>
</fieldset>

<fieldset>
    <legend>Password Reset</legend>
    <form action="userNewPassword.php" method="POST">
        <p>Forgot Password:</p><br/><br/>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <input class="loginSubmit" type="submit" value="Reset Password" name="userNewPassword"/>
    </form>
</fieldset>
</div>

<?php
include('includes/footer.php');
?>