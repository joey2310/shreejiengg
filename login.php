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
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SHREEJI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
    <style>
    body {
        font-family: "Inter", sans-serif;
    }
    </style>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
</head>

<body>
    <div class="w-100">
        <div class="row w-100 d-flex">
            <div class="col-md-7">
                <div class="container text-white p-5">
                    <img src="logo.jpg" alt="Logo" width="220" height="220"
                        class="logo rounded mx-auto d-block img-fluid">
                    <p class="fst-italic fw-bold px-5" style="font-size:7rem;">SHREEJI</p>
                    <p class="fst-italic fw-bold" style="font-size:5rem;">ENGINEERING</p>
                    <div class="footer-social d-flex justify-content-evenly align-item-center p-5">
                        <a href=""><i class="fab fa-instagram fs-1 m-3 text-white"></i></a>
                        <a href=""><i class="fab fa-linkedin-in fs-1 m-3  text-white"></i></a>
                        <a href=""><i class="fab fa-facebook-square fs-1 m-3  text-white"></i></a>
                        <a href=""><i class="fab fa-github fs-1 m-3  text-white"></i></a>
                        <a href=""><i class="fab fa-whatsapp fs-1 m-3  text-white"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 p-5 py-5 d-flex flex-column justify-content-center align-item-center">
                <div class="card">
                    <div class="signup__form rounded-5">
                        <form name="form" action="login.php" method="POST">
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" type="text" id="user" name="username" required></input>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" id="pass" name="password" required></input>
                            </div>
                            <div class="m-t-lg">
                                <ul class="list-inline">
                                    <li>
                                        <input class="btn btn--form" type="submit" id="btn" value="Login"
                                            name="submit"></input>
                                    </li>
                                    <li>
                                        <a class="signup__link" href="index.php">Not a Member? Click to Register</a>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>