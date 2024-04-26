<?php
    include("connection.php")
?>
<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
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
  Add New Purchase Order
</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-l">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Purchase Order</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="row g-3" action="po.php" onsubmit="return isvalid()" method ="POST">
      <div class="modal-body">
      <div class="form-floating mb-4">
  <input type="text" class="form-control" id="floatingInput" name="pono" placeholder="name@example.com">
  <label for="floatingInput">PO No.</label>
</div>
<div class="form-floating mb-4">
  <input type="text" class="form-control" id="floatingPassword" name="sap" placeholder="Password">
  <label for="floatingPassword">Sap Code</label>
</div>
<div class="form-floating mb-4">
  <input type="number" class="form-control" id="floatingPassword" name="description" placeholder="Password">
  <label for="floatingPassword">Description</label>
</div>
<div class="form-floating mb-4">
  <input type="text" class="form-control" id="floatingInput" name="qty" placeholder="name@example.com">
  <label for="floatingInput">Quantity</label>
</div>
<div class="form-floating mb-4">
  <input type="text" class="form-control" id="floatingPassword" name="deliverydt" placeholder="Password">
  <label for="floatingPassword">Delivery Date</label>
</div>
<div class="form-floating mb-4">
  <input type="text" class="form-control" id="floatingPassword" name="postdt" placeholder="Password">
  <label for="floatingPassword">Posting Date</label>
</div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-primary">Add</button>
      </div>
</form>
    </div>
  </div>
</div>
<button type="button" class="btn btn-outline-primary">Print Purchase Order List</button>
<br>
<br>
<div class="table-responsive-xxl">
<table class="table table-hover table-xxl">
  <thead>
    <tr>
      <th scope="col">Sr.No</th>
      <th scope="col">PO No.</th>
      <th scope="col">Sap Code</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Delivery Date</th>
      <th scope="col">Posting Date</th>
      <th scope="col">Machine Name</th>
      <th scope="col">Action</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>