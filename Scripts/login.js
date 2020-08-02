


function check(form){
  <?php

  $conn = mysqli_connect("localhost","root",""," theSystem");

  if(!$conn){
    die("connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT * from studentinfo where ID = ".form.userid.value;

  $result = mysqli_query($conn,$sql);

  if (mysqli_num_rows($result)>0){

    while($row = mysqli_fetch_assoc($result)){

      $uname = $row["ID"];
      $fname = $row["Fname"];
      $lname = $row["Lname"];
      $psw = $row["Pass"];
      $gpa = $row["GPA"];
      $stage = $row["Stage"];

        mysqli_close($conn);
    }

  }else{
    mysqli_close($conn);
    echo"User Not Found login unsuccesfull";

    }
  if(!$result){
    echo "Error: ".mysqli_error($conn);
  }
  ?>
  if(form.userid.value == "<?php $uname ?>" && form.pswrd.value=="<?php $psw ?>"){

    alert("Welcome")

  }



}
