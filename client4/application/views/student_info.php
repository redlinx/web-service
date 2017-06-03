<h2>Registration Form</h2>
<table>
<form action="student/insertStudentInfo" method="post">
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
//error_reporting(0);

echo "<b>Data Source:</b> ".$student["host_info"];
echo "<br>";
echo "<b>Server Status:</b> ".$student["host_stat"];
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

for($x=0;$x<count($student["student_info"]);$x++){
	$y = $x+1;
	echo "<tr>";
	echo "<td>".$y."</td>";
	echo "<td>".$student["student_info"][$x][1]."</td>";
	echo "<td>".$student["student_info"][$x][2]."</td>";
	echo "<td>".$student["student_info"][$x][3]."</td>";
	echo "<td>".$student["student_info"][$x][4]."</td>";
	echo "<td>".$student["student_info"][$x][5]."</td>";
	echo "</tr>";
}
echo "</table>";
?>

<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>