<?php
/**
 * Created by PhpStorm.
 * User: crector
 * Date: 3/17/18
 * Time: 1:58 PM
 */

if($_SERVER['REQUEST_METHOD']=="POST"){
    $_SESSION['access']="admin";
    require('includes/loginFns.inc.php');
    require('db_connect.php');

    //check login
    list($check, $data)=checkLogin($dbc, $_POST['adminLogin'], $_POST['adminPass']);

    if($check){
        session_start();
        $_SESSION['adminID'] = $data['admin_id'];
        $_SESSION['firstName'] = $data['firstName'];

        unset($_SESSION['userID']);

        redirect_user('loggedin.php');
    } else{
        $errors = $data;
    }
    mysqli_close($dbc);
}

include('admin_login.php');

?>