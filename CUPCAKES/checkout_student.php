<?php
/**
 * Created by PhpStorm.
 * User: crector
 * Date: 4/1/18
 * Time: 8:37 PM
 */


session_start();

if(isset($_SESSION['userID'])){
    $switchLogin=true;
    $switchFooter=true;
}elseif(isset($_SESSION['adminID'])){
    $switchLogin=true;
    $switchFooter=false;
}

/*
 * Redirect to a different page in the current directory that was requested
 */
    $page_title="Order Confirmation";

    include('includes/header.php');

    // If user is logged in, grab the customer id from your registration table to populate the variable below:
//echo $_SESSION['userID'];
    if(isset($_SESSION['userID'])) {
        $cid = $_SESSION['userID'];
    }
    //$cid = 1;

//Receive the order total
    $total = $_GET['total'];
    //echo $total;

    require ('db_connect.php');

//Turn autocommit off
    mysqli_autocommit($dbc, FALSE);

/*Automatically sets the pickup date to a week after the current date
 *In reality, there would be a field on the order form that would ask them when they wanted to pick up their order.
  *This then would be passed to this page and set in the $pickUpDate variable.
     * */

$pickUpDate = date("Y-m-d H:i:s", strtotime("+1 week"));



//add the order to the orders table
    $q="INSERT INTO orders(cust_id, total) VALUES ($cid, $total)";
    $r=mysqli_query($dbc, $q);
    if(mysqli_affected_rows($dbc)==1) {
        $q2="SELECT order_id FROM orders WHERE cust_id='$cid'";
        //Need the order id:
        $orderID=mysqli_insert_id($dbc);



        //Insert order into database
        //Query is a statement template
        $q2 = "INSERT INTO order_contents(order_id, cupcake_id, size_id, quantity, price, pickup_date) VALUES (?,?,?,?,?,?)";
        $stmt=mysqli_prepare($dbc, $q2);
        if (!$stmt) {
            die('mysqli error: '.mysqli_error($dbc));
        } else {
            //echo "here it is: " . print_r($q2);
        }

        //Parses, compiles, and performs query & stores results without executing it
       mysqli_stmt_bind_param($stmt, 'iisids',$orderID, $cup_id, $cup_size, $cup_quant, $cup_price, $pickUpDate);



//        //Execute each query; count the total affected
        $affected=0;
        foreach($_SESSION['cart'] as $key => $cupID) {
            $cup_id = $cupID['id'];
            $cup_size = $cupID['size'];
            $cup_quant =$cupID['quantity'];
            $cup_price = $cupID['price'];
            mysqli_stmt_execute($stmt);
            $affected+=mysqli_stmt_affected_rows($stmt);
            //print "<p> ID: " . $cup_id . "<br/>Size:  " . $cup_size . "<br/>Quant:  " . $cup_quant . "<br/>Price:  " . $cup_price . "</p><hr/>";
        }

        //print "Affected: " . $affected;


        mysqli_stmt_close($stmt);

        //report on the success
        if($affected==count($_SESSION['cart'])) {
            //commit transaction
            mysqli_commit($dbc);
//
//            //clear the cart
            unset($_SESSION['cart']);
//
//            //Message to the customer
            echo "<p>Thank  you for your order. You will be notified when your item(s) are ready
                    to be picked up.</p>";
        } else {
//            //Rollback and report errors
            mysqli_rollback($dbc);

            echo "<p>Your order could not be processed due to a system error. You will be
                    contacted in order to have the problem fixed. We apologize for the
                    inconvenience.</p>";
//
        }
    } else {
        // Rollback and report problem
        mysqli_rollback($dbc);

        echo "<p>Your order could not be processed due to a system error.  We apologize for the inconvenience.  You will be
                    contacted in order to have the problem fixed.</p>";
    }
    mysqli_close($dbc);

 include ('includes/footer.php');







