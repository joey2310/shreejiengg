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
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dispatch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <?php
    include("./layouts/nav.php");
  ?>
<br>
<br>
<br>  
<br>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add New Material for Dispatch
</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-l">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Material for Dispatch</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="row g-3" action="dispatch.php" onsubmit="return isvalid()" method ="POST">
      <div class="modal-body">
      <div class="form-floating mb-5">
  <input type="date" class="form-control" id="floatingInput" name="date" placeholder="name@example.com">
  <label for="floatingInput">Date</label>
</div>
<div class="form-floating mb-5">
  <input type="text" class="form-control" id="floatingPassword" name="challan" placeholder="Password">
  <label for="floatingPassword">Challan No.</label>
</div>
<div class="form-floating mb-5">
  <input type="number" class="form-control" id="floatingPassword" name="num" placeholder="Password">
  <label for="floatingPassword">#</label>
</div>
<div class="form-floating mb-5">
  <input type="text" class="form-control" id="floatingInput" name="sap" placeholder="name@example.com">
  <label for="floatingInput">Sap Code</label>
</div>
<div class="form-floating mb-5">
  <input type="text" class="form-control" id="floatingPassword" name="dispatchqty" placeholder="Password">
  <label for="floatingPassword">Dispatch Qty</label>
</div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-primary">Add</button>
      </div>
</form>
    </div>
  </div>
</div>
<button type="button" class="btn btn-outline-primary">Print Dispatch List</button>
<br>
<br>
<div class="table-responsive-sm">
<table class="table table-hover table-sm">
  <thead>
    <tr>
      <th scope="col">Sr.No</th>
      <th scope="col">Date</th>
      <th scope="col">Challan No.</th>
      <th scope="col">#</th>
      <th scope="col">Machine</th>
      <th scope="col">Sap Code</th>
      <th scope="col">Dispatch Qty</th>
      <th scope="col">Reject Qty</th>
      <th scope="col">Approved Qty</th>
      <th scope="col">Dispatch Total</th>
      <th scope="col">Pending</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
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
    <td>" . $row["num"]. "</td>
    <td>" . $row["sap"]. "</td>
    <td>" . $row["dispatchqty"]. "</td>
    <td>" . $row["date"]. "</td>
    <td>" . $row["date"]. "</td>
    <td>" . $row["date"]. "</td>
    <td>" . $row["date"]. "</td>
    <td>" . $row["date"]. "</td>
    <td><button >Edit</button></td>
    <td><button>Delete</button></td>
</tr>";
  }
?> 
</tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>