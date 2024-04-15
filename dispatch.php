<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid">
  <img src="logo.jpg" alt="Logo" width="60" height="60" class="d-inline-block align-text-top">
    <a class="navbar-brand" href="index.php"><h2>Shreeji Engineering</h2></a>
    <form class="d-flex mt-1" role="search">
  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
  <button class="btn btn-outline-success" type="submit">Search</button>
</form>
<a class="btn btn-outline-success" type="submit" href="index.php">SignOut</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h3 class="offcanvas-title" id="offcanvasNavbarLabel">Bit More.............</h3>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-1">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dispatch.php">Dispatch List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Final PO List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Outward Material List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Stock List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">New PO List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">PDIR List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Inward Material List</a>
          </li>
        </ul>
    </div>
</div>
</div>
</nav>
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
      <form class="row g-3" action="dispatch1.php" onsubmit="return isvalid()" method ="POST">
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
<button type="button" class="btn btn-outline-primary">View Dispatch List</button>
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
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>02/04/2022</td>
      <td>SENG/22-23/001</td>
      <td>1</td>
      <td>OVAL 2840</td>
      <td>1000018886</td>
      <td>20</td>
      <td>0</td>
      <td>20</td>
      <td>13</td>
      <td>1</td>
      <td>Idler Pulley Shaft</td>
      <td><button class="btn btn-success btn-primary btn-sm" type="submit" name="submit">Update</button>
        <a class="btn btn-info btn-danger btn-sm" type="submit" name="cancel">Delete</a><br>
        </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>02/04/2022</td>
      <td>SENG/22-23/001</td>
      <td>2</td>
      <td>OVAL 2840</td>
      <td>1000018890</td>
      <td>20</td>
      <td>0</td>
      <td>20</td>
      <td>18</td>
      <td>6</td>
      <td>Ring For Idler Pulley</td>
      <td><button class="btn btn-success btn-primary btn-sm" type="submit" name="submit">Update</button>
        <a class="btn btn-info btn-danger btn-sm" type="submit" name="cancel">Delete</a><br>
        </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>02/04/2022</td>
      <td>SENG/22-23/001</td>
      <td>3</td>
      <td>Textile Regular</td>
      <td>1000018891</td>
      <td>12</td>
      <td>2</td>
      <td>24</td>
      <td>4</td>
      <td>8</td>
      <td>Washer For Idler Pulley</td>
      <td><button class="btn btn-success btn-primary btn-sm" type="submit" name="submit">Update</button>
        <a class="btn btn-info btn-danger btn-sm" type="submit" name="cancel">Delete</a><br>
        </td>
    </tr>
  </tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>