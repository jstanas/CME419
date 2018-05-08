<?php
/**
 * Created by PhpStorm.
 * User: crector
 * Date: 3/17/18
 * Time: 1:58 PM
 */

session_start();

if(isset($_SESSION['userID'])){
    $switchLogin=true;
    $switchFooter=true;
}elseif(isset($_SESSION['adminID']) && !isset($_SESSION['userID'])){
    $switchLogin=true;
    $switchFooter=false;
}

$page_title="Admin Login";
include('includes/header.php');

if(isset($_SESSION['adminID']) && !isset($_SESSION['userID'])){
    echo "You may now access the <a href='addCupcake.php'><b>Add Cupcakes</b></a> form.";
}


if(isset($errors) && !empty($errors)){
    echo "<h1>Error!</h1>";
    echo "<p>The following error(s) occurred:<br/>";
    foreach($errors as $msg){
        echo "- $msg<br/>";
    }
    echo "</p><p>Please try again.</p>";
}

?>

<fieldset>
    <legend>Admin Login</legend>
<form action="admin_loginCk.php" method="POST">
<label for="adminLogin">Login:</label>
<input type="text" name="adminLogin" id="adminLogin"/><br/>
<label for="adminPass">Password:</label>
<input type="password" name="adminPass" id="adminPass"/><br/>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<input type="submit" value="Login" name="login"/>
</form>
</fieldset>

<?php
include('includes/footer.php');
?>