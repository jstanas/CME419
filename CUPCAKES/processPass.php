<?php

$page_title="Password Process";
include('includes/header.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
    require('db_connect.php');

    $pass1len=strlen($_POST['pass1']);
    $pass2len=strlen($_POST['pass2']);
    $checkUsername=$_POST['userName'];

    $q = "SELECT user_login FROM registration WHERE user_login = '$checkUsername'";
    $r = mysqli_query($dbc, $q);

    if(!empty($_POST['userName'])){
        if(mysqli_num_rows($r) != 0){
            $userName=$_POST['userName'];
        }
        else{
            echo "Your username is incorrect.<br/>";
        }
    } else{
        echo "You must enter a username.<br/>";
    }
    if(!empty($_POST['pass1']) && !empty($_POST['pass2'])){
        if($_POST['pass1'] != $_POST['pass2']) {
            echo "Your passwords must match.<br/>";
        }
        elseif(($pass1len < 6 || $pass1len > 12) && ($pass2len < 6 || $pass2len > 12)){
            echo "Your passwords must be between 6-12 characters.<br/>";
        }
        else{
            $pass1=$_POST['pass1'];
            $pass2=$_POST['pass2'];
        }
    } else{
        echo "You must enter a password.<br/>";
    }
    //echo $userName .  "   " . $pass1 . " " . $pass2;

    $readyToCommit=false;

    if($userName && $pass1 && $pass2){
        $readyToCommit=true;
    }
    if($readyToCommit) {
        mysqli_autocommit($dbc, false);
        $flag = true;
        $q = "UPDATE registration SET user_pass = '$pass1' WHERE user_login='$userName'";
        $r = mysqli_query($dbc, $q);
        if (!$r) {
            $flag = false;
            echo "Password update query: " . mysqli_error($dbc);
        }

        if ($flag) {
            mysqli_commit($dbc);
            echo "Your password has been updated.";
        } else {
            mysqli_rollback($dbc);
            echo "All queries were rolled back.";
        }

        mysqli_close($dbc);

    }

}

include('includes/footer.php');
?>