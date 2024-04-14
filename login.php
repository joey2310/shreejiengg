<?php
    include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div id = "form">
        <h1>Login Form</h1>
        <form name = "form" action="login1.php" method ="POST">
        <label>Username: </label>
        <input type="text" id="user" name="username"></input>
        <br>
        <br>
        <label>Password: </label>
        <input type="password" id="pass" name="password"></input>
        <br>
        <br>
        <input type="submit" id="btn" value="Login" name="submit"></input>
    </form>
</div>
</body>
</html>