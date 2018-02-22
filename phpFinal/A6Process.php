<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 2/19/2018
 * Time: 9:13 PM
 */

$fName = $_POST['fName'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$email = $_POST['email'];

$to="jstanasz@butler.edu";
$subject="PHP Final Assignment Six";
$body="First Name: $fName\n";
$body.="Username: $user\n";
$body.="Password: $pass\n";
$body.="Email: $email";

if($fName && $user && $pass && $email){
    $sendMail=mail($to, $subject, $body);
    if($sendMail)
    {
        echo "<p>A new customer signed up for services:</p>";
        echo "Username: $user<br/>";
        echo "Password: $pass<br/>";
        echo "Email: $email<br/>";
    }
} else{
    echo "nay";
}
?>