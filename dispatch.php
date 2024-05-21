<?php
    include("connection.php");
    if(isset($_POST['submit'])){
      $date =  $_POST['date'];
      $challan =  $_POST['challan'];
      $num = $_POST['num'];
      $sap =  $_POST['sap'];
      $dispatchqty =  $_POST['dispatchqty'];

      $sql = "INSERT INTO dispatch (date, challan, num, sap, dispatchqty) values('$date', '$challan', '$num', '$sap', '$dispatchqty')";
      header("Location:dispatch.php");
      $result = mysqli_query($conn, $sql);
  }
?>
<!doctype html>
<html lang="en" data-bs-theme="white">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dispatch</title>
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

    button{
        background-color: grey;
        color:white;
        border-radius: 6px;
    }
    </style>

</head>

<body>
    <?php
    include("./layouts/nav.php");
  ?>
    <button type="button" class="btn btn-dark ms-5" data-bs-toggle="modal" data-bs-target="#newdispatchmodal">
        Add New Material for Dispatch
    </button>
    <div class="modal fade" id="newdispatchmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-l">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Material for Dispatch</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="row g-1" action="dispatch.php" onsubmit="return isvalid()" method="POST">
                    <div class="modal-body">
                        <div class="form-floating mb-1">
                            <input type="date" class="form-control" id="floatingInput" name="date"
                                placeholder="name@example.com">
                            <label for="floatingInput">Date</label>
                        </div>
                        <div class="form-floating mb-1">
                            <input type="text" class="form-control" id="floatingPassword" name="challan"
                                placeholder="Password">
                            <label for="floatingPassword">Challan No.</label>
                        </div>
                        <div class="form-floating mb-1">
                            <input type="number" class="form-control" id="floatingPassword" name="num"
                                placeholder="Password">
                            <label for="floatingPassword">#</label>
                        </div>
                        <div class="form-floating mb-1">
                            <input type="text" class="form-control" id="floatingInput" name="sap"
                                placeholder="name@example.com">
                            <label for="floatingInput">Sap Code</label>
                        </div>
                        <div class="form-floating mb-1">
                            <input type="text" class="form-control" id="floatingPassword" name="dispatchqty"
                                placeholder="Password">
                            <label for="floatingPassword">Dispatch Qty</label>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center wid">
                        <button type="submit" name="submit" class="btn btn-dark">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-dark ms-5" data-bs-toggle="modal" data-bs-target="#dispatchlist"> Print
        Dispatch List</button>
    <div class="modal fade" id="dispatchlist" tabindex="-1" aria-labelledby="dispatchlist" aria-hidden="true">
        <div class="modal-dialog modal-l">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Material for Dispatch</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="row g-1" action="dispatch.php" onsubmit="return isvalid()" method="POST">
                    <div class="modal-body">
                        <div class="form-floating mb-1">
                            <input type="date" class="form-control" id="floatingInput" name="date"
                                placeholder="name@example.com">
                            <label for="floatingInput">Date</label>
                        </div>
                        <div class="form-floating mb-1">
                            <input type="text" class="form-control" id="floatingPassword" name="challan"
                                placeholder="Password">
                            <label for="floatingPassword">Challan No.</label>
                        </div>
                        <div class="form-floating mb-1">
                            <input type="number" class="form-control" id="floatingPassword" name="num"
                                placeholder="Password">
                            <label for="floatingPassword">#</label>
                        </div>
                        <div class="form-floating mb-1">
                            <input type="text" class="form-control" id="floatingInput" name="sap"
                                placeholder="name@example.com">
                            <label for="floatingInput">Sap Code</label>
                        </div>
                        <div class="form-floating mb-1">
                            <input type="text" class="form-control" id="floatingPassword" name="dispatchqty"
                                placeholder="Password">
                            <label for="floatingPassword">Dispatch Qty</label>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center wid">
                        <button type="submit" name="submit" class="btn btn-dark">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-dark ms-5" data-bs-toggle="modal" data-bs-target="#makechallan">Make New
        Challan</button>
    <div class="modal fade" id="makechallan" tabindex="-1" aria-labelledby="makechallan" aria-hidden="true">
        <div class="modal-dialog modal-l">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Make New Challan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="row g-1" action="dispatch.php" onsubmit="return isvalid()" method="POST">
                    <div class="modal-body">
                        <input type="date" class="form-control" id="floatingInput" name="date"
                            placeholder="name@example.com">
                        <label for="floatingInput">Date</label>
                    </div>
                    <div class="modal-footer justify-content-center wid">
                        <button type="submit" name="submit" class="btn btn-dark">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-hover table-sm text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col" style="width:.2rem;">Sr.No</th>
                    <th scope="col" style="width:6rem;">Date</th>
                    <th scope="col" style="width:9rem;">Challan No.</th>
                    <th scope="col" style="width:.1rem;"></th>
                    <th scope="col" style="width:10rem;">Machine</th>
                    <th scope="col" style="width:6rem;">Sap Code</th>
                    <th scope="col" style="width:8rem;">Dispatch Qty</th>
                    <th scope="col" style="width:6rem;">Reject Qty</th>
                    <th scope="col" style="width:8rem;">Approved Qty</th>
                    <th scope="col" style="width:8rem;">Dispatch Total</th>
                    <th scope="col" style="width:6rem;">Pending</th>
                    <th scope="col" style="width:21rem;">Description</th>
                    <th scope="col" style="width:8rem;">Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php

  $sql = "SELECT * FROM dispatch";
  $result = mysqli_query($conn, $sql);

  if(!$result){
    die("INVALID QUERY:".$conn->error);
  }

  while($row = $result->fetch_assoc()){
  echo";
    <tr>;
    <td>" . $row["id"]. "</td>
    <td>" . $row["date"]. "</td>
    <td>" . $row["challan"]. "</td>
    <td>" . $row["num"]. "</td>
    <td>" . $row["machine"]. "</td>
    <td>" . $row["sap"]. "</td>
    <td>" . $row["dispatchqty"]. "</td>
    <td>" . $row["date"]. "</td>
    <td>" . $row["date"]. "</td>
    <td>" . $row["date"]. "</td>
    <td>" . $row["date"]. "</td>
    <td>" . $row["date"]. "</td>
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