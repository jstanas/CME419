<?php

session_start();

if(isset($_SESSION['userID'])){
    $switchLogin=true;
    $switchFooter=true;
}elseif(isset($_SESSION['adminID'])){
    $switchLogin=true;
    $switchFooter=false;
}

$page_title="Update Password";
include('includes/header.php');

?>

<fieldset>
    <legend>Update Password</legend>
    <form action="processPass.php" method="POST">
        <label for="userName">Username:</label>
        <input type="text" name="userName" id="userName"/><br/>
        <label for="pass">New Password:</label>
        <input type="password" name="pass1" id="pass1"/><br/>
        <label for="pass">Retype New Password:</label>
        <input type="password" name="pass2" id="pass2"/><br/>
        &emsp;&emsp;&emsp;&emsp;&emsp;
        <input type="submit" value="Update Password" id="submit"/>
    </form>
</fieldset>

<?php
include('includes/footer.php');
?>