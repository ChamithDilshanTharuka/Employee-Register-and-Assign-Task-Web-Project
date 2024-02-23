<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Activity detail form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #e3f2fd; /* New background color */
        margin: 0;
        padding: 0;
        display: flex; /* To create a flex layout for the navigation bar */
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        flex-grow: 1; /* To fill the remaining space in the flex layout */
    }

    h1 {
        text-align: center;
        color: #4caf50; /* New heading color */
    }

    form {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    select,
    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #2196F3; /* New input border color */
        border-radius: 4px;
        font-size: 16px;
    }

    button[type="button"],
    input[type="reset"],
    .btn {
        background-color: #FF5722; /* New button background color */
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
    }

    button[type="button"]:hover,
    input[type="reset"]:hover,
    .btn:hover {
        background-color: #E64A19; /* New button hover color */
    }

    ul.list-group {
        list-style-type: none;
        padding: 0;
    }

    ul.list-group li {
        margin-bottom: 5px;
        background-color: #f5f5f5; /* New list item background color */
        padding: 5px 10px;
        border: 1px solid #ccc; /* New list item border color */
        border-radius: 4px;
    }

    .btn-success {
        background-color: #4CAF50; /* New success button color */
    }

    .btn-success:hover {
        background-color: #45A049; /* New success button hover color */
    }

    .sidebar {
        width: 20%;
        background-color: #333;
        color: white;
        padding: 10px;
        height: 100%;
        overflow-y: auto;
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
    </style>
</head>
<body>

    <div class="sidebar">
        <a href="emp.html">Employee Register</a>
        <a href="task.html">Task Registration</a>
        <a href="Activity.php">Task Activity</a>
        <a href="Assign.php">Assign Tasks</a><br><br>
        <a href="login.php" class="button1">Logout</a><br>
    </div>

    <div class="container">
        <h1>Task Activity</h1>
        <form method="POST" form id="taskForm">
            <div class="mb-3">
                <label for="taskId" class="form-label">Task ID:</label>
                <select id="taskId" name="taskId" class="form-select" required>
                    <!-- Task ID options -->
                </select>
            </div>
            <div class="mb-3">
                <label for="activity" class="form-label">Activity:</label>
                <input type="text" id="activity" name="activity" class="form-control" required>
            </div>
            <button type="button" onclick="addTask()" class="btn btn-primary">Add Task</button>
            <input type="reset" value="Reset" class="btn btn-secondary">
        </form>
        <ul id="taskList" class="list-group mt-3"></ul>
        <button onclick="saveToDatabase()" class="btn btn-success mt-3">Save to Database</button>
    </div>
    

 
    <script>
        function addTask() {
            // Add task to the list
        }

        function saveToDatabase() {
            // Save tasks to the database
        }
    </script>
</body>
</html>
