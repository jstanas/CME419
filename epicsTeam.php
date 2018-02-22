<?php /* Template Name: pageLayout */ ?>

<link href="styles/epics.css" type="text/css" rel="stylesheet"/>

<div class="content">
    <div id="header">
        <p>Team Name</p>
        <p>Client Logo</p>
    </div>
    <div id="box1">
        <p>Team Photo</p>
    </div>
    <div id="box2">
        <p>Purpose, Description</p>
    </div>
    <div id="box3">
        <p>Names, Roles, Grad Year</p>
    </div>
    <div id="footer">
        <p>Footer Information</p>
    </div>
</div>

<form action="result.php" method="post">
    <label for="fName">First Name:</label>
    <input type="text" id="fName" name="fName"/><br/>
    <input type="submit" name="submit" id="submit" value="Submit Form"/>
</form>