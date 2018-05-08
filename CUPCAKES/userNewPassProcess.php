<?php

session_start();

if(isset($_SESSION['userID'])){
    $switchLogin=true;
    $switchFooter=true;
}elseif(isset($_SESSION['adminID'])){
    $switchLogin=true;
    $switchFooter=false;
}

$page_title="Password Reset Process";
include('includes/header.php');

if($_SERVER['REQUEST_METHOD']=='POST') {
    require('db_connect.php');

    $checkFirstName = $_POST['fName'];
    $checkLastName = $_POST['lName'];
    $checkEmail = $_POST['email'];

    $q = "SELECT first_name, last_name, email FROM registration WHERE first_name='$checkFirstName' && last_name='$checkLastName' && email='$checkEmail'";
    $r = mysqli_query($dbc, $q);
//$q2 = "SELECT last_name FROM registration WHERE last_name = '$checkLastName'";
//$r2 = mysqli_query($dbc, $q2);
//$q3 = "SELECT email FROM registration WHERE email = '$checkEmail'";
//$r3 = mysqli_query($dbc, $q3);

    $readyToSend = false;

    if (!empty($_POST['fName']) && !empty($_POST['lName']) && !empty($_POST['email'])) {
        if (mysqli_num_rows($r) != 0) {
            echo "Your credentials match a database record.  A password reset link has been emailed to you.<br/>";
            $fName = $_POST['fName'];
            $lName = $_POST['lName'];
            $email = $_POST['email'];
            $readyToSend=true;
        } else {
            echo "The credentials do not match database records.";
            echo "  Return to <a href=\"userNewPassword.php\"><b>Password Reset page</b>.</a><br/>";
        }
    } else {
        echo "You must enter a first name, last name, and email address.";
        echo "  Return to <a href=\"userNewPassword.php\"><b>Password Reset page</b>.</a><br/>";
    }

    if ($readyToSend) {

        $q = "SELECT user_login FROM registration WHERE first_name='$fName' && last_name='$lName' && email='$email'";
        $r = mysqli_query($dbc, $q);
        if($r) {
            $row = mysqli_fetch_array($r, MYSQLI_NUM);
            $username = $row[0];
        }
        $q2 = "SELECT email FROM registration WHERE user_login='$username'";
        $r2 = mysqli_query($dbc, $q2);
        if($r2) {
            $row2 = mysqli_fetch_array($r2, MYSQLI_NUM);
            $email = $row2[0];
        }

        $to = "$email";
        $subject = "Password Reset";
        $body  = "Hello $fName,\n\n";
        $body .= "Username: $username\n\n";
        $body .= "Click the link to update your password.\n\nhttps://blue.butler.edu/~jstanasz/CME419/CUPCAKES/userUpdatePassword.php";

        if ($username && $email) {
            $sendMail = mail($to, $subject, $body);
            if ($sendMail) {

            }
        }
    }
    mysqli_close($dbc);
}


include('includes/footer.php');
?>