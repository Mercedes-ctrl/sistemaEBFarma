<?php
session_start();
if ($_SESSION['us_tipo'] == 1 || $_SESSION['us_tipo'] == 3) {
    include_once 'layouts/header.php';
?>

    <title>Adm | Kardex</title>
    <?php
    include_once 'layouts/nav.php';
    ?>
 
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Módulo Kardex de la farmacia EBFARMA</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="adm_catalogo.php">Home</a></li>
                            <li class="breadcrumb-item active">Gestión atributo</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-pills">
                                    <!-- <li class="nav-item"><a href="#laboratorio" class="nav-link active" data-toggle="tab">Laboratorio</a></li> -->
                                    <li class="nav-item"><a href="#tipo" class="nav-link" data-toggle="tab">Ingresos</a></li>
                                    <li class="nav-item"><a href="#presentacion" class="nav-link" data-toggle="tab">Salidas</a></li>
                                </ul>
                            </div>
                            <div class="card-body p-0">
                                <div class="tab-content">
                                   
                                    <div class="tab-pane active" id='tipo'>
                                        <div class="card card-success">
                                            <div class="card-header">
                                                <div class="card-title">Busca<a class="btn bg-gradient-primary ml-4" href="adm_nuevo_ingreso.php">Nuevo ingreso</a></div>
                            
                                                <div class="input-group">
                                                    <input id="buscar-tipo" type="text" class="form-control float-left" placeholder="Buscar...">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-default"><i class="fas fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body p-0 table-responsive">
                                                <table class="table table-hover text-nowrap">
                                                    <thead class="table-success">
                                                        <tr>
                                                            <th>Fecha</th>
                                                            <th>Proveedor</th>
                                                            <th>Comprobante</th>
                                                            <th>Total</th>
                                                            <th>Estado</th>
                                                            <th>Opciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table-active" id="tipos">
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="card-footer">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id='presentacion'>
                                        <div class="card card-success">
                                            <div class="card-header">
                                                <div class="card-title">Buscar<a class="btn bg-gradient-primary ml-4" href="adm_nuevo_salida.php">Nueva salida</a></div>
                                                <div class="input-group">
                                                    <input id="buscar-presentacion" type="text" class="form-control float-left" placeholder="Buscar...">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-default"><i class="fas fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body p-0 table-responsive">
                                                <table class="table table-hover text-nowrap">
                                                    <thead class="table-success">
                                                        <tr>
                                                            <th>Fecha</th>
                                                            <th>Vendedor</th>
                                                            <th>Comprobante</th>
                                                            <th>Estado</th>
                                                            <th>Opciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table-active" id="presentaciones">
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="card-footer">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

<?php
    include_once 'layouts/footer.php';
} else {
    header('Location: ../index.php');
}
?>
<script src="../js/Ingreso.js"></script>
<script src="../js/Salidas.js"></script>