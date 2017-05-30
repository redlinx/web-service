<?php 
//error_reporting(0); 
?>

<h2>Registration Form</h2>
<table>
<form action="SOAP_Client3.php" method="post">
<tr><td>First Name</td><td><input type="text" value="" name="fname"></td></tr>
<tr><td>Last Name</td><td><input type="text" value="" name="lname"></td></tr>
<tr><td>Birthday</td><td><input type="text" value="" name="bday"></td></tr>
<tr><td>Mobile Number</td><td><input type="text" value="" name="mobile"></td></tr>
<tr><td>Home Address</td><td><input type="text" value="" name="home_address"></td></tr>
<tr><td colspan="2"><input type="submit" value="submit"></td></tr>
</form>
</table>
<br><br>
<?php
/*
Created by Francis Rey Padao
Date Created January 1 2017
*/
$client = new SoapClient(null, array('location'   => "http://localhost/webservice/server1/server.php",
										 'uri'        => "http://localhost/webservice/server1/server.php",
										 'trace'      => 1,
										 'exceptions' => 0));

if(isset($_POST['fname']) AND isset($_POST['lname'])){
	$studentInfo[0] = $_POST['fname'];
	$studentInfo[1] = $_POST['lname'];
	$studentInfo[2] = $_POST['bday'];
	$studentInfo[3] = $_POST['mobile'];
	$studentInfo[4] = $_POST['home_address'];

	
	$return = $client->__soapCall('insertStudentInfo',array($studentInfo));	
}

$return = $client->__soapCall('displayStudentInfo',array());

echo "<b>Source:</b> ".$return["host_info"];
echo "<br>";
echo "<b>Server Status:</b> ".$return["host_stat"];
echo "<br>";
echo "<br>";
echo "<table border=1>";
	echo "<tr>";
		echo "<th>No</th>";
		echo "<th>First Name</th>";
		echo "<th>Last Name</th>";
		echo "<th>Birthday</th>";
		echo "<th>Mobile Number</th>";
		echo "<th>Home Address</th>";
	echo "</tr>"; 

for($x=0;$x<count($return["student_info"]);$x++){
	$y = $x+1;
	echo "<tr>";
	echo "<td>".$y."</td>";
	echo "<td>".$return["student_info"][$x][1]."</td>";
	echo "<td>".$return["student_info"][$x][2]."</td>";
	echo "<td>".$return["student_info"][$x][3]."</td>";
	echo "<td>".$return["student_info"][$x][4]."</td>";
	echo "<td>".$return["student_info"][$x][5]."</td>";
	echo "</tr>";
}
echo "</table>";
?>
