<?php
// Placeholder for login logic
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // In a real application, you would validate the credentials against a database
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Example condition: accept a specific username and password
    if ($username == 'admin' && $password == 'password') {
        echo '<p style="color: green;">Login successful!</p>';
    } else {
        echo '<p style="color: red;">Invalid username or password!</p>';
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="Usercss.css">
</head>
<body>

<div class="login-container">
    <form action="index.php" method="post">
        <h2>Login</h2>
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>