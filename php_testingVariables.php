
<!DOCTYPE html>
<html>
<head">
	<title>PHP isset() vs empty() vs is_null()</title>
<style>
    .container{margin:0 auto;width:960px;}
    table{border-collapse:collapse; border:1px solid black;}
    table th, table td{border:1px solid #ccc;padding:3px 10px;text-align:left;vertical-align:top;}
    table th{background:#edeff0;}
</style>
</head>
<body>

<?php
echo '<table>';
echo '<tr><th>Value of variable ($var)</th><th>$var</th><th>isset($var)</th><th>empty($var)</th><th>is_null($var)</th></tr>';
$var = '';
echo '<tr><td>"" (an empty string)</td><td>';
if($var) {
    echo "true";
} else {
    echo "false";
};
echo '</td><td>';
var_dump(isset($var));
echo '</td><td>';
var_dump(empty($var));
echo '</td><td>';
var_dump(is_null($var));
echo '</td></tr>';

$var = ' ';
echo '<tr><td>" " (space)</td><td>';
if($var) {
    echo "true";
} else {
    echo "false";
};
echo '</td><td>';
var_dump(isset($var));
echo '</td><td>';
var_dump(empty($var));
echo '</td><td>';
var_dump(is_null($var));
echo '</td></tr>';

$var = FALSE;
echo '<tr><td>FALSE</td><td>';
if($var) {
    echo "true";
} else {
    echo "false";
};
echo '</td><td>';
var_dump(isset($var));
echo '</td><td>';
var_dump(empty($var));
echo '</td><td>';
var_dump(is_null($var));
echo '</td></tr>';

$var = TRUE;
echo '<tr><td>TRUE</td><td>';
if($var) {
    echo "true";
} else {
    echo "false";
};
echo '</td><td>';
var_dump(isset($var));
echo '</td><td>';
var_dump(empty($var));
echo '</td><td>';
var_dump(is_null($var));
echo '</td></tr>';

$var = array();
echo '<tr><td>array() (an empty array)</td><td>';
if($var) {
    echo "true";
} else {
    echo "false";
};
echo '</td><td>';
var_dump(isset($var));
echo '</td><td>';
var_dump(empty($var));
echo '</td><td>';
var_dump(is_null($var));
echo '</td></tr>';

$var = NULL;
echo '<tr><td>NULL</td><td>';
if($var) {
    echo "true";
} else {
    echo "false";
};
echo '</td><td>';
var_dump(isset($var));
echo '</td><td>';
var_dump(empty($var));
echo '</td><td>';
var_dump(is_null($var));
echo '</td></tr>';

$var = '0';
echo '<tr><td>"0" (0 as a string)</td><td>';
if($var) {
    echo "true";
} else {
    echo "false";
};
echo '</td><td>';
var_dump(isset($var));
echo '</td><td>';
var_dump(empty($var));
echo '</td><td>';
var_dump(is_null($var));
echo '</td></tr>';

$var = 0;
echo '<tr><td>0 (0 as an integer)</td><td>';
if($var) {
    echo "true";
} else {
    echo "false";
};
echo '</td><td>';
var_dump(isset($var));
echo '</td><td>';
var_dump(empty($var));
echo '</td><td>';
var_dump(is_null($var));
echo '</td></tr>';

$var = 0.0;
echo '<tr><td>0.0 (0 as a float)</td><td>';
if($var) {
    echo "true";
} else {
    echo "false";
};
echo '</td><td>';
var_dump(isset($var));
echo '</td><td>';
var_dump(empty($var));
echo '</td><td>';
var_dump(is_null($var));
echo '</td></tr>';

unset($var); // doing this just as a precaution, to make sure $var is actually not defined.
$var;
echo '<tr><td>var $var; (a variable declared, but without a value)</td><td>';
if($var) {
    echo "true";
} else {
    echo "false";
};
echo '</td><td>';
var_dump(isset($var));
echo '</td><td>';
var_dump(empty($var));
echo '</td><td>';
var_dump(is_null($var));
echo '</td></tr>';

echo '</table>';
?>

</body>
</html>
