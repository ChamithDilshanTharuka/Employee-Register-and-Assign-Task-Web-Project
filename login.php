<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
 <style>

body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 400px;
    margin: 0 auto;
    padding: 35px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0);
}

h2 {
    text-align: center;
    color: #333;
}

form {
    text-align: center;
}

label {
    font-weight: bold;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

button[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}
</style>

</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="dash.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <button type="submit">Login</button>
            
        </form>
        <?php
            if(isset($_GET['error']) && $_GET['error'] === 'incorrect'){
                echo "<p style='color: red;'>Username and Password are Incorrect</p>";
            }
        ?>
    </div>
    <div class="logout-button">
        
        <?php
            if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
                echo '<a href="logout.php">Logout</a>';
            }
        ?>
    </div>
</body>
</html>
