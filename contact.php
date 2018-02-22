<?php
/**
 * Created by PhpStorm.
 * User: jstanasz
 * Date: 1/30/18
 * Time: 11:20 AM
 */
$page_title="Contact Form";
include('includes/header.html');

$majorArray = array (
    "DMP" => "Digital Media Production",
    "WDD" => "Web Design and Development",
    "RIS" => "Recording Industry Studies",
    "SM" => "Sports Media");

$monthArray = array (
    "Jan" => "January",
    "Feb" => "February",
    "Mar" => "March",
    "Apr" => "April",
    "Ma" => "May",
    "Jun" => "June",
    "Jul" => "July",
    "Aug" => "August",
    "Sep" => "September",
    "Oct" => "October",
    "Nov" => "November",
    "Dec" => "December");

$college;
//multidimensional array
$CSD = array ('Communication Sciences and Disorders');
$CME = array ('Digital Media Production', 'Interactive Media', 'Recording Industry Studies');
$CCMS = array ('Critical Communication and Media Studies');
$HCOL = array ('Human Communication and Organizational Leadership');
$JOR = array ('Journalism', 'Sports Media');
$STR = array ('Strategic Communication', 'Public Relations', 'Advertising');

$CCOM = array (
    "College of Communication" => "college",
    "Communication Sciences and Disorders" => $CSD,
    "Creative Media and Entertainment" => $CME,
    "Critical Communication and Media Studies" => $CCMS,
    "Human Communication and Organizational Leadership" => $HCOL,
    "Journalism" => $JOR,
    "Strategic Communication" => $STR
);

$states = array(
    'AL'=>'Alabama',
    'AK'=>'Alaska',
    'AZ'=>'Arizona',
    'AR'=>'Arkansas',
    'CA'=>'California',
    'CO'=>'Colorado',
    'CT'=>'Connecticut',
    'DE'=>'Delaware',
    'DC'=>'District of Columbia',
    'FL'=>'Florida',
    'GA'=>'Georgia',
    'HI'=>'Hawaii',
    'ID'=>'Idaho',
    'IL'=>'Illinois',
    'IN'=>'Indiana',
    'IA'=>'Iowa',
    'KS'=>'Kansas',
    'KY'=>'Kentucky',
    'LA'=>'Louisiana',
    'ME'=>'Maine',
    'MD'=>'Maryland',
    'MA'=>'Massachusetts',
    'MI'=>'Michigan',
    'MN'=>'Minnesota',
    'MS'=>'Mississippi',
    'MO'=>'Missouri',
    'MT'=>'Montana',
    'NE'=>'Nebraska',
    'NV'=>'Nevada',
    'NH'=>'New Hampshire',
    'NJ'=>'New Jersey',
    'NM'=>'New Mexico',
    'NY'=>'New York',
    'NC'=>'North Carolina',
    'ND'=>'North Dakota',
    'OH'=>'Ohio',
    'OK'=>'Oklahoma',
    'OR'=>'Oregon',
    'PA'=>'Pennsylvania',
    'RI'=>'Rhode Island',
    'SC'=>'South Carolina',
    'SD'=>'South Dakota',
    'TN'=>'Tennessee',
    'TX'=>'Texas',
    'UT'=>'Utah',
    'VT'=>'Vermont',
    'VA'=>'Virginia',
    'WA'=>'Washington',
    'WV'=>'West Virginia',
    'WI'=>'Wisconsin',
    'WY'=>'Wyoming',
);
?>

<div class="list">
    <?php
foreach($CCOM as $CCOMArray => $studies) {
    echo "<h3>" . $CCOMArray . "</h3><ul>";
    foreach ($studies as $value) {
        echo "<li>" . $value . "</li>";
    }
    echo "</ul><br/>";
}
?>
</div>

<?php
//alphabetical order
asort($majorArray);
//reverse order
rsort($majorArray);

//key sort - alphabetical
ksort($majorArray);
//key sort - reverse
krsort($majorArray);
?>
<div class="box">
<form action="procForm.php" method="post">
    <label for="fName">First Name:</label>
    <input type="text" id="fName" name="fName"/><br/>
    <label for="lName">Last Name:</label>
    <input type="text" id="lName" name="lName"/><br/>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email"/><br/>

    <label for="birthDate">Birthdate:</label>
    <select name="birthDate">
        <option>Month:</option>
        <option value="Jan"><?php echo $monthArray["Jan"]; ?></option>
        <option value="Feb"><?php echo $monthArray["Feb"]; ?></option>
        <option value="Mar"><?php echo $monthArray["Mar"]; ?></option>
        <option value="Apr"><?php echo $monthArray["Apr"]; ?></option>
        <option value="Ma"><?php echo $monthArray["Ma"]; ?></option>
        <option value="Jun"><?php echo $monthArray["Jun"]; ?></option>
        <option value="Jul"><?php echo $monthArray["Jul"]; ?></option>
        <option value="Aug"><?php echo $monthArray["Aug"]; ?></option>
        <option value="Sep"><?php echo $monthArray["Sep"]; ?></option>
        <option value="Oct"><?php echo $monthArray["Oct"]; ?></option>
        <option value="Nov"><?php echo $monthArray["Nov"]; ?></option>
        <option value="Dec"><?php echo $monthArray["Dec"]; ?></option>
    </select>

    <?php
    $myNumbers = range(1, 31);
    echo '<select name="days"><option>Day:</option>';
    foreach($myNumbers as $value){
        echo "<option>$value</option>";
    }echo '</select>';
    ?>

    <?php
    $myYears = range(1980, 2010);
    echo '<select name="years"><option>Year:</option>';
    foreach($myYears as $choice){
        echo "<option>$choice</option>";
    }echo '</select>';
    ?>

    <br/><label for="states">Home State:</label>
    <select name="states">
        <option>Choose a state:</option>
        <option value="AL"><?php echo $states["AL"]; ?></option>
        <option value="AK"><?php echo $states["AK"]; ?></option>
        <option value="AZ"><?php echo $states["AZ"]; ?></option>
        <option value="AR"><?php echo $states["AR"]; ?></option>
        <option value="CA"><?php echo $states["CA"]; ?></option>
        <option value="CO"><?php echo $states["CO"]; ?></option>
        <option value="CT"><?php echo $states["CT"]; ?></option>
        <option value="DE"><?php echo $states["DE"]; ?></option>
        <option value="DC"><?php echo $states["DC"]; ?></option>
        <option value="FL"><?php echo $states["FL"]; ?></option>
        <option value="GA"><?php echo $states["GA"]; ?></option>
        <option value="HI"><?php echo $states["HI"]; ?></option>
        <option value="ID"><?php echo $states["ID"]; ?></option>
        <option value="IL"><?php echo $states["IL"]; ?></option>
        <option value="IN"><?php echo $states["IN"]; ?></option>
        <option value="IA"><?php echo $states["IA"]; ?></option>
        <option value="KS"><?php echo $states["KS"]; ?></option>
        <option value="KY"><?php echo $states["KY"]; ?></option>
        <option value="LA"><?php echo $states["LA"]; ?></option>
        <option value="ME"><?php echo $states["ME"]; ?></option>
        <option value="MD"><?php echo $states["MD"]; ?></option>
        <option value="MA"><?php echo $states["MA"]; ?></option>
        <option value="MI"><?php echo $states["MI"]; ?></option>
        <option value="MN"><?php echo $states["MN"]; ?></option>
        <option value="MS"><?php echo $states["MS"]; ?></option>
        <option value="MO"><?php echo $states["MO"]; ?></option>
        <option value="MT"><?php echo $states["MT"]; ?></option>
        <option value="NE"><?php echo $states["NE"]; ?></option>
        <option value="NV"><?php echo $states["NV"]; ?></option>
        <option value="NH"><?php echo $states["NH"]; ?></option>
        <option value="NJ"><?php echo $states["NJ"]; ?></option>
        <option value="NM"><?php echo $states["NM"]; ?></option>
        <option value="NY"><?php echo $states["NY"]; ?></option>
        <option value="NC"><?php echo $states["NC"]; ?></option>
        <option value="ND"><?php echo $states["ND"]; ?></option>
        <option value="OH"><?php echo $states["OH"]; ?></option>
        <option value="OK"><?php echo $states["OK"]; ?></option>
        <option value="OR"><?php echo $states["OR"]; ?></option>
        <option value="PA"><?php echo $states["PA"]; ?></option>
        <option value="RI"><?php echo $states["RI"]; ?></option>
        <option value="SC"><?php echo $states["SC"]; ?></option>
        <option value="SD"><?php echo $states["SD"]; ?></option>
        <option value="TN"><?php echo $states["TN"]; ?></option>
        <option value="TX"><?php echo $states["TX"]; ?></option>
        <option value="UT"><?php echo $states["UT"]; ?></option>
        <option value="VT"><?php echo $states["VT"]; ?></option>
        <option value="VA"><?php echo $states["VA"]; ?></option>
        <option value="WA"><?php echo $states["WA"]; ?></option>
        <option value="WV"><?php echo $states["WV"]; ?></option>
        <option value="WI"><?php echo $states["WI"]; ?></option>
        <option value="WY"><?php echo $states["WY"]; ?></option>
    </select>

    <br/><label for="gender">Gender:</label>
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female<br>
    <label for="majors">Major:</label>
    <select name="majors">
        <option>Choose a major:</option>
        <option value="DMP"><?php echo $majorArray[0]; ?></option>
        <option value="WDD"><?php echo $majorArray[1]; ?></option>
        <option value="RIS"><?php echo $majorArray[2]; ?></option>
        <option value="SM"><?php echo $majorArray[3]; ?></option>
    </select><br/>

    <?php
    /*echo '<select name="majors"><option>Choose a major...</option>';
    foreach($majorArray as $key => $value){
        echo '<option value="' . $key . '">' . $value . "</option>";
    }*/
    ?>

    <label for="comments">Comment:</label>
    <textarea name="comments"></textarea><br/>
    <input type="submit" name="submit" id="submit" value="Submit Form"/>
</form>
</div>

<?php
include("includes/footer.html");
?>