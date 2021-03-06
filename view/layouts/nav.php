 <!-- Tell the browser to be responsive to screen width -->
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="icon" href="../img/doctor.png" type="image/png">
 <link rel="stylesheet" href="../css/animate.min.css">
 <link rel="stylesheet" href="../css/datatables.css">
 <link rel="stylesheet" href="../css/compra.css">
 <link rel="stylesheet" href="../css/main.css">
 <link rel="icon" href="../img/doctor.png" type="image/png">

 <!--<link rel="stylesheet" href="../css/main.css"> -->
 <!--select2-->
 <link rel="stylesheet" href="../css/select2.css">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="../css/css/all.min.css">
 <!-- SweetAlert2 -->
 <link rel="stylesheet" href="../css/sweetalert2.css">
 <!-- Ionicons -->

 <!-- overlayScrollbars -->
 <link rel="stylesheet" href="../css/adminlte.min.css">
 <!-- Google Font: Source Sans Pro -->


 </head>

 <body class="hold-transition sidebar-mini">
   <!-- Site wrapper -->
   <div class="wrapper">
     <!-- Navbar -->
     <nav class="main-header navbar navbar-expand navbar-white navbar-light">
       <!-- Left navbar links -->
       <ul class="navbar-nav">
         <li class="nav-item">
           <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
         </li>
         <li class="nav-item d-none d-sm-inline-block">
           <a href="adm_catalogo.php" class="nav-link">Home</a>
         </li>
         <li class="nav-item d-none d-sm-inline-block">
           <a  href="adm_manual.php" class="nav-link">Ayuda en línea</a>
         </li>

         <li class="nav-item dropdown" id="cat-carrito" style="display:none;">
           <img src="../img/carrito.png" id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="imagen-carrito nav-link dropdown-toggle">
           <span id="contador" class="contador badge badge-danger"></span>
           </img>
           <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">

             <table class="carro table table-hover text-nowrap p-0">
               <thead class="table-success">
                 <tr>
                   <th>Codigo</th>
                   <th>Nombre</th>
                   <th>Concentracion</th>
                   <th>Adicional</th>
                   <th>Precio</th>
                   <th>Eliminar</th>
                 </tr>
               </thead>
               <tbody id="lista">

               </tbody>
             </table>
             <a href="#" id="procesar-pedido" class="btn btn-danger btn-block">Procesar Compra</a>
             <a href="#" id="vaciar-carrito" class="btn btn-primary btn-block">Vaciar Carrito</a>
           </ul>
         </li>

       </ul>
       <!-- Right navbar links -->
       <ul class="navbar-nav ml-auto">
         <a href="../controller/logout.php">Cerrar Sesion</a>
       </ul>
     </nav>
     <!-- /.navbar -->

     <!-- Main Sidebar Container -->
     <aside class="main-sidebar sidebar-dark-primary elevation-4"  style="position: fixed;">
       <!-- Brand Logo -->
       <a href="../view/adm_.php" class="brand-link">
         <img src="../img/doctor.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">EBFarma</span>
       </a>

       <!-- Sidebar -->
       <div class="sidebar">
         <!-- Sidebar user (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
           <div class="image">
             <img id="avatar4" src="../img/avatar.png" class="img-circle elevation-2" alt="User Image">
           </div>
           <div class="info">
             <a href="#" class="d-block">
               <?php
                echo $_SESSION['nombre_us'];
                ?>
             </a>
           </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-1">
           <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
             <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
             <li class="nav-header">Usuario</li>
             <li class="nav-item">
               <a href="editar_datos_personales.php" class="nav-link">
                 <i class="nav-icon fas fa-user-cog"></i>
                 <p>
                   Datos Personales
                 </p>
               </a>
             </li>
             <li id="gestion_usuario" class="nav-item">
               <a href="adm_usuario.php" class="nav-link">
                 <i class="nav-icon fas fa-users"></i>
                 <p>
                   Gestión usuario
                 </p>
               </a>
             </li>
             <li id="gestion_cliente" class="nav-item">
               <a href="adm_cliente.php" class="nav-link">
                 <i class="nav-icon fas fa-user-friends"></i>
                 <p>
                   Gestión cliente
                 </p>
               </a>
             </li>


             <li class="nav-header">Almacen</li>

             <li id="gestion_producto" class="nav-item">
               <a href="adm_producto.php" class="nav-link">
                 <i class="nav-icon fas fa-pills"></i>
                 <p>
                   Gestión producto
                 </p>
               </a>
             </li>
             <li id="gestion_atributo" class="nav-item">
               <a href="adm_atributo.php" class="nav-link">
                 <i class="nav-icon fas fa-vials"></i>
                 <p>
                   Gestión atributo
                 </p>
               </a>
             </li>
             <li id="gestion_lote" class="nav-item">
               <a href="adm_lote.php" class="nav-link">
                 <i class="nav-icon fas fa-cubes"></i>
                 <p>
                   Gestión lote
                 </p>
               </a>
             </li>

             <li class="nav-header">Compras</li>

             <li id="gestion_proveedor" class="nav-item">
               <a href="adm_proveedor.php" class="nav-link">
                 <i class="nav-icon fas fa-truck"></i>
                 <p>
                   Gestión proveedor
                 </p>
               </a>
             </li>

             <li id="gestion_compra" class="nav-item">
               <a href="adm_compras.php" class="nav-link">
                 <i class="nav-icon fas fa-people-carry"></i>
                 <p>
                   Gestión compra
                 </p>
               </a>
             </li>

             <li class="nav-header">Ventas</li>
             <li class="nav-item">
               <a href="adm_venta.php" class="nav-link">
                  <i class="nav-icon fas fa-notes-medical"></i>
                   <p>
                      Lista Ventas
                   </p>
              </a>
             </li>
             <!-- <li class="nav-header">Facturación</li>
            <li class="nav-item">
            <a href="adm_kardex.php" class="nav-link">
              <i class="nav-icon fas fa-file-excel"></i>
              <p>
               Generar Comprobante de pago
              </p>
            </a>
             </li> -->

          </ul>

         </nav>
         <!-- /.sidebar-menu -->
       </div>
       <!-- /.sidebar -->
     </aside>