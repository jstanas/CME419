<?php
/**
 * Created by PhpStorm.
 * User: crector
 * Date: 4/11/18
 * Time: 4:25 PM
 */
session_start();

if(isset($_SESSION['userID'])){
    $switchLogin=true;
    $switchFooter=true;
}elseif(isset($_SESSION['adminID'])){
    $switchLogin=true;
    $switchFooter=false;
}

$page_title="Logged In!";
include('includes/header.php');

if(isset($_SESSION['userID']) && !isset($_SESSION['adminID'])){
    echo "<h3>Welcome back, " . $_SESSION['fname'] . "!</h3>";
    echo "<br/>Get started <a href=\"cupcakesList.php\"><b>here</b>.</a>";
}elseif(isset($_SESSION['adminID']) && !isset($_SESSION['userID'])){
    echo "<h3>You are now logged in.  Welcome back, " . $_SESSION['firstName'] . "!</h3>";
    echo "<br/>You may now access the <a href='addCupcake.php'><b>Add Cupcakes</b></a> form.";
}

include('includes/footer.php');