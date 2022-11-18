<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "head.php" ?>
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
                            <form class="d-flex" method="get" action="<?php echo RUTA;?>/buscar.php">
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
    <!---formulario donde vamos a pedir el usuario y contraseña para entrar en la sesion-->
    <div class="row justify-content-center">
    <div class="col-xs-3 col-md-3 col-lg-3">
        <h2>Iniciar Sesion</h2>
    </div>
    </div>
   
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
      <div class="row justify-content-center">
        <div class="col-xs-3 col-md-3 col-lg-3">
          <label for="exampleFormControlInput1" class="form-label">Usuario:
            <input type="text" class="form-control" id="exampleFormControlInput1" name="usuario">
          </label>

        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-xs-3 col-md-3 col-lg-3">
          <label for="exampleFormControlTextarea1" class="form-label">Contraseña:
            <input type="password" class="form-control" id="exampleFormControlInput1" name="contrasenia">
          </label>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-xs-3 col-md-3 col-lg-3">
        <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
          </label>
        </div>
      </div>
  </form>
 
    <footer>
        <?php require "footer.php" ?>
    </footer>
</body>

</html>