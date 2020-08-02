<?php

	session_start();
	var_dump($_SESSION);
	foreach($_SESSION as $key=>$value){
		$$key = $value;
	}
	$conn = mysqli_connect("localhost","root","","thesystem");

	if(!$conn){
		die("connection failed: " . mysqli_connect_error());
	}

$sql = "SELECT * from advisorinfo where advisorID = ".$_SESSION['AID'];

	$result = mysqli_query($conn,$sql);

	if (mysqli_num_rows($result)>0){

		while($row = mysqli_fetch_assoc($result)){

			$uname = $row["IDnum"];
			$fname = $row["Fname"];
			$lname = $row["Lname"];
			$email = $row["Email"];


				mysqli_close($conn);
		}
	}


?>

<head>

	<link rel = 'stylesheet' type = 'text/css' href = 'CSS/project css.css'>
		<title>Status</title>

</head>
<body class = 'coffee'>
<div style = "text-align:center">
		<fieldset>
		<h1>STUDENT STATUS INFORMATION </h1>
		<form method='POST'>
		<table cellpadding='10'  >
			<tr>
				<th><label>Student Name:</label></th>
				<td><p><?php echo $_SESSION['$fname']." "; echo $_SESSION['$lname']; ?></p></td>
			</tr>
			<tr>
				<th><label>Status:</label></th>
				<td><p><?php echo $_SESSION['$status1'];?></p></td>
			</tr>
			<tr>
				<th><label>GPA:</label></th>
				<td><p><?php echo $_SESSION['$gpa'];?></p></td>
			</tr>
			<tr>
				<th><label>Advisor INFORMATION:</label></th>
				<td><p><?php echo $fname." "; echo $lname; ?></p></td>
				<td><p><?php echo $email;?></p></td>
			</tr>

			<tr>
					<td colspan = '2' align = 'right'><input type="button" value="Return" onclick="location.href='menu.php'"/></td>
					<td colspan = '2' align = 'left'></td>
					<td> </td><td> </td><td></td> <td><p text-align = 'right'></p> </td>
			</tr>

			</table>
			</form>

		</fieldset>
		</div>
</body>
