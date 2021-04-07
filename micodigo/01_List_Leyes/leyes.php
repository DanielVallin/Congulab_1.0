


<!DOCTYPE html>
<html>
<title>Leyes</title>
<head>
  <?php require_once "dependencias.php"; ?>

</head>
<body>
	<div class="container">
		<br>
		<h1>Listado de Leyes</h1>
		<hr>
		<div class="row">
			<div class="col-sm-12">
				<div id="tablastores"></div>
			</div>
		</div>
	</div>


  <!--************************************************* agregar datosmodal ***********************************************-->
  <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo juego</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        	<form id="frmAgrega">
        		<label>Nombre</label>
        		<input type="text" class="form-control form-control-sm" name="nombrel" id="nombrel">
        		<label>Grupo</label>
        		<input type="text" class="form-control form-control-sm" name="aniol" id="aniol">
        	</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-raised btn-primary" id="btnAgregarJuego">Agregar</button>
        </div>
      </div>
    </div>
  </div>
  <!--************************************************* agregar datosmodal ***********************************************-->


  <!--************************************************* updatemodal ***********************************************-->
  <div class="modal fade" id="updatemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">

          <h5 class="modal-title" id="exampleModalLabel">Actualiza Ley</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        	<form id="frmactualiza">
            <input type="text" hidden="" name="id_leyes" id="id_leyes">
            <label>Nombre</label>
            <input type="text" class="form-control form-control-sm" name="NombreU" id="NombreU">
            <label>Grupo</label>
            <input type="text" class="form-control form-control-sm" name="GrupoU" id="GrupoU">

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-raised btn-warning" id="btnactualizar">Actualizar</button>
        </div>
      </div>
    </div>
  </div>
  <!--************************************************* updatemodal ***********************************************-->
</body>
</html>





<script type="text/javascript">
	$(document).ready(function(){
		$('#tablastores').load('tabla.php');

    $('#btnAgregarJuego').click(function(){
        if(validarFormVacio('frmAgrega') > 0){
          alertify.alert("Debes llenar todos los campos por favor!");
          return false;
        }

        datos=$('#frmAgrega').serialize();

        $.ajax({
          type:"POST",
          data:datos,
          url:"php/insertar.php",
          success:function(r){
            if(r==1){
            $('#frmAgrega')[0].reset();
            $('#tablastores').load('tabla.php');
            alertify.success("Agregado con exito :)");
          }else{
            alertify.error("No se pudo agregar :(");
          }
        }
      });
    });
  });
</script>


<script type="text/javascript">
  $(document).ready(function(){
    $('#btnactualizar').click(function(){

      datos=$('#frmactualiza').serialize();
        $.ajax({
          type:"POST",
          data:datos,
          url:"php/actualizar.php",
          success:function(r){
            if(r==1){
             $('#tablastores').load('tabla.php');
               alertify.success("Actualizado con exito :)");
            }else{
               alertify.error("No se pudo actualizar :(");
            }
           }
        });
    });
  });
</script>

<script type="text/javascript">

  

function obtenDatos(idjuego){
    $.ajax({
      type:"POST",
      data:"idjuego=" + idjuego,
      url:"php/obtenerRegistro.php",
      success:function(r){
        datos=jQuery.parseJSON(r);

        $('#id_leyes').val(datos['id_juego']);
        $('#NombreU').val(datos['nombrejU']);
        $('#GrupoU').val(datos['aniojU']);
      }
    });
  }

  
  function validarFormVacio(formulario){
    datos=$('#' + formulario).serialize();
    d=datos.split('&');
    vacios=0;
    for(i=0;i< d.length;i++){
      controles=d[i].split("=");
      if(controles[1]=="A" || controles[1]==""){
        vacios++;
      }
    }
    return vacios;
  }

  function elimina(id_leyes){
      alertify.confirm('Eliminar juego', '¿Desea eliminar este registro?', 
              function(){ 
                  $.ajax({
                     type:"POST",
                      data:"id_leyes=" + id_leyes,
                      url:"php/eliminar.php",
                      success:function(r){
                          if(r==1){     
                              $('#tablastores').load('tabla.php');
                              alertify.success("Eliminado con exito :)");
                          }else{
                               alertify.error("No se pudo eliminar :(");
                          }
                      }
                  });
              }
              ,function(){ 
                alertify.error('Cancelo')
              });
  }

</script>