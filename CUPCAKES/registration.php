<?php
/**
 * Created by PhpStorm.
 * User: crector
 * Date: 1/23/18
 * Time: 9:34 AM
 */

$page_title="Registration Form";
include('includes/header.php');

?>

<fieldset>
    <legend>Registration</legend>
<form action="processReg.php" method="post">
    <label for="fName">First Name:</label>
    <input type="text" name="fName" id="fName"/><br/>
    <label for="lName">Last Name:</label>
    <input type="text" name="lName" id="lName"/><br/>
    <label for="email">Email Address:</label>
    <input type="email" name="email" id="email"/><br/>
    <label for="userName">Username:</label>
    <input type="text" name="userName" id="userName"/><br/>
    <label for="pass">Password:</label>
    <input type="password" name="pass1" id="pass1"/><br/>
    <label for="pass">Retype Password:</label>
    <input type="password" name="pass2" id="pass2"/><br/>
    <input type="hidden" value="Date()" name="regDate" />
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <input type="submit" value="Register" id="submit"/>
</form>
</fieldset>

<?php
include('includes/footer.php');
?>