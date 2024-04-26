<?php
    include("connection.php");
    if(isset($_POST['submit'])){
        $username =  $_POST['username'];
        $password = $_POST['password'];

        $sql = "select * from signup where username = '$username' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count==1){
            header("Location:home.php");
        }
        else{
            echo'<script>
            window.location.href = "login.php" ;
            alert("Login failed. Invalid username or password!!!")
            </script>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div id = "form">
        <h1>Login Form</h1>
        <form name = "form" action="login.php" method ="POST">
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