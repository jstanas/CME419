<?php
/**
 * Created by PhpStorm.
 * User: crector
 * Date: 3/17/18
 * Time: 2:50 PM
 */

function redirect_user($page="loggedin.php") {
//    $url='http://' . $_SERVER['HTTP_HOST']. dirname($_SERVER['PHP_SELF']);
//    $url=rtrim($url,'/\\');
//    $url.='/'. $page;
    $url=$page;

    //Redirect the user and complete the function
    header("Location: $url");

    //Quit the script
    exit();
}  //End of function

function checkLogin($dbc, $login='', $pass='') {
    $errors=array();
    if(!empty($login)) {
        $al=mysqli_real_escape_string($dbc, $login);
    } else {
        $errors[]="You forgot to enter your username.";
    }

    if(!empty($pass)) {
        $ap=mysqli_real_escape_string($dbc, $pass);
    } else {
        $errors[]="You forgot to enter your password.";
    }

    //check the database
    if(empty($errors)){
        if($_SESSION['access']=="admin") {
            $q = "SELECT admin_id, firstName FROM admin WHERE admin_login='$al' && admin_pass='$ap'";

            $r = mysqli_query($dbc, $q);

            if (mysqli_num_rows($r) == 1) {
                $row = mysqli_fetch_array($r, MYSQLI_ASSOC);
                return array(true, $row);
            } else {
                $errors[] = "The login information does not match those on file.";
            }
        }
        if($_SESSION['access']=="user") {
            $q2 = "SELECT user_id, first_name FROM registration WHERE user_login='$al' && user_pass='$ap'";

            $r2 = mysqli_query($dbc, $q2);

            if (mysqli_num_rows($r2) == 1) {
                $row2 = mysqli_fetch_array($r2, MYSQLI_ASSOC);
                return array(true, $row2);
            } else {
                $errors[] = "The login information does not match those on file.";
            }
        }

    }
        return array(false, $errors);

}
