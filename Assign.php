<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Assign Task</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
        }

        .sidebar {
            background-color: #333;
            color: white;
            padding: 10px;
            height: 100%;
            overflow-y: auto;
            width: 20%; /* Adjust the width for the sidebar */
        }

        .sidebar a {
            display: block;
            margin: 10px 0;
            padding: 10px 20px;
            background-color: #0074d9;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: #0056b3;
        }

        .div1 {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 80%; /* Adjust the width to leave space for the sidebar */
            margin: 0 auto;
        }

        h3 {
            text-align: center;
        }

        table {
            width: 100%;
        }

        table td {
            padding: 8px;
        }

        label {
            font-weight: bold;
        }

        select,
        input[type="date"],
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 2px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 2px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <a href="emp.html">Employee Register</a>
            <a href="task.html">Task Registration</a>
            <a href="Activity.php">Task Activity</a>
            <a href="Assign.php">Assign Tasks</a><br><br>
            <a href="login.php" class="button1">Logout</a><br>
        </div>

        <div class="div1">
            <h3>Assign tasks to employee</h3>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "project";

            $conn = mysqli_connect($servername, $username, $password, $dbname);
            ?>

            <form method="POST">
                <table>
                    <tr>
                        <td>
                            <label for="Eid">Eid</label>
                        </td>
                        <td>
                            <select name="eid" id="Eid" required>
                                <option value=""></option>
                                <?php
                                $query1 = mysqli_query($conn, "SELECT * FROM employee");
                                while ($row1 = mysqli_fetch_assoc($query1)) {
                                    echo "<option value='" . $row1['Eid'] . "'>" . $row1['Eid'] . "</option>";
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Tid">Tid</label>
                        </td>
                        <td>
                            <select name="Tid" id="Tid" required>
                                <option value=""></option>
                                <?php
                                $query2 = mysqli_query($conn, "SELECT * FROM task");
                                while ($row2 = mysqli_fetch_assoc($query2)) {
                                    echo "<option value='" . $row2['Tid'] . "'>" . $row2['Tid'] . "</option>";
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="dataassign">Dataassign</label>
                        </td>
                        <td>
                            <input type="date" id="dataassign" name="dataassign" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="activityid">Activityid</label>
                        </td>
                        <td>
                            <select name="activityid" id="activityid" required>
                                <option value=""></option>
                                <?php
                                $query3 = mysqli_query($conn, "SELECT * FROM taskactivities");
                                while ($row3 = mysqli_fetch_assoc($query3)) {
                                    echo "<option value='" . $row3['activityid'] . "'>" . $row3['activityid'] . "</option>";
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="remarks">Remarks</label>
                        </td>
                        <td>
                            <input type="text" id="remarks" name="remarks">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" id="submit" name="submit" value="Submit" required>
                        </td>
                    </tr>
                </table>
            </form> 

            <?php
            if (isset($_POST['submit'])) {
                $Eid = $_POST['eid'];
                $Tid = $_POST['Tid'];
                $dataassign = $_POST['dataassign'];
                $activityid = $_POST['activityid'];
                $remarks = $_POST['remarks'];

                $sql = "INSERT INTO assign (Eid, Tid, dataassign, activityid, remarks)
                        VALUES ('$Eid', '$Tid', '$dataassign', '$activityid', '$remarks')";

                if (mysqli_query($conn, $sql)) {
                    echo "Data inserted successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }

            mysqli_close($conn);
            ?>
        </div>
    </div>
</body>
</html>
