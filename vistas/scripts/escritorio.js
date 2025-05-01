var tabla;
function init() {
	listar();
  total_venta_sede();
  total_compras_sede();
  total_proveedores();
  total_clientes();
	
}
function listar()
{


	 tabla = $("#tbllistado").DataTable({
     bLengthChange: true,
	 autoWidth: false,
      bDestroy: true,
      language: {
        search: "Buscar por",
        lengthMenu:    "Mostrar _MENU_ Elementos",
        info:           "Mostrando _START_ a _END_ de _TOTAL_ Elementos",
        infoEmpty:      "Mostrando 0 registros de 0 registros encontrados",
        paginate: {
          next: "<span>Siguiente</span>",
          previous: "<span>Atras</span>",
        },
      },
		order: [[3, 'asc']],
      responsive: true,
      searching: true,
      "ajax":{
        url: '../ajax/articulo.php?op=stock_minimo',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
    },
  
  });
}
function total_venta_sede(){
  $.post("../ajax/venta.php?op=total_ventas_sede",
  function(data, status){
    dataJson = JSON.parse(data);
    console.log(data);
    $("#total_venta").html("S/. " +dataJson.total);
    $("#total_realizadas").html(dataJson.total_realizadas);
  })

}
function total_compras_sede(){
  $.post("../ajax/ingreso.php?op=total_compras_sede",
  function(data, status){
    dataJson = JSON.parse(data);
    console.log(data);
    $("#total_compras").html("S/. " +dataJson.total);
    $("#total_compras_realzadas").html(dataJson.total_compras);
  })
}
function total_proveedores(){
  $.post("../ajax/proveedor.php?op=total_proveedores",
  function(data, status){
    dataJson = JSON.parse(data);
    console.log(data);
    $("#total_proveedores").html(dataJson.total);
  })

}
function total_clientes(){
  $.post("../ajax/cliente.php?op=total_clientes",
  function(data, status){
    dataJson = JSON.parse(data);
    console.log(data);
    $("#total_clientes").html(dataJson.total);
  })
}
init();