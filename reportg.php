<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
          background-color:grey;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
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

        .button-container {
            padding: 20px;
        }

        .button {
            background-color: #0074d9;
            color: white;
            text-align: center;
            padding: 15px 30px;
            margin: 10px 0;
            border-radius: 5px;
            text-decoration: none;
            display: block;
        }

        .button:hover {
            background-color: #0056b3;
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
        <div class="button-container">
            <a href="emp_report.php" class="button">Emp Report</a>
            <a href="task_report.php" class="button">Task Report</a>
            <a href="activity_report.php" class="button">Activity Report</a>
            <a href="assign_report.php" class="button">Assign Report</a>
        </div>
    </div>
</body>
</html>
