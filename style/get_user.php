<?php
$DB_NAME = "gpitm379_bookstore";
$DB_HOST = "localhost";
$DB_USER = "gpitm379";
$DB_PASS = "bigboom";
$connection = mysql_connect($DB_HOST, $DB_USER, $DB_PASS)
or die("Cannot connect to $DB_HOST as $DB_USER:" . mysql_error());
mysql_select_db($DB_NAME) or die ("Cannot open $DB_NAME:" . mysql_error());

$email = $_POST["Email"];
$query = "SELECT * FROM Registration WHERE Email = '$email'";
$result = mysql_query($query);
$numRows = mysql_numrows($result);

if ($numRows > 0)
{
	$json = '{';
	
	$email = "" . mysql_result($result, 0, "Email");
	$json .= '"Email":"'. $email . '",';
	
	$lastname = "" . mysql_result($result, 0, "LastName");
	$json .= '"LastName":"'. $lastname . '",';
	
	$firstname = "" . mysql_result($result, 0, "FirstName");
	$json .= '"FirstName":"'. $firstname . '",';
	
	$address = "" . mysql_result($result, 0, "Address");
	$json .= '"Address":"'. $address . '",';
	
	$city = "" . mysql_result($result, 0, "City");
	$json .= '"City":"'. $city . '",';
	
	$state = "" . mysql_result($result, 0, "State");
	$json .= '"State":"'. $state . '",';
	
	$zip = "" . mysql_result($result, 0, "Zip");
	$json .= '"Zip":"'. $zip . '",';
	
	$phone = "" . mysql_result($result, 0, "Phone");
	$json .= '"Phone":"'. $phone . '",';
	
	$school = "" . mysql_result($result, 0, "School");
	$json .= '"School":"'. $school . '",';
	
	$gradyear = "" . mysql_result($result, 0, "GradYear");
	$json .= '"GradYear":"'. $gradyear . '",';
	
	$admit = "" . mysql_result($result, 0, "AdmitType");
	$json .= '"AdmitType":"'. $admit . '",';
	
	$term = "" . mysql_result($result, 0, "TermInterested");
	$json .= '"TermInterested":"'. $term . '",';
	
	$numattend = "" . mysql_result($result, 0, "NumAttending");
	$json .= '"NumAttending":"'. $numattend . '",';
	
	$prereg = "" . mysql_result($result, 0, "PreReg");
	$json .= '"PreReg":"'. $prereg . '",';
	
	$didattend = "" . mysql_result($result, 0, "DidAttend");
	$json .= '"DidAttend":"'. $didattend . '",';
	
	//$trackchanges = "" . mysql_result($result, 0, "TrackChanges");
	//$json .= '"TrackChanges":"'. $trackchanges . '",';
	
	//$checkin = "" . mysql_result($result, 0, "CheckinMethod");
	//$json .= '"CheckinMethod":"'. $checkin . '",';
	
	$bio = mysql_result($result, 0, "BIO");
	$json .= '"BIO":"'. $bio . '",';
	
	$bchm = mysql_result($result, 0, "BCHM");
	$json .= '"BCHM":"'. $bchm . '",';
	
	$chem = mysql_result($result, 0, "CHEM");
	$json .= '"CHEM":"'. $chem . '",';
	
	$cis = mysql_result($result, 0, "CIS");
	$json .= '"CIS":"'. $cis . '",';
	
	$env = mysql_result($result, 0, "ENV");
	$json .= '"ENV":"'. $env . '",';
	
	$geog = mysql_result($result, 0, "GEOG");
	$json .= '"GEOG":"'. $geog . '",';
	
	$geol = mysql_result($result, 0, "GEOL");
	$json .= '"GEOL":"'. $geol . '",';
	
	$it = mysql_result($result, 0, "IT");
	$json .= '"IT":"'. $it . '",';
	
	$math = mysql_result($result, 0, "MATH");
	$json .= '"MATH":"'. $math . '",';
	
	$mar = mysql_result($result, 0, "MAR");
	$json .= '"MAR":"'. $mar . '",';
	
	$phy = mysql_result($result, 0, "PHY");
	$json .= '"PHY":"'. $phy . '",';
	
	$phyas = mysql_result($result, 0, "PHYAS");
	$json .= '"PHYAS":"'. $phyas . '",';
	
	$phyep = mysql_result($result, 0, "PHYEP");
	$json .= '"PHYEP":"'. $phyep . '",';
	
	$prepro = mysql_result($result, 0, "PREPRO");
	$json .= '"PREPRO":"'. $prepro . '"';
	
	$json .= '}';
	
	echo $json;

}
else
{
	echo '{}';
}
/*
$data = array(
    'userID'      => 'a7664093-502e-4d2b-bf30-25a2b26d6021',
    'itemKind'    => 0,
    'value'       => 1,
    'description' => 'Boa saudaÁ„o.',
    'itemID'      => '03e76d0a-8bab-11e0-8250-000c29b481aa'
);
$options = array(
  'http' => array(
    'method'  => 'POST',
    'content' => json_encode( $data ),
    'header'=>  "Content-Type: application/json\r\n" .
                "Accept: application/json\r\n"
    )
);

$context  = stream_context_create( $options );
$result = file_get_contents( $url, false, $context );
$response = json_decode( $result );
*/
?>