<?php
 require 'header.php';
?>
<style>
    body{
    margin-top:20px;
    background:#FAFAFA;
}
.order-card {
    color: #fff;
}

.bg-c-blue {
    background: linear-gradient(45deg,#4099ff,#73b4ff);
}

.bg-c-green {
    background: linear-gradient(45deg,#2ed8b6,#59e0c5);
}

.bg-c-yellow {
    background: linear-gradient(45deg,#FFB64D,#ffcb80);
}

.bg-c-pink {
    background: linear-gradient(45deg,#FF5370,#ff869a);
}


.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    border: none;
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.card .card-block {
    padding: 25px;
}

.order-card i {
    font-size: 26px;
}

.f-left {
    float: left;
}

.f-right {
    float: right;
}
</style>
<!-- libreria chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<main class="right_col" role="main">
    <!-- tarjetas -->
    <div class="row">
    <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Compras</h6>
                    <h2 class="text-right"> <a href="ingreso.php" class="text-white"><i class="fa fa-cart-plus f-left"></i></a><span>S/. 486</span></h2>
                    <p class="m-b-0">Compras Realizadas<span class="f-right">351</span></p>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Ventas</h6>
                    <h2 class="text-right"> <a href="venta.php" class="text-white"><i class="fa fa-cart-plus f-left"></i></a><span id="total_venta"></span></h2>
                    <p class="m-b-0">Ventas Realizadas<span class="f-right" id="total_realizadas">351</span></p>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Proveedores</h6>
                    <h2 class="text-right"> <a href="proveedor.php" class="text-white"><i class="fa fa-users f-left"></i></a><span>S/. 486</span></h2>
                    <p class="m-b-0">...<span class="f-right">...</span></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Clientes</h6>
                    <h2 class="text-right"> <a href="venta.php" class="text-white"><i class="fa fa-users f-left"></i></a><span>S/. 486</span></h2>
                    <p class="m-b-0">...<span class="f-right">...</span></p>
                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <!-- grafico -->
        <section class="col-md-6 mt-4">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-bar-chart ft-dark-icon"> </i>
                    <span class="h6 text-body font-weight-bold ml-2">Ventas de la semana</span>
                </div>
                <div class="card-body">
                    <canvas id="pedidosChart"></canvas>
                </div>
            </div>
        </section>

        <!-- tabla ordenes -->
        <section class="col-md-6 mt-4">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-bell ft-dark-icon"></i> <span class="h6 text-body font-weight-bold ml-2">Ordenes
                        recientes</span>
                </div>
                <!-- tabla -->
                <table class="table table-hover">
                    <tbody>
                        <tr data-toggle="modal" data-target="#modalInfo">
                            <td><i class="fa fa-inbox"></i></td>
                            <td>Nueva orden solicitada</td>
                            <td>Hace un instante</td>
                        </tr>
                        <tr data-toggle="modal" data-target="#modalInfo">
                            <td><i class="fa fa-inbox"></i></td>
                            <td>Nueva orden solicitada</td>
                            <td>Hace 02 minutos</td>
                        </tr>
                        <tr data-toggle="modal" data-target="#modalInfo">
                            <td><i class="fa fa-inbox"></i></td>
                            <td>Nueva orden solicitada</td>
                            <td>Hace 03 minutos</td>
                        </tr>
                        <tr data-toggle="modal" data-target="#modalInfo">
                            <td><i class="fa fa-inbox"></i></td>
                            <td>Nueva orden solicitada</td>
                            <td>Hace 04 minutos</td>
                        </tr>
                        <tr data-toggle="modal" data-target="#modalInfo">
                            <td><i class="fa fa-inbox"></i></td>
                            <td>Nueva orden solicitada</td>
                            <td>Hace 05 minutos</td>
                        </tr>
                        <tr data-toggle="modal" data-target="#modalInfo">
                            <td><i class="fa fa-inbox"></i></td>
                            <td>Nueva orden solicitada</td>
                            <td>Hace 06 minutos</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- detalle ordenes -->
        <div class="modal" id="modalInfo">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title">Detalle de la orden</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th>Comanda</th>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Detalles</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>P001</td>
                                    <td>Yuquitas fritas</td>
                                    <td>2</td>
                                    <td>Bien fritas, con sal y para llevar.</td>
                                    <td><span class="badge badge-danger">Pendiente</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
        // Datos de pedidos
        var pedidosData = {
            labels: ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'],
            datasets: [{
                label: 'Total de ventas ($)',
                data: [150, 200, 180, 220, 250, 300, 190], // Ventas de cada día
                backgroundColor: 'rgba(0, 123, 255, 0.8)', // Color de las barras
                borderColor: 'rgba(0, 123, 255, 1)', // Color del borde
                borderWidth: 1
            }]
        };

        // Opciones del gráfico
        var pedidosOptions = {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 50
                    }
                }
            }
        };

        // Crear gráfico
        var ctx = document.getElementById('pedidosChart').getContext('2d');
        var pedidosChart = new Chart(ctx, {
            type: 'bar', // Tipo de gráfico (barras)
            data: pedidosData,
            options: pedidosOptions
        });
        </script>


        <!-- Bootstrap JS y dependencias -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>

</main>
<?php
 include '../vistas/footer.php';
?>

<script src="scripts/escritorio.js"></script>