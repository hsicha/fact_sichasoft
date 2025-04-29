<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

if (!isset($_SESSION["nombre"]))
{
  header("Location: login.html");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SICHASOFT</title>
    <!-- Bootstrap -->
    <link href="../public/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../public/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../public/nprogress/nprogress.css" rel="stylesheet">
    <!-- DATATABLES -->
    <link href="../public/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../public/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../public/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../public/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../public/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../public/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
    <div class="container body">
        <div class="main_container ">
            <h2 class="text-center">Bienvenido: <?php echo $_SESSION['nombre']; ?> </h2>
            <div class="row ml-3 mr-3">
                <div class="col-lg-4 ">
                    <div class="card">
                        <div class="card-header text-center  text-white" style="background-color: #2A3F54 !important;">
                            <h1><?php echo $_SESSION["nombre_comercial"] ?><br></h1>

                            <h6> <?php echo $_SESSION["nombre_empresa"] ?> </h6>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">RUC: <?php echo $_SESSION["ruc_empresa"]?> <span
                                    class="pull-right badge bg-blue"><i class="fa fa-list-ol"
                                        aria-hidden="true"></i></span></li>
                            <li class="list-group-item">DIRECCION:<span class="pull-right badge bg-info"><i
                                        class="fa fa-map-marker" aria-hidden="true"></i></span>
                                <?php echo $_SESSION["direccion_empresa"]?></li>
                            <li class="list-group-item">TEL/CELULAR: <?php echo $_SESSION["tel_empresa"] ?> <span
                                    class="pull-right badge bg-green"><i class="fa fa-phone"
                                        aria-hidden="true"></i></span></li>
                        </ul>
                        <div class="card-footer ">
                            <li class style="list-style: none;"><a href="../ajax/usuario.php?op=salir" class=""> CERRAR
                                    SESION <span class="pull-right badge bg-red"><i class="fa fa-sign-out"
                                            aria-hidden="true"></i></span></a></li>

                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card text-center">
                        <div class="card-header bg-warning text-white" style="background-color: #2A3F54 !important;">
                            <h1>SUCURSALES ASIGNADAS</h1>
                            <h6>SELECCIONE UNAS DE LAS SUCURSALES PARA INGRESAR AL SISTEMA</h6>
                        </div>
                        <div class="card-body">
                            <table id="tbllistado_sucursal"
                                class="table table-striped table-bordered dt-responsive nowrap table-sm" cellspacing="0"
                                width="100%">
                                <thead style="background-color:#2A3F54; color:white">
                                    <tr>
                                        <th>N°</th>
                                        <th>MESA</th>
                                        <th>ACCEDER</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Aquí se llena desde la bd -->

                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer text-muted">
                            SOFTWARE DESAROLLADO POR SICHASOFT
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="../public/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../public/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../public/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../public/nprogress/nprogress.js"></script>
    <!-- Datatables -->
    <!-- Datatables -->
    <script src="../public/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../public/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../public/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../public/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../public/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../public/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../public/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../public/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../public/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../public/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../public/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../public/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../public/jszip/dist/jszip.min.js"></script>
    <script src="../public/pdfmake/build/pdfmake.min.js"></script>
    <script src="../public/pdfmake/build/vfs_fonts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Custom Theme Scripts -->
    <script src="../public/build/js/custom.min.js"></script>
    <script type="text/javascript" src="scripts/acceder.js"></script>
    <?php 

ob_end_flush();
?>
</body>

</html>