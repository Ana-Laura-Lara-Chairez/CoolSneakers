<?php
include 'verificar.php';
include 'session_validate.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>COOL SNEAKERS</title>

    <link rel="icon" href="img/logo.png" type="image/png">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/inicio_admin.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3 titulo-menu-admin">ADMINISTRADOR</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Secciones
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a href="admin/index.php" class="nav-link collapsed">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Carrusel de imágenes</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="php/emails.php" class="nav-link collapsed">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Enviar emails</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="index.php" class="nav-link collapsed">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Cerrar sesión</span>
                    <?php
                    session_destroy();
                    ?>
                </a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Administración de Cool Sneakers</h1>
                    </div>

                </nav>
                <!-- End of Topbar -->

                <div>
                    <p class="bienvenido"> Bienvenidx </p>
                </div>
                <div class="opciones">
                    <div class="op-admin">
                        <div class="opcion-carrusel">
                            <a class="btn-admin-carrusel" href="admin/index.php">Carrusel de imágenes</a>
                            <br><a href="admin/index.php"><img class="icono-productos" src="img/galeria.png" alt=""></a>
                        </div>

                        <div class="opcion-carrusel">
                            <a class="btn-admin-carrusel" href="php/emails.php">Enviar emails</a>
                            <br><a href="php/emails.php"><img class="icono-productos" src="img/correos.png" alt=""></a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


</body>

</html>