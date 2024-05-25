<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap E-commerce Template</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">ShopLogo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Cart (0)</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Main Content -->
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Our Products</h1>
            <div class="row">
                <!-- Product 1 -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://via.placeholder.com/250" class="card-img-top" alt="Product 1">
                        <div class="card-body">
                            <h5 class="card-title">Product 1</h5>
                            <p class="card-text">$19.99</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://via.placeholder.com/250" class="card-img-top" alt="Product 2">
                        <div class="card-body">
                            <h5 class="card-title">Product 2</h5>
                            <p class="card-text">$29.99</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://via.placeholder.com/250" class="card-img-top" alt="Product 3">
                        <div class="card-body">
                            <h5 class="card-title">Product 3</h5>
                            <p class="card-text">$39.99</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-light text-center text-lg-start mt-5">
    <div class="text-center p-3">
        © 2023 ShopLogo:
        <a class="text-dark" href="https://yourshop.com/">yourshop.com</a>
    </div>
</footer>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
