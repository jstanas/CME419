<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 2/19/2018
 * Time: 9:34 PM
 */

$page_title="Assignment Ten";

function calc($h, $w){
    echo "The square footage is " . $h*$w . ".";
}

$height = $_POST['height'];
$width = $_POST['width'];

?>

<link href="../styles/formStyle.css" type="text/css" rel="stylesheet"/>

<form action="A10.php" method="post">
    <label for="height">Height:</label>
    <input type="text" id="height" name="height"/><br/>
    <label for="width">Width:</label>
    <input type="text" id="width" name="width"/><br/>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <input type="submit" name="submit" id="submit" value="Submit"/><br/><br/>

    <?php if($_SERVER['REQUEST_METHOD']=='POST'){
        calc($height, $width);
    } ?>
</form>