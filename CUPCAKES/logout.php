<?php
/**
 * Created by PhpStorm.
 * User: crector
 * Date: 4/11/18
 * Time: 4:25 PM
 */

$page_title="Logging Out";
include('includes/header.php');
if(!isset($_SESSION['adminID']) && !isset($_SESSION['userID']) ) {
    require('includes/loginFns.inc.php');
    redirect_user('cupcakesList.php');
} elseif (isset($_SESSION['adminID']))  {
    unset($_SESSION['adminID']);
    echo "<h1>You are logged out.</h1><br/><p>Thank you, " . $_SESSION['firstName'] . ", for visiting. Please come back soon!</p>";
} elseif(isset($_SESSION['userID'])) {
    session_unset();
    session_destroy();
    echo "<h1>You are logged out.</h1><br/><p>Thank you for visiting. Please come back soon!</p>";
}

include('includes/footer.php');