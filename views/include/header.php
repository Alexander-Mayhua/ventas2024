<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alexander</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<script>
    const base_url = '<?php echo BASE_URL;?>';
</script>
</head>

<body>
    <div class="container-fluid p-0 row ">
        <nav class="navbar navbar-expand-lg " style="background-color: #08b93a;" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="./views/plantilla/logo.jpg" alt="" width="100" height="50" style="border-radius: 10PX;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?php echo BASE_URL ?>inicio" style="color: #000;">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL ?>carrito" style="color: #000;">CARRITO </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" style="color: #000;">
                                CATEGORIA
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo BASE_URL ?>varones">varones</a></li>
                                <li><a class="dropdown-item" href="<?php echo BASE_URL ?>mujeres">mujeres</a></li>
                                <li><a class="dropdown-item" href="<?php echo BASE_URL ?>niños">niños</a></li>
                                <li><a class="dropdown-item" href="<?php echo BASE_URL ?>niñas">niñas</a></li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?php echo BASE_URL ?>informacion"
                                style="color: #000;">INFORMACION</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?php echo BASE_URL ?>perfil" style="color: #000;">PERFIL</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2 " type="search" placeholder="Buscar Información"
                            aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                        <a class="btn btn-danger" href="login.html">cerrar</a>
                    </form>

                </div>

            </div>
        </nav>