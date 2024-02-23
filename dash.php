<?php 


$username="user";
$password = "12345";

session_start();

            if($_POST['username'] == $username && $_POST['password']==$password){
                $_SESSION['username'] = $username;

                echo "Welcome to dashboard " .$_SESSION['username']. ".<br>";
            }

            else{
                echo "<script>alert ('Username and Password is Incorrect')</script>";
                header("Location: login.php");
                exit();
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
     body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('Emp.webp'); 
            background-size: cover; 
            display: flex;
        }

        .menu {
            width: 20%;
            background-color: #333;
            color: white;
            padding: 10px;
            position: fixed;
            height: 100%;
            overflow-y: auto;
        }

        .menu a {
            display: block;
            margin: 10px 0;
            padding: 10px 20px;
            background-color: #0074d9;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .menu a:hover {
            background-color: #0056b3;
        }

        .menu .button1 {
            background-color: green;
        }

        .menu .button2 {
            background-color: gold;
        }

        .content {
            margin-left: 30%;
      
        }

        .logout-button {
            position: absolute;
            top: 10px;
            right: 10px;
        }
        
    </style>
</head>

<body>
    <div class="menu">
        <a href="emp.html">Employee Register</a>
        <a href="task.html">Task Registration</a>
        <a href="Activity.php">Task Activity</a>
        <a href="Assign.php">Assign Tasks</a><br><br>
        <a href="reportg.php">Report</a><br><br>
        <a href="login.php" class="button1">Logout</a><br>
    </div>

    <div class="content">
        <h1><center>Employee Management System</center></h1><br><br><br>
        
    </div>
</body>
</html>
