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

    <!-- Custom Theme Style -->
    <link href="../public/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
    <div class="container body">
        <div class="main_container ">
            <h2 class="text-center">Bienvenido: <?php echo $_SESSION['nombre']; ?> </h2>
            <div class="row ml-5">
                <div class="col-lg-6 ">
                    <!-- page content -->
                    <div class="right_col" role="main">
                        <div class="">
                            <div class="page-title">
                                <div class="title_left">
                                    <h3>Plain Page</h3>
                                </div>

                                <div class="title_right">
                                    <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search for...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button">Go!</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="row">
                                <div class="col-md-12 col-sm-12  ">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Plain Page</h2>
                                            <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                        role="button" aria-expanded="false"><i
                                                            class="fa fa-wrench"></i></a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">Settings 1</a>
                                                        <a class="dropdown-item" href="#">Settings 2</a>
                                                    </div>
                                                </li>
                                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            Add content to the page ...
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /page content -->
                </div>
            </div>
        </div>
    </div>

</body>

</html>