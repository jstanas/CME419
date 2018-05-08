<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    $_SESSION['access']="user";
    require('includes/loginFns.inc.php');
    require('db_connect.php');

    //check login
    list($check, $data)=checkLogin($dbc, $_POST['userLogin'], $_POST['userPass']);

    if($check){
        session_start();
        $_SESSION['userID'] = $data['user_id'];
        $_SESSION['fname'] = $data['first_name'];

        unset($_SESSION['adminID']);

        redirect_user('loggedin.php');
    } else{
        $errors = $data;
    }
    mysqli_close($dbc);
}

include('userLogin.php');

?>