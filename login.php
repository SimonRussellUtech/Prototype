<!DOCTYPE html>
<html>

<head>

	<link rel="stylesheet" type="text/css" href='CSS/project css.css'>


</head>
<body class = 'coffee'>
<div style = "text-align:center">
	<fieldset>
		<div id='login'>


		<form method = "POST" action= "login.php" >

			<table align = 'centre' cellpadding = '10' >
				<tr>
					<td colspan = '2' align = 'center'>
						<td>
							<label for="uname"><b>ID</b></label>
							<input type="text" placeholder="Enter ID Number" name="uname" required>
						</td>
					</td>
				</tr>
				<tr>
					<td colspan = '2' align = 'center'>
						<td>
							<label for="psw"><b>Password</b></label>
							<input type="password" placeholder="Enter Password" name="psw" required>
						</td>

					</td>
				</tr>

				<tr>
					<td colspan = '2' align = 'center'>
						<td>
							<label for="typ"><b>Select</b></label>
							<select name="type">
  							<option value="Select" disabled selected>Select</option>}
  							<option value="Student">Student</option>
								<option value="Advisor">Advisor</option>

							</select>
						</td>

					</td>
				</tr>

				<tr>
					<td colspan = '2' align='left'>
						<button type="submit" name = "login" >Login</button></td><td align='left'>
						<button type="reset" class="cancelbtn">Cancel</button>
					</td>
				</tr>
			</table>



		</form>
		</div>
	</fieldset>
</div>
</body>

</html>


<?php
session_start();
var_dump($_SESSION);

if (isset($_POST['login']))
{




	$selected = $_POST['type'];

	if($selected =="Student")
	{
		$conn = mysqli_connect("localhost","root","","thesystem");

		if(!$conn){
			die("connection failed: " . mysqli_connect_error());
		}
		echo "Student selected";
		$sql = "SELECT * from studentinfo where ID = ".$_POST['uname'];

			$result = mysqli_query($conn,$sql);

			if (mysqli_num_rows($result)>0){

				while($row = mysqli_fetch_assoc($result)){

					$uname = $row["ID"];
		      $fname = $row["Fname"];
		      $lname = $row["Lname"];
		      $psw = $row["Pass"];
		      $gpa = $row["GPA"];
		      $stage = $row["Stage"];
					$advisorID = $row["advisorID"];


					if($_POST['uname'] == $uname && $_POST['psw']==$psw){

						echo"login succesful";
						$_SESSION['$uname']= $uname;
						$_SESSION['$fname']= $fname;
						$_SESSION['$lname']= $lname;
						$_SESSION['$psw']= $psw;
						$_SESSION['$gpa']= $gpa;
						$_SESSION['$stage']= $stage;
						$_SESSION['$aid']= $advisorID;

						mysqli_close($conn);



						$status1;
					  if($_SESSION['$gpa']<1.71){
					    $_SESSION['$status1'] = "Probation";
					  }else if($_SESSION['$gpa']<2.5){
					    $_SESSION['$status1'] = "Pre-Probation";
					  }else if($_SESSION['$gpa']<4.0){
					    $_SESSION['$status1'] = "OK";
					  }
						header("location: menu.php");



					}else{
						mysqli_close($conn);
						echo"User Not Found login unsuccesfull";

					}
				}

			}else{
				mysqli_close($conn);
				echo"User Not Found login unsuccesfull";

				}
			if(!$result){
				echo "Error: ".mysqli_error($conn);
			}

	}


	if($selected =="Advisor")
	{
		$conn = mysqli_connect("localhost","root","","thesystem");

		if(!$conn){
			die("connection failed: " . mysqli_connect_error());
		}
		echo "Advisor selected";
		$sql = "SELECT * from advisorinfo where IDnum = ".$_POST['uname'];

			$result = mysqli_query($conn,$sql);

			if (mysqli_num_rows($result)>0){

				while($row = mysqli_fetch_assoc($result)){

					$uname = $row["IDnum"];
		      $fname = $row["Fname"];
		      $lname = $row["Lname"];
					$email = $row["Email"];
		      $psw = $row["password"];




					if($_POST['uname'] == $uname && $_POST['psw']==$psw){

						echo"login succesful";
						$_SESSION['$uname']= $uname;
						$_SESSION['$fname']= $fname;
						$_SESSION['$lname']= $lname;
						$_SESSION['$email']= $email;
						$_SESSION['$psw']= $psw;



						mysqli_close($conn);
						header("location: AdvMenu.php");



					}else{
						mysqli_close($conn);
						echo"User Not Found login unsuccesfull";

					}
				}

			}else{

				mysqli_close($conn);
				echo"User Not Found login unsuccesfull";


				}
			if(!$result){
				echo "Error: ".mysqli_error($conn);
			}

	}



}


?>
