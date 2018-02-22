<?php
/**
 * Created by PhpStorm.
 * User: jstanasz
 * Date: 2/6/18
 * Time: 11:44 AM
 */

//multidimensional arrays
$winter = ['December', 'January', 'February'];
$spring = ['March', 'April', 'May'];
$summer = ['June', 'July', 'August'];
$fall = ['September', 'October', 'November'];

$seasons = array (
    "Winter" => $winter,
    "Spring" => $spring,
    "Summer" => $summer,
    "Fall" => $fall
);

echo $seasons['Summer'][2];

foreach($seasons as $seasonArray => $months) {
    echo "<h3>" . $seasonArray . "</h3><ul>"; //prints out the season
    foreach ($months as $value) { //prints out each month
        echo "<li>" . $value . "</li>";
    }
    echo "</ul>";
}
    $myNumbers = range(1, 10);
    foreach($myNumbers as $value){
        echo $value . "<br/>";
    }

//for loop
for($i=5; $i<=10; $i++){
    echo "My number is " . $i . "<br/>";
}

//while loop
$i=6;
while($i<8){
    echo "My number is " . $i . "<br/>";
    $i++;
}

//do while loop
$x=3;
do{
    echo $x;
    $x++;
} while($x<4);

?>