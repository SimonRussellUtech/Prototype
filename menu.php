<!document html>
<html>
<!--Developer Comments
--Project Members:Brianna, Ryhane R, Shemar T, Zoya N, Simon R.
--Course Title: Major Project
--Date 29/2/2020
--Project Overview:
--
--
-->
<?php

	session_start();
	var_dump($_SESSION);
	foreach($_SESSION as $key=>$value){
		$$key = $value;
	}
  $status1;
  if($_SESSION['$gpa']<1.71){
    $status1 = "Probation";
  }else if($_SESSION['$gpa']<2.5){
    $status1 = "Pre-Probation";
  }else if($_SESSION['$gpa']<4.0){
    $status1 = "OK";
  }

?>
<head>
  <meta charset="utf-8">
  <title>THE SYSTEM</title>
  <!--link to javascript file -->
<script src = "Scripts/Questions.js"></script>


  <!--link to CSS file -->
<link rel="stylesheet" type="text/css" href='CSS/project css.css'>

</head>


<body class="coffee">
<div id="container">

  <fieldset class="questionArea">
  <div id="questionArea">
    <h2 id="questionToAsk" class="questionStyle"> WELCOME</h2><br>

  </div><!--questionArea-->


<div id="questionArea">
  <p> MENU </p><br>
  <div id="btnArea">
    <form method = "POST" action= "logout.php" >
    <input type="button"  value="View Status" onclick="location.href='status.php'"/>
    <!--input type="button"  value="Previous Advice" onclick="location.href='history.php'"/>
    <input type="button"  value="Check in" onclick="location.href=''"/>
    <input type="button" onClick="location.href='hometab.php'" value='Advisement program'-->
    <?php

						if($_SESSION['$status1']=="Probation" || $_SESSION['$status1']=="Pre-Probation"){

            //echo"<input type='button'  value='Homework' onclick='location.href='homework.php'/>";
						}
						//<input type='submit' class = '<?php echo $class;?//>' value = 'User Accounts' name='admin'>
					?>


      <button type="submit" class="cancelbtn" name="logout">Log Out</button>
    </form>

  </div><!-- btnArea"-->


</div><!--questionArea-->

</fieldset>



</div>
</body>
