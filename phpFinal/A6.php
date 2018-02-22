<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 2/19/2018
 * Time: 9:05 PM
 */

$page_title="Assignment Six";

$fName = $_POST['fName'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$email = $_POST['email'];

$to="crector@butler.edu";
$subject="PHP Final Assignment Six";
$body.="A new customer signed up for services:\n";
$body.="Username: $user\n";
$body.="Password: $pass\n";
$body.="Email: $email";

if($fName && $user && $pass && $email){
    $sendMail=mail($to, $subject, $body);
    if($sendMail)
    {

    }
}
?>

<link href="../styles/formStyle.css" type="text/css" rel="stylesheet"/>

<form action="A6.php" method="post">
    <label for="fName">First Name:</label>
    <input type="text" id="fName" name="fName"/><br/>
    <label for="user">Username:</label>
    <input type="text" id="user" name="user"/><br/>
    <label for="pass">Password:</label>
    <input type="password" id="pass" name="pass"/><br/>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email"/><br/>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <input type="submit" name="submit" id="submit" value="Submit"/><br/><br/>

    <?php if($_SERVER['REQUEST_METHOD']=='POST'){
        echo "Thank you " . $fName . ".  We have received your login information.  We will contact you shortly.";
    } ?>
</form>