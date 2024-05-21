<nav class="navbar fixed-top">
    <div class="container-fluid">
        <img src="logo.png" alt="Logo" width="60" height="60" class="d-inline-block align-text-top">
        <a class="navbar-brand pe-3" href="home.php">
            <h1>SHREEJI ENGINEERING</h1>
        </a>
        <form class="d-flex mt-1" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-dark" type="submit">Search</button>
        </form>
        <a class="btn btn-link" type="submit" href="home.php">Back</a>
        <a class="btn btn-link" type="submit" href="home.php">Home</a>
        <a class="btn btn-link" type="submit" href="contact.php">Contact Us</a>
        <a class="btn btn-link" type="submit" href="about.php">About Us</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
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
                        <a class="nav-link active" aria-current="page" href="out.php">Outward Material List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Stock List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="po.php">New PO List</a>
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