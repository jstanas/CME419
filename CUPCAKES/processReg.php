<?php

$page_title="Registration Process";
include('includes/header.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
    require('db_connect.php');

    $pass1len=strlen($_POST['pass1']);
    $pass2len=strlen($_POST['pass2']);
    $checkEmail=substr($_POST['email'], -4, -2);
    $checkEmail2=strpos($checkEmail, '.', -0);
    $checkUsername=$_POST['userName'];

    $q = "SELECT user_login FROM registration WHERE user_login = '$checkUsername'";
    $r = mysqli_query($dbc, $q);

    if(!empty($_POST['fName'])){
        $fName=$_POST['fName'];
    } else{
        echo "You must enter a first name.";
        echo "  Return to <a href=\"registration.php\"><b>Registration Page</b>.</a><br/>";
    }
    if(!empty($_POST['lName'])){
        $lName=$_POST['lName'];
    } else{
        echo "<br/>You must enter a last name.";
        echo "  Return to <a href=\"registration.php\"><b>Registration Page</b>.</a><br/>";
    }
    if(!empty($_POST['email'])) {
        if($checkEmail2 != ".") {
            echo "<br/>You must include a . in your email address before the TLD.  Ex. test@butler.edu";
            echo "  Return to <a href=\"registration.php\"><b>Registration Page</b>.</a><br/>";
        }
        else{
            $email = $_POST['email'];
        }
    } else{
        echo "<br/>You must enter an email address.";
        echo "  Return to <a href=\"registration.php\"><b>Registration Page</b>.</a><br/>";
    }
    if(!empty($_POST['userName'])){
        if(mysqli_num_rows($r) != 0){
            echo "<br/>This username already exists.";
            echo "  Return to <a href=\"registration.php\"><b>Registration Page</b>.</a><br/>";
        }
        else{
            $userName=$_POST['userName'];
        }
    } else{
        echo "<br/>You must enter a username.";
        echo "  Return to <a href=\"registration.php\"><b>Registration Page</b>.</a><br/>";
    }
    if(!empty($_POST['pass1']) && !empty($_POST['pass2'])){
        if($_POST['pass1'] != $_POST['pass2']) {
            echo "<br/>Your passwords must match.";
            echo "  Return to <a href=\"registration.php\"><b>Registration Page</b>.</a><br/>";
        }
        elseif(($pass1len < 6 || $pass1len > 12) && ($pass2len < 6 || $pass2len > 12)){
            echo "<br/>Your passwords must be between 6-12 characters.";
            echo "  Return to <a href=\"registration.php\"><b>Registration Page</b>.</a><br/>";
        }
        else{
            $pass1=$_POST['pass1'];
            $pass2=$_POST['pass2'];
        }
    } else{
        echo "<br/>You must enter a password.";
        echo "  Return to <a href=\"registration.php\"><b>Registration Page</b>.</a><br/>";
    }
    $regDate=$_POST['regDate'];
    $regDate=date("Y-m-d H:i:s");
    //echo $fName . "   " . $lName . "   " . $email . "   " . $userName .  "   " . $pass1 . " " . $pass2;

    $readyToCommit=false;

    if($fName && $lName && $email && $userName && $pass1 && $pass2){
        $readyToCommit=true;
    }
    if($readyToCommit) {
        mysqli_autocommit($dbc, false);
        $flag = true;
        $q = "INSERT INTO registration(first_name, last_name, email, user_login, user_pass, reg_date) VALUES ('$fName', '$lName', '$email', '$userName', '$pass1', '$regDate')";
        $r = mysqli_query($dbc, $q);
        if (!$r) {
            $flag = false;
            echo "First insert query: " . mysqli_error($dbc);
        }

        $q2 = "SELECT user_id FROM registration WHERE first_name='$fName'";
        $r2 = mysqli_query($dbc, $q2);
        if(!$r2){
            $flag=false;
            echo "Couldn't get ID" . mysqli_error($dbc);
        } else{
            $row2=mysqli_fetch_array($r2, MYSQLI_ASSOC);
            $newUserID=$row2['user_id'];
        }

        if ($flag) {
            mysqli_commit($dbc);
            echo "All queries were executed successfully.";
            require('includes/loginFns.inc.php');
            redirect_user("confirmation.php");
        } else {
            mysqli_rollback($dbc);
            echo "All queries were rolled back.";
        }

        mysqli_close($dbc);

    }

}

include('includes/footer.php');
?>