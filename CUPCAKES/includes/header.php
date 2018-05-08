<?php
session_id('cart');
session_start();

$loginInfo="userLogin.php";
$loginText="Login";
$loginStyle="float:right; background-color:#26dc81";

if($switchLogin){
    $loginInfo="logout.php";
    $loginText="Logout";
    $loginStyle="float:right; background-color:#ff4b4b;";
}

//$logInfo="<li style=\"float:right\"><a class=\"active\" href=\"$loginInfo\">$loginText</a></li>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $page_title; ?></title>
    <link href="includes/cupcakeStyles.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a class="link" href="index.php">Home</a></li>
            <li><a class="link" href="cupcakesList.php">Cupcakes</a></li>
            <li><a class="link" href="viewCart.php">Order</a></li>
            <li><a class="link" href="contact.php">Contact</a></li>
            <li><a class="link" href="admin_login.php">Admin</a></li>
            <li style="<?php echo $loginStyle ?>"><a class="active" href="<?php echo $loginInfo?>"><?php echo $loginText?></a></li>
        </ul>
    </nav>
</header>
<main>