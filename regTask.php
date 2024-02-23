<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
        die("Conection failed:". $conn->connect_error);
    }

    $Tid=$_POST['tid'];
    $Name=$_POST['name'];
    $Startdate=$_POST['startdate'];
    $enddate=$_POST['enddate'];
    $nature=$_POST['nature'];

    $sql = "INSERT INTO task(tid, name, startdate, enddate, nature)
            VALUES ('$Tid','$Name','$Startdate','$enddate','$nature')";

    if($conn->query($sql) === TRUE){
        echo "Task data added sucessfully.";
    } else {
        echo "Error:". $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>