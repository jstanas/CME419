<?php

session_start();

if(isset($_SESSION['userID'])){
    $switchLogin=true;
    $switchFooter=true;
}elseif(isset($_SESSION['adminID'])){
    $switchLogin=true;
    $switchFooter=false;
}

$page_title="Password Reset";
include('includes/header.php');

?>
<fieldset>
    <legend>Password Reset</legend>
    <form action="userNewPassProcess.php" method="POST">
        <label for="fName">First Name:</label>
        <input type="text" name="fName" id="fName"/><br/>
        <label for="lName">Last Name:</label>
        <input type="text" name="lName" id="lName"/><br/>
        <label for="email">Email Address:</label>
        <input type="email" name="email" id="email"/><br/>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <input type="submit" value="Reset Password" id="submit"/>
    </form>
</fieldset>

<?php
include('includes/footer.php');
?>