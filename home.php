<!doctype html>
<html lang="en" data-bs-theme="dark">

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
    }
    </style>
</head>

<body>
    <nav class="navbar fixed-top">
        <div class="container-fluid">
            <img src="logo.jpg" alt="Logo" width="60" height="60" class="d-inline-block align-text-top">
            <a class="navbar-brand text-black" href="home.php">
                <h1>Shreeji Engineering</h1>
            </a>
            <form class="d-flex mt-1" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-secondary" type="submit">Search</button>
            </form>
            <a class="btn btn-secondary" type="submit" href="index.php">Logout</a>
            <button class="navbar-toggler bg-black" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h3 class="offcanvas-title color-black" id="offcanvasNavbarLabel">Bit More.............</h3>
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
    <div class="row row-cols-2 row-cols-md-4  pt-5 g-3">
        <div class="col-3 px-5 p-5">
            <div class="card">
                <div class="card-body ">
                    <h5 class="card-title">Dispatch</h5>
                    <p class="card-text">"Dispatch: Your Reliable Connection. We provide efficient and dependable
                        logistical solutions tailored to your needs. Whether it's delivery, transportation, or
                        coordination, trust Dispatch to get the job done swiftly and securely."</p>
                    <div class="text-center">
                        <a class="btn btn-outline-success text-center" href="dispatch.php">Dispatch List</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 px-5 p-5">
            <div class="card">
                <div class="card-body ">
                    <h5 class="card-title">Purchase Order</h5>
                    <p class="card-text">"Purchase Order: Streamlining Procurement. A formal document issued by a buyer
                        to a seller, specifying the details of goods or services to be purchased. It serves as a
                        contract, outlining quantities, prices, delivery dates, and terms, facilitating smooth
                        transactions and clear communication between parties."</p>
                    <div class="text-center">
                        <a class="btn btn-outline-success" href="po.php">Purchase Order</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 p-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Stock</h5>
                    <p class="card-text">"Stock: Fueling Markets and Growth. It represents ownership in a corporation
                        and signifies a claim on assets and earnings. Whether it's shares traded on exchanges or
                        inventory held by a business, stock embodies value and potential for investors and businesses
                        alike, driving economic activity and prosperity."</p>
                    <div class="text-center">
                        <a class="btn btn-outline-success" href="stock.php">Stock</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 p-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Machine</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <div class="text-center">
                        <a class="btn btn-outline-success" href="machine.php">Machine</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 p-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Outward Material</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <div class="text-center">
                        <a class="btn btn-outline-success" href="out.php">Outward Material</a>
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