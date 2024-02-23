<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
        die("Conection failed:". $conn->connection_error);
    }

    $Eid=$_POST['eid'];
    $telephone=$_POST['telephone'];
    $Name=$_POST['name'];
    $email=$_POST['email'];
    $Designation=$_POST['designation'];

    $sql = "INSERT INTO employee(eid, telephone,name,email,designation)
            VALUES ('$Eid','$telephone','$Name','$email','$Designation')";

    if($conn->query($sql) === TRUE){
        echo "Employee data added sucessfully.";
    } else {
        echo "Error:". $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>