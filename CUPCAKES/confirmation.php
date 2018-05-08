<?php

session_start();

if(isset($_SESSION['userID'])){
    $switchLogin=true;
    $switchFooter=true;
}elseif(isset($_SESSION['adminID'])){
    $switchLogin=true;
    $switchFooter=false;
}

$page_title="Registration Successful";
include('includes/header.php');

echo "<h3>Thanks for registering with us.  Create your first cupcake order today!</h3>";

include('includes/footer.php');
?>