<?php
    include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <div id = "form">
        <h1>Login Form</h1>
        <form name = "form" action="login.php" onsubmit="return isvalid()" method ="POST">
        <label>Username: </label>
        <input type="text" id="user" name="user"></input>
        <br>
        <br>
        <label>Password: </label>
        <input type="password" id="pass" name="pass"></input>
        <br>
        <br>
        <input type="submit" id="btn" value="Login" name="submit"></input>
        
    </form>
</div>
<script>
    function isvalid(){
        var user = document.form.user.value;
        var user = document.form.pass.value;
        if(user.length ==""&& pass.length==""){
            alert("Username / Password field is emtpy !!!");
            reutn false;
        }
    }
</script>
</body>
</html>