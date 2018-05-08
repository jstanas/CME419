<?php

session_start();

if(isset($_SESSION['userID'])){
    $switchLogin=true;
    $switchFooter=true;
}elseif(isset($_SESSION['adminID'])){
    $switchLogin=true;
    $switchFooter=false;
}

$page_title="Access Failed";
include('includes/header.php');

echo "<h3>You do not have access to this content.</h3>";

include('includes/footer.php');
?>