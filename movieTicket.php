<?php
/**
 * Created by PhpStorm.
 * User: jstanasz
 * Date: 2/15/18
 * Time: 11:50 AM
 */

$page_title="Movie Ticket Form";
include('includes/header.html');

function display($tCost){
    echo "Your total ticket cost is " . $tCost . ".";
}

if($_SERVER['REQUEST_METHOD']=='POST') {
    $adult = $_POST['adult'];
    $child = $_POST['child'];
    $senior = $_POST['senior'];

    function ticCalc($ticQuantity, $price)
    {
        $total = $ticQuantity * $price;
        return $total;
    }

    $adultResult = ticCalc($adult, 7);
    $adultResult2 = "$" . number_format($adultResult, 2);

    $childResult = ticCalc($child, 5);
    $childResult2 = "$" . number_format($childResult, 2);

    $seniorResult = ticCalc($senior, 6);
    $seniorResult2 = "$" . number_format($seniorResult, 2);

    $totalCost = $adultResult + $childResult + $seniorResult;
    $totalCost = "$" . number_format($totalCost, 2);
}
?>

<form action="movieTicket.php" method="post">
    <p><b>Tickets Price &emsp;&emsp;&emsp;&emsp;Quantity</b></p>
    <label for="adult">Adult: $7.00</label>
    <input type="number" id="adult" name="adult" value="<?php if(isset($adult)){echo $adult;} ?>"/><?php echo $adultResult2; ?><br/>
    <label for="child">Child: $5.00</label>
    <input type="number" id="child" name="child" value="<?php if(isset($child)){echo $child;} ?>"/><?php echo $childResult2; ?><br/>
    <label for="senior">Senior: $6.00</label>
    <input type="number" id="senior" name="senior" value="<?php if(isset($senior)){echo $senior;} ?>"/><?php echo $seniorResult2; ?><br/>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <input type="submit" name="submit" id="submit" value="Submit Query"/><br/><br/>

    <?php if($_SERVER['REQUEST_METHOD']=='POST'){
        $displayCost = display($totalCost);
    } ?>

</form>

<?php
include("includes/footer.html");
?>