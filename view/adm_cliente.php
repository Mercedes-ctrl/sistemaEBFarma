<?php
session_start();
if ($_SESSION['us_tipo'] == 1 || $_SESSION['us_tipo'] == 3) {
    include_once 'layouts/header.php';
?>

    <title>Adm | Gestión Cliente</title>
    <?php
    include_once 'layouts/nav.php';
    ?>
    <link rel="stylesheet" type="text/css" href="/css/picnic.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <!--Button trigger modal-->
    <div class="modal fade" id="editarcliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Editar Cliente</h3>
                        <button data-dismiss="modal" aria-label="close" class="close">
                            <span araia-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-success text-center" id="edit-cli" style='display:none;'>
                            <span><i class="fas fa-check m-1"></i>Se edito correctamente</span>
                        </div>
                        <div class="alert alert-danger text-center" id="noedit-cli" style='display:none;'>
                            <span><i class="fas fa-times m-2"></i>No se pudo editar</span>
                        </div>
                        <form id="form-editar">
                            <div class="form-group">
                                <label form="telefono_edit">Telefono</label>
                                <input id="telefono_edit" type="number" class="form-control" placeholder="Ingrese telefono" required>
                            </div>
                            <div class="form-group">
                                <label form="correo_edit">Correo</label>
                                <input id="correo_edit" type="email" class="form-control" placeholder="Ingrese correo">
                            </div>
                            <div class="form-group">
                                <label form="adicional_edit">Adicional</label>
                                <input id="adicional_edit" type="text" class="form-control" placeholder="Ingrese adicional" required>
                            </div>
                            <input type="hidden" id="id_cliente">
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn bg-gradient-primary float-right m-2">Guardar</button>
                        <button type="button" data-dismiss="modal" class="btn btn-outline-secondary float-right m-2">Cerrar </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <!--Button trigger modal-->
 <div class="modal fade" id="cargar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Carga foto de DNI</h3>
                        <button data-dismiss="modal" aria-label="close" class="close">
                            <span araia-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="card-body">
                    <form method="" action="" class="login-form" enctype="multipart/form-data">
                        <div class="column">
                            <h5>Carga la foto de tu DNI por el derecho</h5>
                            <div class="col-md-4">
                                <div>
                                <label class="dropimage">
                                    <input title="Hacer Click aqui" type="file" name="foto1" id="foto1" required="true">
                                </label>
                                </div>
                            </div>
                            <h5>Carga la foto de tu DNI por el revés</h5>
                            <div class="col-md-4">
                                <div>
                                <label class="dropimage">
                                    <input title="Hacer Click aqui" type="file" name="foto2" id="foto2" required="true">
                                </label>
                                </div>
                            </div>
                        </div>  
                    </form>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn bg-gradient-primary float-right m-2">Guardar</button>
                        <button type="button" data-dismiss="modal" class="btn btn-outline-secondary float-right m-2">Cerrar </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Button trigger modal-->
    <div class="modal fade" id="crearcliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Crear Cliente</h3>
                        <button data-dismiss="modal" aria-label="close" class="close">
                            <span araia-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-success text-center" id="add-cli" style='display:none;'>
                            <span><i class="fas fa-check m-1"></i>Se agrego correctamente</span>
                        </div>
                        <div class="alert alert-danger text-center" id="noadd-cli" style='display:none;'>
                            <span><i class="fas fa-times m-2"></i>El Cliente ya existe</span>
                        </div>
                        <form id="form-crear">
                            <div class="form-group">
                                <label form="nombre">Nombres</label>
                                <input id="nombre" type="text" class="form-control" placeholder="Ingrese nombre" required>
                            </div>
                            <div class="form-group">
                                <label form="apellidos">Apellidos</label>
                                <input id="apellidos" type="text" class="form-control" placeholder="Ingrese apellidos" required>
                            </div>
                            <div class="form-group">
                                <label form="dni">DNI</label>
                                <input id="dni" type="text" class="form-control" placeholder="Ingrese DNI" required>
                            </div>
                            <div class="form-group">
                                <label form="edad">Nacimiento</label>
                                <input id="edad" type="date" class="form-control" placeholder="Ingrese nacimiento" required>
                            </div>
                            <div class="form-group">
                                <label form="telefono">Telefono</label>
                                <input id="telefono" type="number" class="form-control" placeholder="Ingrese telefono" required>
                            </div>
                            <div class="form-group">
                                <label form="correo">Correo</label>
                                <input id="correo" type="email" class="form-control" placeholder="Ingrese correo">
                            </div>
                            <div class="form-group">
                                <label form="sexo">Sexo</label>
                                <input id="sexo" type="text" class="form-control" placeholder="Ingrese sexo" required>
                            </div>
                            <div class="form-group">
                                <label form="adicional">Adicional</label>
                                <input id="adicional" type="text" class="form-control" placeholder="Ingrese adicional" required>
                            </div>
                            <input type="hidden" id="id_edit_prov">

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn bg-gradient-primary float-right m-2">Guardar</button>
                        <button type="button" data-dismiss="modal" class="btn btn-outline-secondary float-right m-2">Cerrar </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Gestión cliente <button type="button" data-toggle="modal" data-target="#crearcliente" class="btn bg-gradient-primary ml-2">Crear cliente</button></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="adm_catalogo.php">Home</a></li>
                            <li class="breadcrumb-item active">Gestión cliente</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section>
            <div class="container-fluid">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Buscar cliente</h3>
                        <div class="input-group">
                            <input type="text" id="buscar-cliente" class="form-control float-left" placeholder="Ingrese nombre de cliente">
                            <div class="input-group-append">
                                <button class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="clientes" class="row d-flex align-items-stretch">

                        </div>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
<?php
    include_once 'layouts/footer.php';
} else {
    header('Location: ../index.php');
}
?>
<script src="../js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function() {
  [].forEach.call(document.querySelectorAll('.dropimage'), function(img){
    img.onchange = function(e){
      var inputfile = this, reader = new FileReader();
      reader.onloadend = function(){
        inputfile.style['background-image'] = 'url('+reader.result+')';
      }
      reader.readAsDataURL(e.target.files[0]);
    }
  });
});
</script>
<script src="../js/Cliente.js"></script>