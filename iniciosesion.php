<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Iniciar Sesion</title>
        <!-- Icono de Titulo (Favicon)-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Iconos de Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Tema Principal CSS (Incluye Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!--Navbar-->
    <?php
        include("navbar.php")
    ?>
        <!--Contenido-->
        <div class="container px-4 px-lg-5">
            <div id="login" class="margen-amplio-arriba fondo cafe">
                <h3 class="text-center text-black pt-5">Inicio de sesión
                </h3>
                    <div class="container">
                        <div id="login-row" class="row justify-content-center align-items-center">
                            <div id="login-column" class="col-md-6">
                                <div id="login-box" class="col-md-12">
            <!--Inicio de sesion Principal-->
    <!--Inicio Error de Logeo-->
    <style>
    /* Cuadro de Mensaje de Alerta */
    .alert {
        padding: 20px;
        background-color: #f44336; /* Rojo */
        color: white;
        margin-bottom: 15px;
    }

    /* Boton de Cerrar */
    .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }

    /* Cursor cerca de cerrar */
    .closebtn:hover {
        color: black;
    }
    </style>

    <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;
        </span>
        "El nombre de usuario o contraseña es incorrecto."
    </div>
    <!--Fin Error de Logeo-->
    <?php
        include("formulariosesion.php")
    ?>
                                </div>
                            </div>   
                        </div>
                    </div>
            </div>
        <!--Separador-->
    <?php
        include("separador.php")
    ?>
        <!--Fin de Contenido-->
        </div>
        <!--Pie de Pagina-->
    <?php
        include("pie.php")
    ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html> 