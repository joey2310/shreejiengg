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
<nav class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid">
  <img src="logo.jpg" alt="Logo" width="60" height="60" class="d-inline-block align-text-top">
    <a class="navbar-brand" href="home.php"><h1>Shreeji Engineering</h1></a>
    <form class="d-flex mt-1" role="search">
  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
  <button class="btn btn-outline-success" type="submit">Search</button>
</form>
<a class="btn btn-outline-success" type="submit" href="index.php">Home</a>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>