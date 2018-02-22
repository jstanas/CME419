<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 2/19/2018
 * Time: 8:25 PM
 */
$page_title="Assignment Two";

$x=12;
$y=8;
?>

<style>th, td{border:1px solid black; padding:5px;}</style>

<table>
    <tr>
        <th colspan="2">x = 12 &emsp;&emsp; y = 8</th>
    </tr>
    <tr>
        <th>Operation</th>
        <th>Result</th>
    </tr>
    <tr>
        <td>Addition</td>
        <td><?php echo $x+$y ?></td>
    </tr>
    <tr>
        <td>Subtraction</td>
        <td><?php echo $x-$y ?></td>
    </tr>
    <tr>
        <td>Multiplication</td>
        <td><?php echo $x*$y ?></td>
    </tr>
    <tr>
        <td>Division</td>
        <td><?php echo $x/$y ?></td>
    </tr>
    <tr>
        <td>Modulus</td>
        <td><?php echo $x%$y ?></td>
    </tr>
    <tr>
        <td>Increment of X</td>
        <td><?php echo $x+1 ?></td>
    </tr>
    <tr>
        <td>Decrement of Y</td>
        <td><?php echo $y-1 ?></td>
    </tr>
</table>