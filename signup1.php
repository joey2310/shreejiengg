<?php
    include("connection.php");
    if(isset($_POST['submit'])){
        $firstName =  $_POST['firstName'];
        $lastName =  $_POST['lastName'];
        $username = $_POST['username'];
        $dob =  $_POST['dob'];
        $email =  $_POST['email'];
        $password =  $_POST['password'];

        $sql = "INSERT INTO signup(firstName, lastName, username, dob, email, password) values('$firstName', '$lastName', '$username', '$dob', '$email', '$password')";
        header("Location:login.php");
        $result = mysqli_query($conn, $sql);
    }
?>