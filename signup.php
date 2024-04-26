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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="signup.css">
</head>
  <body>
    <div id="form">
        <h1 id="heading">SignUp Form</h1><br>
        <form class="row g-3" action="signup.php" onsubmit="return isvalid()" method ="POST">
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">First name</label>
    <input type="text" class="form-control" id="firstName" name="firstName" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="lastName" name="lastName" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Username</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2">@</span>
      <input type="text" class="form-control" id="username" name="username" aria-describedby="inputGroupPrepend2" required>
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationDefault03" class="form-label">Date of Birth</label>
    <input type="date" class="form-control" id="dob" name="dob" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault04" class="form-label">Email ID</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault05" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <div class="col-15">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
  </div>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>