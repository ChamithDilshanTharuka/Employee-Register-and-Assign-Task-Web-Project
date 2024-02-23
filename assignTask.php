<?php

$Taskid=$_POST["taskId"];
$Activity=$_POST["activity"];
$database="project";

// create connection

$conn=mysqli_connect("localhost","root","","project");
// check connection 

if(!$conn){
	die("connection faild:".mysqli_connect_error());
}
   echo " connected sucessfuly";
   
   // insert data into tabel 
   
 $sql = "INSERT INTO taskactivities(ActivityId,Tid,Activity)  
 VALUES ('','$Taskid','$Activity')";
 
 if(mysqli_query($conn,$sql)){
    echo "new record create sucessfuly";
  }
  else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn); 

   
   
   
?>