<?php
    include("connection.php");
    if(isset($_POST['submit'])){
        $date =  $_POST['date'];
        $sap =  $_POST['sap'];
        $machine=  $_POST['machine'];
        $discription =  $_POST['discription'];

        $sql = "INSERT INTO machine (date, sap, machine, discription) values('$date', '$sap', '$machine', '$discription' )";
        header("Location:machine.php");
        $result = mysqli_query($conn, $sql);
    }
?>
<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    body {
        background-image: url('bg.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        font: 100% "Open Sans", "Roboto", arial, sans-serif;
        margin-top: 8%;
    }

    button {
        background-color: grey;
        color: white;
        border-radius: 6px;
    }
    </style>
</head>

<body>
    <?php
    include("./layouts/nav.php");
  ?>
    <button type="button" class="btn btn-dark ms-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add New Machine Name
    </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-l">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Material for Dispatch</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="row g-1" action="machine.php" onsubmit="return isvalid()" method="POST">
                    <div class="modal-body">
                        <div class="form-floating mb-1">
                            <input type="date" class="form-control" id="floatingInput" name="date"
                                placeholder="name@example.com">
                            <label for="floatingInput">Date</label>
                        </div>
                        <div class="form-floating mb-1">
                            <input type="text" class="form-control" id="floatingInput" name="sap"
                                placeholder="name@example.com">
                            <label for="floatingInput">Sap Code</label>
                        </div>
                        <div class="form-floating mb-1">
                            <input type="text" class="form-control" id="floatingPassword" name="machine"
                                placeholder="Password">
                            <label for="floatingPassword">Machine Name</label>
                        </div>
                        <div class="form-floating mb-1">
                            <input type="text" class="form-control" id="floatingPassword" name="discription"
                                placeholder="Password">
                            <label for="floatingPassword">Discription</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="table-responsive-sm p-5 rounded">
        <table class="table table-hover table-sm text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Sr.No</th>
                    <th scope="col">Date</th>
                    <th scope="col">Sap Code</th>
                    <th scope="col">Machine</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

  $sql = "SELECT * FROM machine";
  $result = mysqli_query($conn, $sql);

  if(!$result){
    die("INVALID QUERY:".$conn->error);
  }

  while($row = $result->fetch_assoc()){
  echo"
  <tr>
    <td>" . $row["id"]. "</td>
    <td>" . $row["date"]. "</td>
    <td>" . $row["sap"]. "</td>
    <td>" . $row["machine"]. "</td>
    <td>" . $row["discription"]. "</td>
    <td><button>Edit</button>
    <button>Delete</button></td>
</tr>";
  }
?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>