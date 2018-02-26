<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 2/25/2018
 * Time: 10:18 PM
 */

$sports = array (
    "IH" => "Ice Hockey",
    "SB" => "Snowboarding",
    "SS" => "Speed Skating",
    "CL" => "Curling",
    "BO" => "Bobsleigh");

function display($sports){
    echo "Oh, " . $sports["IH"] . "?  I love watching " . $sports["IH"] . "!";
    echo "<br/><br/>Oh, " . $sports["SB"] . "?  I love watching " . $sports["SB"] . "!";
    echo "<br/><br/>Oh, " . $sports["SS"] . "?  I love watching " . $sports["SS"] . "!";
    echo "<br/><br/>Oh, " . $sports["CL"] . "?  I love watching " . $sports["CL"] . "!";
    echo "<br/><br/>Oh, " . $sports["BO"] . "?  I love watching " . $sports["BO"] . "!";
}
?>

<link href="../styles/formStyle.css" type="text/css" rel="stylesheet"/>

<form action="A9.php" method="post">
    <input type="submit" name="submit" id="submit" value="Display Sports"/><br/><br/>

    <?php if($_SERVER['REQUEST_METHOD']=='POST'){
        display($sports);
    } ?>
</form>
