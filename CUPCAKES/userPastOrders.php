<?php

session_start();

if(isset($_SESSION['userID'])){
    $switchLogin=true;
    $switchFooter=true;
}elseif(isset($_SESSION['adminID'])){
    $switchLogin=true;
    $switchFooter=false;
}

$page_title="Past Orders";
include ('includes/header.php');

require('db_connect.php');

if(isset($_SESSION['userID'])) {
    $uid = $_SESSION['userID'];
}

$q = "SELECT order_id, cust_id, total, order_date FROM orders WHERE cust_id='$uid'";
$r = mysqli_query($dbc, $q);

while($r=mysqli_fetch_array($r, MYSQLI_ASSOC)){
    echo "<b>Past Orders</b><br/><br/>";
    echo "Order ID: " . $r['order_id'] . "<br/>";
    echo "Customer ID: " . $r['cust_id'] . "<br/>";
    echo "Total Cost: $" . $r['total'] . "<br/>";
    echo "Order Date: " . $r['order_date'];
}

include('includes/footer.php');

?>