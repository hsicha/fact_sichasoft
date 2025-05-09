<?php
 require 'header.php';
?>

<div class="right_col" role="main">
    <div class="">

        <div class="page-title">
            <div class="title_left">
                <h4>Perfil de Usuario</h4>
            </div>

            <div class="title_right">
                <div class="  form-group pull-right ">
                    <div class="input-group">
                        <button class="btn btn-primary btn-sm btn-round" onclick="limpiar()" data-toggle="modal" data-target=".myModal"
                            data-whatever="@mdo"><i class="fa fa-plus" aria-hidden="true"></i> NUEVO PERFIL</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Lista de Perfiles</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
                        <table id="datatable-responsive" class="table table-bordered   dt-responsive nowrap table-sm"
                            cellspacing="0" width="100%">
                            <thead style="background-color:#2A3F54; color:white">
                                <tr>
                                    <th>N°</th>
                                    <th>PERFIL</th>
                                    <th>OPCIONES</th>

                                </tr>
                            </thead>
                            <tbody>


                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="myModal modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header " style="background-color:#2A3F54; color:white">
        <h5 class="modal-title" id="exampleModalLabel">PERFIL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" id="formulario">
          <div class="row">
            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label class="fw-bold ">DESCRIPCION:</label>
                            <input type="hidden" name="idPerfil" id="idPerfil">
                            <input type="text" class="form-control form-control-sm rounded-pill" name="descripcion" id="descripcion" maxlength="50" placeholder="DESCRIPCION" required>
                          </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm btn-round" data-dismiss="modal"><i class="fa fa-arrow-circle-left"></i>  Cancelar</button>
        <button type="submit" class="btn btn-primary btn-sm btn-round" id="btnGuardar"> <i class="fa fa-save"></i> Guardar Cambios</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php

 require 'footer.php';
 
?>
<script src="scripts/perfil.js"></script>