<?php

session_start();

if(isset($_SESSION['userID'])){
    $switchLogin=true;
    $switchFooter=true;
}elseif(isset($_SESSION['adminID'])){
    $switchLogin=true;
    $switchFooter=false;
}

$page_title="Contact";
include('includes/header.php');

?>
    <p>Contact us.</p>

<?php
include('includes/footer.php');
?>