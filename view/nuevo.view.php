<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "head.php" ?>
</head>

<body>


    <div class="container-fluid">
        <div class="row justify-content-center" id="header">
            <div class="col-xs-3 col-md-6 col-lg-6">
                <h1><a id="single" href="<?php echo RUTA; ?>"> Mi primer blog</a></h1>
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
                            <form class="d-flex" method="get" action="<?php echo RUTA; ?>/buscar.php">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="busqueda">
                                <button class="btn btn-light" type="submit" name="enviar">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xs-6 col-md-6 col-lg-6">
                <h2>Nuevo Articulo</h2>
                <div class="card mb-3">
                    <!--<img src='' class="card-img-top" alt="...">-->
                    <div class="card-body">
                        <form style="padding: 20px;" enctype="multipart/form-data" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                            <div class="row justify-content-center">

                                <label class="col-sm-2 col-form-label">Titulo :</label>

                                <div class="col-xs-3 col-md-6 col-lg-6">

                                    <input type="text" class="form-control" placeholder="titulo" aria-label="First name" name="titulo"></br>


                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <label class="col-sm-2 col-form-label">Extracto:</label>
                                <div class="col-xs-3 col-md-6 col-lg-6">

                                    <input type="text" class="form-control" placeholder="extracto" aria-label="Last name" name="extracto"></br>

                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <label class="col-sm-2 col-form-label">Texto:</label>
                                <div class="col-xs-3 col-md-6 col-lg-6">

                                    <textarea type="text" class="form-control" placeholder="texto" aria-label="Biografia" name="texto"></textarea></br>

                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <label class="col-sm-2 col-form-label">Imagen:</label>
                                <div class="col-xs-3 col-md-6 col-lg-6">

                                    <input type="file" class="form-control" placeholder="thumb" aria-label="Imagen" name="thumb"></br>

                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xs-3 col-md-6 col-lg-6">

                                    <input type="submit" class="btn btn-primary" name="crear" value="Crear articulo">

                                </div>
                            </div>
                        </div>
                        </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer>
        <?php require "footer.php" ?>
    </footer>
</body>

</html>