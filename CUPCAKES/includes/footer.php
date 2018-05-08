<?php
$loginInfo="userLogin.php";
$loginText="Login";

if($switchLogin && $switchFooter){
    $loginInfo="logout.php";
    $loginText="Logout";

    $cartView="<li><a href=\"viewCart.php\">Order</a></li>";
    $pastOrders="<li><a href=\"userPastOrders.php\">Past Orders</a></li>";
    $changePass="<li><a href=\"userNewPassword.php\">Change Password</a></li>";
    $logInfo="<li> <a href=\"$loginInfo\">$loginText</a></li>";
    $contact="<li><a href=\"contact.php\">Contact</a></li>";

    $home="";
    $cupPage="";
    $orderPage="";
    $contactPage="";
    $adminPage="";
}
else {
    $home = "<li><a class=\"link\" href=\"index.php\">Home</a></li>";
    $cupPage = "<li><a class=\"link\" href=\"cupcakesList.php\">Cupcakes</a></li>";
    $orderPage = "<li><a class=\"link\" href=\"viewCart.php\">Order</a></li>";
    $contactPage = "<li><a class=\"link\" href=\"contact.php\">Contact</a></li>";
    $adminPage = "<li><a class=\"link\" href=\"admin_login.php\">Admin</a></li>";

    $cartView="";
    $pastOrders="";
    $changePass="";
    $logInfo="";
    $contact="";
}

?>

</main>
<footer>
<ul>
    <?php echo $home ?>
    <?php echo $cupPage ?>
    <?php echo $orderPage ?>
    <?php echo $contactPage ?>
    <?php echo $adminPage ?>

    <?php echo $cartView ?>
    <?php echo $pastOrders ?>
    <?php echo $changePass ?>
    <?php echo $logInfo ?>
    <?php echo $contact ?>
</ul>
</footer>
</body>
</html>