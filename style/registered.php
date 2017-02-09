<?php	
$email = $_POST['Email'];
$firstname = $_POST['FirstName'];
$lastname = $_POST['LastName'];
$address = $_POST['Address'];
$city = $_POST['City'];
$state = $_POST['State'];
$zip = $_POST['Zip'];
$school = $_POST['School'];
$gradyear = $_POST['GradYear'];
$phone = $_POST['Phone'];
$numattend = $_POST['NumAttending'];
$term = $_POST['TermInterested'];
$admit = $_POST['AdmitType'];
$prereg = $_POST['PreReg'];
$bio = $_POST['BIO'];
$bchm = $_POST['BCHM'];
$chem = $_POST['CHEM'];
$cis = $_POST['CIS'];
$env = $_POST['ENV'];
$geog = $_POST['GEOG'];
$geol = $_POST['GEOL'];
$its = $_POST['IT'];
$mat = $_POST['MATH'];
$mar = $_POST['MAR'];
$phy = $_POST['PHY'];
$phyas = $_POST['PHYAS'];
$phyep = $_POST['PHYEP'];
$prepro = $_POST['PREPRO'];
$method = $_POST['CheckinMethod'];


$conn = mysql_connect('localhost', 'dbuser', 'pass');
mysql_select_db('dbname');
$query = "SELECT * FROM Registration WHERE Email = '$email'";
$result = mysql_query($query);
$numRows = mysql_numrows($result);
$trackchanges = "";

if ($prereg != 'Y' && $numRows < 1)
{
			$query=	"INSERT INTO Registration 
					(Email, LastName, FirstName, Address, City, State, Zip, Phone, School,
					GradYear, AdmitType, TermInterested, NumAttending, PreReg, DidAttend, TrackChanges, CheckinMethod,
					BIO, BCHM, CHEM, CIS, ENV, GEOG, GEOL, IT, MATH, MAR, PHY, PHYAS, PHYEP, PREPRO)
					VALUES 
					('$email', '$lastname', '$firstname', '$address', '$city', '$state', '$zip', '$phone','$school',
						   '$gradyear', '$admit', '$term', $numattend, 'N', 'Y', 'new_entry', '$method', '$bio', '$bchm', '$chem',
						   '$cis', '$env', '$geog', '$geol', '$its', '$mat', '$mar', '$phy', '$phyas', '$phyep', '$prepro')";

	$test = mysql_query($query);
	
	if (!$test)
	{
		echo "CRITICAL DATABASE ERROR => INVALID PRIMARY KEY: DUPLICATE";
	}
	else
	{		
			echo
"Thank you $firstname, and welcome to the STEM open house!<br><br>Please pick up your folder and name tag at the registration table from one of our students!";
	}
	
	mysql_close($conn);
}  
else if ($prereg != 'Y' && $numrows > 0)
{
"Thank you $firstname, and welcome to the STEM open house!<br><br>Please pick up your folder and name tag at the registration table from one of our students!";
}
else
{	

		$updateFail = false;
	    $updateCheck = true;

		if ($email != $_POST['trackEmail'])
		{
				$trackchanges = $trackchanges . $_POST['trackEmail'] . " ";
			
			$query =
			"UPDATE Registration
			SET Email = '" . $email . "'
			WHERE Email = '" . $_POST['trackEmail'] . "'";
			$updateCheck = mysql_query($query);
			if (!$updateCheck)
			{
				$updateFail = true;
			}
		}
		
		if ($lastname != $_POST['trackLastName'])
		{
			$trackchanges = $trackchanges . "LastName ";
			
			$query =
			"UPDATE Registration
			SET LastName = '" . $lastname . "'
			WHERE Email = '" . $email . "'";
			$updateCheck = mysql_query($query);
			if (!$updateCheck)
			{
				$updateFail = true;
			}
		}
		
		if ($firstname != $_POST['trackFirstName'])
		{
			$trackchanges = $trackchanges . "FirstName ";
		
			$query =
			"UPDATE Registration
			SET FirstName = '" . $firstname . "'
			WHERE Email = '" . $email . "'";
			$updateCheck = mysql_query($query);
			if (!$updateCheck)
			{
				$updateFail = true;
			}
		}
		
		if ($address != $_POST['trackAddress'])
		{
			$trackchanges = $trackchanges . "Address ";
			
			$query =
			"UPDATE Registration
			SET Address = '" . $address . "'
			WHERE Email = '" . $email . "'";
			$updateCheck = mysql_query($query);
			if (!$updateCheck)
			{
				$updateFail = true;
			}
		}
		
		if ($city != $_POST['trackCity'])
		{
			$trackchanges = $trackchanges . "City ";
			
			$query =
			"UPDATE Registration
			SET City = '" . $city . "'
			WHERE Email = '" . $email . "'";
			$updateCheck = mysql_query($query);
			if (!$updateCheck)
			{
				$updateFail = true;
			}
		}
		
		if ($state != $_POST['trackState'])
		{
			$trackchanges = $trackchanges . "State ";
			
			$query =
			"UPDATE Registration
			SET State = '" . $state . "'
			WHERE Email = '" . $email . "'";
			$updateCheck = mysql_query($query);
			if (!$updateCheck)
			{
				$updateFail = true;
			}
		}
		
		if ($zip != $_POST['trackZip'])
		{
			$trackchanges = $trackchanges . "Zip ";
			
			$query =
			"UPDATE Registration
			SET Zip = '" . $zip . "'
			WHERE Email = '" . $email . "'";
			$updateCheck = mysql_query($query);
			if (!$updateCheck)
			{
				$updateFail = true;
			}
		}
		
		if ($phone != $_POST['trackPhone'])
		{
			$trackchanges = $trackchanges . "Phone ";
			
			$query =
			"UPDATE Registration
			SET Phone = '" . $phone . "'
			WHERE Email = '" . $email . "'";
			$updateCheck = mysql_query($query);
			if (!$updateCheck)
			{
				$updateFail = true;
			}
		}
		
		if ($school != $_POST['trackSchool'])
		{
			$trackchanges = $trackchanges . "School ";
			
			$query =
			"UPDATE Registration
			SET School = '" . $school . "'
			WHERE Email = '" . $email . "'";
			$updateCheck = mysql_query($query);
			if (!$updateCheck)
			{
				$updateFail = true;
			}
		}
		
		if ($gradyear != $_POST['trackGradYear'])
		{
			$trackchanges = $trackchanges . "GradYear ";
			
			$query =
			"UPDATE Registration
			SET GradYear = '" . $gradyear . "'
			WHERE Email = '" . $email . "'";
			$updateCheck = mysql_query($query);
			if (!$updateCheck)
			{
				$updateFail = true;				
			}
		}
		
		if ($admit != $_POST['trackAdmitType'])
		{
			$trackchanges = $trackchanges . "AdmitType ";
			
						$query =
			"UPDATE Registration
			SET AdmitType = '" . $admit . "'
			WHERE Email = '" . $email . "'";
			$updateCheck = mysql_query($query);
			if (!$updateCheck)
			{
				$updateFail = true;
			}
		}
		
		if ($term != $_POST['trackTermInterested'])
		{
			$trackchanges = $trackchanges . "TermInterested ";
			
						$query =
			"UPDATE Registration
			SET TermInterested = '" . $term . "'
			WHERE Email = '" . $email . "'";
			$updateCheck = mysql_query($query);
			if (!$updateCheck)
			{
				$updateFail = true;
			}
		}
		
		if ($numattend != $_POST['trackNumAttending'])
		{
			$trackchanges = $trackchanges . "NumAttending ";
			
						$query =
			"UPDATE Registration
			SET NumAttending = '" . $numattend . "'
			WHERE Email = '" . $email . "'";
			$updateCheck = mysql_query($query);
			if (!$updateCheck)
			{
				$updateFail = true;
			}
		}
		
		if ($bio != $_POST['trackBIO'])
		{
			$trackchanges = $trackchanges . "BIO ";
			
						$query =
			"UPDATE Registration
			SET BIO = '" . $bio . "'
			WHERE Email = '" . $email . "'";
			$updateCheck = mysql_query($query);
			if (!$updateCheck)
			{
				$updateFail = true;
			}
		}
		
		if ($bchm != $_POST['trackBCHM'])
		{
			$trackchanges = $trackchanges . "BCHM ";
			
				$query =
			"UPDATE Registration
			SET BCHM = '" . $bchm . "'
			WHERE Email = '" . $email . "'";
			$updateCheck = mysql_query($query);
			if (!$updateCheck)
			{
				$updateFail = true;
			}
		}
		
		if ($chem != $_POST['trackCHEM'])
		{
			$trackchanges = $trackchanges . "CHEM ";
			
						$query =
			"UPDATE Registration
			SET CHEM = '" . $chem . "'
			WHERE Email = '" . $email . "'";
			$updateCheck = mysql_query($query);
			if (!$updateCheck)
			{
				$updateFail = true;
			}
		}
		
		if ($cis != $_POST['trackCIS'])
		{
			$trackchanges = $trackchanges . "CIS ";
			
			
					$query =
			"UPDATE Registration
			SET CIS = '" . $cis . "'
			WHERE Email = '" . $email . "'";
			$updateCheck = mysql_query($query);
			if (!$updateCheck)
			{
				$updateFail = true;
			}
		}
		
		if ($env != $_POST['trackENV'])
		{
			$trackchanges = $trackchanges . "ENV ";
			
			$query =
			"UPDATE Registration
			SET ENV = '" . $env . "'
			WHERE Email = '" . $email . "'";
			$updateCheck = mysql_query($query);
			if (!$updateCheck)
			{
				$updateFail = true;
			}
		}
		
		if ($geog != $_POST['trackGEOG'])
		{
			$trackchanges = $trackchanges . "GEOG ";
			
						$query =
			"UPDATE Registration
			SET GEOG = '" . $geog . "'
			WHERE Email = '" . $email . "'";
			$updateCheck = mysql_query($query);
			if (!$updateCheck)
			{
				$updateFail = true;
			}
		}
		
		if ($geol != $_POST['trackGEOL'])
		{
			$trackchanges = $trackchanges . "GEOL ";
			
			$query =
			"UPDATE Registration
			SET GEOL = '" . $geol .  "'
			WHERE Email = '" . $email . "'";
			$updateCheck = mysql_query($query);
			if (!$updateCheck)
			{
				$updateFail = true;
			}
		}
		
		if ($its != $_POST['trackIT'])
		{
			$trackchanges = $trackchanges . "IT ";
			
			$query =
			"UPDATE Registration
			SET IT = '" . $its . "'
			WHERE Email = '" . $email . "'";
			$updateCheck = mysql_query($query);
			if (!$updateCheck)
			{
				$updateFail = true;
			}
		}
		
		if ($mat != $_POST['trackMATH'])
		{
			$trackchanges = $trackchanges . "MATH ";
			
			$query =
			"UPDATE Registration
			SET MATH = '" . $mat . "'
			WHERE Email = '" . $email . "'";
			$updateCheck = mysql_query($query);
			if (!$updateCheck)
			{
				$updateFail = true;
			}
		}
		
		if ($mar != $_POST['trackMAR'])
		{
			$trackchanges = $trackchanges . "MAR ";
			
			$query =
			"UPDATE Registration
			SET MAR = '" . $mar . "'
			WHERE Email = '" . $email . "'";
			$updateCheck = mysql_query($query);
			if (!$updateCheck)
			{
				$updateFail = true;
			}
		}
		
		if ($phy != $_POST['trackPHY'])
		{
			$trackchanges = $trackchanges . "PHY ";
			
			$query = 
			"UPDATE Registration
			SET PHY = '" . $phy . "'
			WHERE Email = '" . $email . "'";
			$updateCheck = mysql_query($query);
			if (!$updateCheck)
			{
				$updateFail = true;
			}
		}
		
		if ($phyas != $_POST['trackPHYAS'])
		{
			$trackchanges = $trackchanges . "PHYAS ";
			
			$query =
			"UPDATE Registration
			SET PHYAS = '" . $phyas . "'
			WHERE Email = '" . $email . "'";
			$updateCheck = mysql_query($query);
			if (!$updateCheck)
			{
				$updateFail = true;
			}
		}
		
		if ($phyep != $_POST['trackPHYEP'])
		{
			$trackchanges = $trackchanges . "PHYEP ";
			
			$query =
			"UPDATE Registration
			SET PHYEP = '" . $phyep . "'
			WHERE Email = '" . $email . "'";
			$updateCheck = mysql_query($query);
			if (!$updateCheck)
			{
				$updateFail = true;
			}
		}
		
		if ($prepro != $_POST['trackPREPRO'])
		{
			$trackchanges = $trackchanges . "PREPRO ";
			
			$query =
			"UPDATE Registration
			SET PREPRO = '" . $prepro . "'
			WHERE Email = '" . $email . "'";
			$updateCheck = mysql_query($query);
			if (!$updateCheck)
			{
				$updateFail = true;
			}
		}
		
		$query =
				"UPDATE Registration
				SET DidAttend = 'Y'
				WHERE Email = '" . $email . "'";
				
		$updateCheck = mysql_query($query);
		if (!$updateCheck)
		{
			$updateFail = true;
		}
		
		$query =
				"UPDATE Registration
				SET TrackChanges = '" . $trackchanges . "'
				WHERE Email = '" . $email . "'";
		$updateCheck = mysql_query($query);
		if (!$updateCheck)
		{
			$updateFail = true;
		}
		
		$query =
				"UPDATE Registration
				SET CheckinMethod = 'KU'
				WHERE Email = '" . $email . "'";
		$updateCheck = mysql_query($query);
		if (!$updateCheck)
		{
			$updateFail = true;
		}
		
		if ($updateFail)
		{
			// if the database fails at this point, it will be very confusing to have to
			// resubmit information.  Any http error will be handled by apache
				echo "Thank you $firstname, and welcome to the STEM open house!<br><br>Please pick up your folder and name tag at the registration table from one of our students!";
		}
		else
		{
			echo 
"Thank you $firstname, and welcome to the STEM open house!<br><br>Please pick up your folder and name tag at the registration table from one of our students!";
		}
		mysql_close($conn);
}
?>

