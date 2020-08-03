<?php

	session_start();
	var_dump($_SESSION);
	foreach($_SESSION as $key=>$value){
		$$key = $value;
	}



?>

<head>

	<link rel = 'stylesheet' type = 'text/css' href = 'CSS/project css.css'>
		<title>Status</title>

</head>
<body class = 'coffee'>
<div style = "text-align:center">
		<fieldset>
		<h1>STUDENT LIST </h1>
		<form method='POST'>
		<table cellpadding='10'  >
      <tr>
          <th><p>ID</p></th>
          <th><p>Name</p></th>
          <th><p>Status</p></th>
          <th><p>GPA</p></th>
      </tr>

      <?php

      $conn = mysqli_connect("localhost","root","","thesystem");

    	if(!$conn){
    		die("connection failed: " . mysqli_connect_error());
    	}

      $sql = "SELECT * from studentinfo where advisorID = ".$_SESSION['$uname'];

        $result = mysqli_query($conn,$sql);

        if (mysqli_num_rows($result)>0){

          while($row = mysqli_fetch_assoc($result)){
            $status1;
            if($row["GPA"]<1.71){
              $status1 = "Probation";
            }else if($row["GPA"]<2.5){
              $status1 = "Pre-Probation";
            }else if($row["GPA"]<4.0){
              $status1 = "OK";
            }

            echo "
              <tr>
                  <td><p>".$row["ID"]."</p></td>
                  <td><p>".$row["Fname"]." ".$row["Lname"]."</p></td>
                  <td><p>".$status1."</p></td>
                  <td><p>".$row["GPA"]."</p></td>
              </tr>

              ";


          }mysqli_close($conn);
        }else{
          echo "Error: ".mysqli_error($conn);
          mysqli_close($conn);
          echo"User Not Found login unsuccesfull";
          }
        if(!$result){
          echo "Error: ".mysqli_error($conn);
        }
        ?>

			<tr>
					<td colspan = '2' align = 'right'><input type="button" value="Return" onclick="location.href='AdvMenu.php'"/></td>
					<td colspan = '2' align = 'left'></td>
					<td> </td><td> </td><td></td> <td><p text-align = 'right'></p> </td>
			</tr>

			</table>
			</form>

		</fieldset>
		</div>
</body>
