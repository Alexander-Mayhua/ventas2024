<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body style="background-color: rgb(14, 170, 191);" >
    <div class="container"  >
       
        <div class="row justify-content-center mt-5 " >
           
            <div class="col-md-4 mt-5" >
             
                <div class="card mt-5" style="background-color: rgba(2, 2, 2, 0.721); border-radius: 5%;">
                    <div class="card-body " style="background-color: rgba(217, 214, 214, 0.721); border-radius: 5%;">

                        <div class="text-center p-3 border-radius:5px"><img src="logo.jpg" alt="" height="80">
                        </div>

                        <h5 class="card-title text-center">Iniciar Sesión</h5>
                        <form action="" method="post">
                            <div class="form-group mt-5">
                                <label for="username">Nombre de Usuario</label>
                                <input type="text" class="form-control" id="username" name="username" >
                            </div>
                            <div class="form-group mt-5">
                                <label for="password">Contraseña</label><br>
                                <input type="password" class="form-control" id="password" name="password" >
                            </div>

                            <div class=" col-lg-12 text-center mt-5">
                           <a href="<?php echo BASE_URL ?> ingresar" class="btn btn-primary ">Ingresar</a>
                           </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
