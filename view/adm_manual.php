<?php
session_start();
if ($_SESSION['us_tipo'] == 3) {
    include_once 'layouts/header.php';
?>

    <title>Adm | Gestión lote</title>
    <?php
    include_once 'layouts/nav.php';
    ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manual de Usuario</h1>
            <input type="hidden" id="tipo_usuario" value="<?php echo $_SESSION['us_tipo']?>">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="adm_catalogo.php">Home</a></li>
              <li class="breadcrumb-item active">Manual de usuario</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <div class="marco">
        <iframe style="width:100%;height:660px" src="https://mercedes-ctrl.github.io/manual/" nombre='marco1' class="marco"></iframe>
        <!-- <a href="https://mercedes-ctrl.github.io/manual/" target="marco1">Cargar manual</a> -->
    </div>
</div>
<?php
    include_once 'layouts/footer.php';
} else {
    header('Location: ../index.php');
}
?>
<script src="../js/Lote.js"></script>
