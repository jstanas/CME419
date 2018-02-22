<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 2/19/2018
 * Time: 8:50 PM
 */

$page_title="Assignment Five";

$sports = array (
    "SS" => "Speed Skating",
    "BS" => "Bobsleigh",
    "SB" => "Snowboarding",
    "CL" => "Curling",
    "HK" => "Hockey",
    "LG" => "Luge");
?>

<style>div{margin:10px;}</style>

<div>
<h3>Normal Order</h3>
<?php
foreach($sports as $key => $value){
    echo "<ul></ul><li>" . $value . "</li>";
}
echo "</ul>";
?>

<h3>Alphabetical Order</h3>
<?php
asort($sports);
foreach($sports as $key => $value){
    echo "<ul></ul><li>" . $value . "</li>";
}
echo "</ul>";
?>

<h3>Reverse Alphabetical Order</h3>
<?php
rsort($sports);
foreach($sports as $key => $value){
    echo "<ul></ul><li>" . $value . "</li>";
}
echo "</ul>";
?>
</div>
