<?php
/**
 * Created by PhpStorm.
 * User: jstanasz
 * Date: 1/30/18
 * Time: 12:07 PM
 */

//Check for first name
if(!empty($_POST['fName'])){
    $fName = $_POST['fName'];
} else{
    echo "<p>You did not enter a first name.</p>";
}

//Check for last name
if(!empty($_POST['lName'])){
    $lName = $_POST['lName'];
} else{
    echo "<p>You did not enter a last name.</p>";
}

//Check for email
if(!empty($_POST['email'])){
    $email = $_POST['email'];
} else{
    echo "<p>You did not enter a email address.</p>";
}

//Check for gender value
if($_POST['gender']=="male"){
    $gender = "male";
}elseif($_POST['gender']=="female"){
    $gender = "female";
} else{
    echo "<p>You did not select your gender.</p>";
}

//Switch statement
if(!empty($_POST['majors'])){
    $major = $_POST['majors'];
    switch($major){
        case "DMP":
            $majorName="Digital Media Production";
            break;
        case "WDD":
            $majorName="Web Design and Development";
            break;
        case "RIS":
            $majorName="Recording Industry Studies";
            break;
        case "SM":
            $majorName="Sports Media";
            break;
        default:
            echo "<p>You did not choose a major.</p>";
            break;
    }
}

if(!empty($_POST['birthDate'])){
    $month = $_POST['birthDate'];
    switch($month){
        case "Jan":
            $monthName="January";
            break;
        case "Feb":
            $monthName="February";
            break;
        case "Mar":
            $monthName="March";
            break;
        case "Apr":
            $monthName="April";
            break;
        case "Ma":
            $monthName="May";
            break;
        case "Jun":
            $monthName="June";
            break;
        case "July":
            $monthName="July";
            break;
        case "Aug":
            $monthName="August";
            break;
        case "Sep":
            $monthName="September";
            break;
        case "Oct":
            $monthName="October";
            break;
        case "Nov":
            $monthName="November";
            break;
        case "Dec":
            $monthName="December";
            break;
        default:
            echo "<p>You did not choose a month.</p>";
            break;
    }
}

if(!empty($_POST['days'])){
    $dayNumber = $_POST['days'];
    switch($dayNumber){
        case "1":
            $day="1";
            break;
        case "2":
            $day="2";
            break;
        case "3":
            $day="3";
            break;
        case "4":
            $day="4";
            break;
        case "5":
            $day="5";
            break;
        case "6":
            $day="6";
            break;
        case "7":
            $day="7";
            break;
        case "8":
            $day="8";
            break;
        case "9":
            $day="9";
            break;
        case "10":
            $day="10";
            break;
        case "11":
            $day="11";
            break;
        case "12":
            $day="12";
            break;
        case "13":
            $day="13";
            break;
        case "14":
            $day="14";
            break;
        case "15":
            $day="15";
            break;
        case "16":
            $day="16";
            break;
        case "17":
            $day="17";
            break;
        case "18":
            $day="18";
            break;
        case "19":
            $day="19";
            break;
        case "20":
            $day="20";
            break;
        case "21":
            $day="21";
            break;
        case "22":
            $day="22";
            break;
        case "23":
            $day="23";
            break;
        case "24":
            $day="24";
            break;
        case "25":
            $day="25";
            break;
        case "26":
            $day="26";
            break;
        case "27":
            $day="27";
            break;
        case "28":
            $day="28";
            break;
        case "29":
            $day="29";
            break;
        case "30":
            $day="30";
            break;
        case "31":
            $day="31";
            break;
        default:
            echo "<p>You did not choose a day.</p>";
            break;
    }
}

if(!empty($_POST['years'])){
    $yearNumber = $_POST['years'];
    switch($yearNumber){
        case "1980":
            $year="1980";
            break;
        case "1981":
            $year="1981";
            break;
        case "1982":
            $year="1982";
            break;
        case "1983":
            $year="1983";
            break;
        case "1984":
            $year="1984";
            break;
        case "1985":
            $year="1985";
            break;
        case "1986":
            $year="1986";
            break;
        case "1987":
            $year="1987";
            break;
        case "1988":
            $year="1988";
            break;
        case "1989":
            $year="1989";
            break;
        case "1990":
            $year="1990";
            break;
        case "1991":
            $year="1991";
            break;
        case "1992":
            $year="1992";
            break;
        case "1993":
            $year="1993";
            break;
        case "1994":
            $year="1994";
            break;
        case "1995":
            $year="1995";
            break;
        case "1996":
            $year="1996";
            break;
        case "1997":
            $year="1997";
            break;
        case "1998":
            $year="1998";
            break;
        case "1999":
            $year="1999";
            break;
        case "2000":
            $year="2000";
            break;
        case "2001":
            $year="2001";
            break;
        case "2002":
            $year="2002";
            break;
        case "2003":
            $year="2003";
            break;
        case "2004":
            $year="2004";
            break;
        case "2005":
            $year="2005";
            break;
        case "2006":
            $year="2006";
            break;
        case "2007":
            $year="2007";
            break;
        case "2008":
            $year="2008";
            break;
        case "2009":
            $year="2009";
            break;
        case "2010":
            $year="2010";
            break;
        default:
            echo "<p>You did not choose a year.</p>";
            break;
    }
}

$state = $_POST['states'];

//Comment
if(!empty($_POST['comments'])){
    $comment = $_POST['comments'];
} else{
    echo "<p>You did not post a comment.</p>";
}

$fullName = $fName . " " . $lName;

//For Email
$to="crector@butler.edu";
$subject="CME419 Test Form";
$body="Name: $fullName\n";
$body.="Email: $email\n";
$body.="Month: $monthName\n";
$body.="Day: $day\n";
$body.="Year: $year\n";
$body.="Home State: $state\n";
$body.="Gender: $gender\n";
$body.="Major: $majorName\n";
$body.="Comment: $comment";

if($fName && $lName && $email && $gender && $majorName && $comment && $monthName && $day && $year && $state){
    $sendMail=mail($to, $subject, $body);
    $yes=true;
    if($sendMail)//this used to be $sendMail
        {
        echo "<p>Thank you, $fullName for submitting your information.  This is the information we received:</p>";
        echo "Email Address: $email<br/>";
        echo "Month: $monthName<br/>";
        echo "Day: $day<br/>";
        echo "Year: $year<br/>";
        echo "Home State: $state<br/>";
        echo "Gender: $gender<br/>";
        echo "Major: $majorName<br/>";
        echo "Comment: $comment</p>";
    }
} else{
    echo "nay";
}