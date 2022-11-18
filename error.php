<?php
require "../BlogPHP/admin/config.php";
require "../BlogPHP/view/head.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php require "../BlogPHP/view/head.php";?>
</head>
<body>
<div class="container-fluid">
        <div class="row justify-content-center" id="header">
            <div class="col-xs-3 col-md-6 col-lg-6">
                <h1><a  id="single" href="<?php echo RUTA; ?>"> Mi primer blog</a></h1>
            </div>

            <div class="col-xs-3 col-md-6 col-lg-6">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#"><i class="fa-brands fa-facebook"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa-brands fa-twitter"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa-solid fa-envelope"></i></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa-brands fa-telegram"></i></i></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa-solid fa-phone"></i></a>
                                </li>
                            </ul>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-light" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="card mb-3">
            <img src='<?php echo RUTA; ?>/imagenes/5.jpg' class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Error</h5>

                    <p class="card-text">Error de conexion</p>

                </div>
            </div>

        </div>

    </div>
</div>
<footer>
<?php require "../BlogPHP/view/footer.php"; ?>  
</footer>
</body>
</html>


