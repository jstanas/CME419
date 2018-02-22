<?php /* Template Name: teamproj */ ?>



<h1> the header is here but that is IT MY DUDE</h1>

<form action="custompage.php" method="post">
    <p>Your name: <input type="text" name="name" /></p>
    <p>Your age: <input type="text" name="age" /></p>
    <p><input type="submit" /></p>
</form>

<?php
    $name=$_POST['name'];
    $age=$_POST['age'];
?>

<?php if($_SERVER['REQUEST_METHOD']=='POST'){
    echo "hello" . $name;
    echo "ur" . $age . "years old";
} ?>


