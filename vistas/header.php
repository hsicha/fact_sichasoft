<?php
if (strlen(session_id()) < 1) 
  session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="views/images/favicon.ico" type="image/ico" />

    <title><?php echo $_SESSION["nombre_comercial"] ?></title>

    <!-- Bootstrap -->
    <link href="../public/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../public/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../public/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../public/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="../public/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../public/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="../public/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Bootstrap Select-->
    <link href="../public/bootstrap/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <!-- Datatables -->

    <link href="../public/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../public/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../public/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../public/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../public/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../public/build/css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/autocomplete/jquery-ui.min.css">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title">
                        <a href="escritorio.php" class="site_title"><i class="fa fa-desktop" aria-hidden="true"></i>
                            <span><?php echo $_SESSION["nombre_comercial"] ?></span></a>
                    </div>

                    <div class="clearfix"></div>

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <?php if($_SESSION["escritorio"] == 1)
                          { 
                           echo '<ul class="nav side-menu">
                                <li>
                                    <a href="escritorio.php">
                                        <i class="fa fa-home"></i> Escritorio
                                    </a>
                                </li>
                            </ul>';
                          }
                            ?>

                            <ul class="nav side-menu">
                                <?php 
            if ($_SESSION['acceso']==1)
            {
                echo ' <li><a><i class="fa fa-cog" aria-hidden="true"></i> Acceso <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="perfil.php">Perfiles</a></li>
                                        <li><a href="usuario.php">Usuarios</a></li>
                                        <li><a href="usuario_sede.php">Usuario Sede</a></li>
                                        <li><a href="empresa.php">Empresas</a></li>
                                        <li><a href="sedes.php">Sedes</a></li>

                                    </ul>
                                </li>';
            }
            ?>


                                <?php 
            if ($_SESSION['almacen']==1)
            {
              echo '
                                <li><a><i class="fa fa-archive"></i> Almacén <span

                                    class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="categoria.php">Categorias</a></li>
                                        <li><a href="marca.php">Marcas</a></li>
                                        <li><a href="articulo.php">Productos</a></li>
                                    </ul>
                                </li>';
            }
            ?>
                                <?php 
            if ($_SESSION['compras']==1)
            {
              echo '<li><a><i class="fa fa-cart-plus" aria-hidden="true"></i> Compras <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">

                                        <li><a href="proveedor.php">Proveedores</a></li>
                                        <li><a href="ingreso.php">Compras</a></li>

                                    </ul>
                                </li>';
            }
            ?>
                                <?php

            if($_SESSION['tipodoc']==1){
            echo   ' <li id="ltipodoc"> <a href="tipodoc.php">
                    <i class="fa fa-file-text" aria-hidden="true"></i> <span>Tipo Documento</span>
                    </a>
                    </li>';

            }
            ?>
                                <?php 
            if ($_SESSION['ventas']==1)
            {
              echo '<li><a><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Ventas <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">

                                        <li><a href="cliente.php">Clientes</a></li>
                                        <li><a href="venta.php">Ventas</a></li>

                                    </ul>
                                </li>';
            }
            ?>
                                <?php 
            if ($_SESSION['orden_serv']==1)
            {
              echo '<li><a><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Orden Servicio <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">

                                        <li><a href="orden_servicio.php">Nuevo</a></li>
                                        <li><a href="estado_orden.php">Estado</a></li>
                                        <li><a href="tipo_servicio.php">Consultas</a></li>

                                    </ul>
                                </li>';
            }
            ?>
            <?php 
                        if ($_SESSION['consultac']==1)
                        {
                            echo '<li><a><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Reporte Compras <span
                            class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">

                        <li><a href="comprasfecha.php">Reporte General</a></li>
                     

                    </ul>
                </li>';
                        }
                        ?>
                         <?php 
            if ($_SESSION['consultav']==1)
            {
                echo '<li><a><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Reporte Ventas <span
                class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">

            <li><a href="ventasfechacliente.php">Reporte General</a></li>
         

        </ul>
    </li>';
            }
            ?>

                              
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right mr-4">
                            <li class="nav-item dropdown open">
                                <!-- <a href="javascript:;" class="user-profile" style="font-size: 20px;">
                                    <i class="fa fa-bell mr-2" style="font-size: 28px;"></i>
                                </a> -->
                                <a href="javascript:;" class="user-profile" aria-haspopup="true" id="navbarDropdown"
                                    data-toggle="dropdown" aria-expanded="false" style="font-size: 20px;">
                                    <i class="fa fa-user" style="font-size: 28px;"></i>
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right bg-success"
                                    aria-labelledby="navbarDropdown">
                                    <span class="dropdown-item"><?php echo $_SESSION['nombre']; ?></span>
                                    <span class="dropdown-item">SUCURSAL <?php echo $_SESSION['sede']; ?></span>
                                    <a class="dropdown-item btn btn-default "
                                        href="../vistas/acceder.php"><i
                                            class="fa fa-sign-out pull-right"></i> Cambiar Sucursal</a>
                                    <a class="dropdown-item btn btn-default"
                                        href="../controller/usuario.php?op=salir"><i
                                            class="fa fa-sign-out pull-right"></i> Cerrar sesión</a>
                                </div>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>