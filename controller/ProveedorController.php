<?php
include '../model/Proveedor_model.php';
$proveedor = new Proveedor();

//crear
if($_POST['funcion']=='crear'){
    $nombre = $_POST['nombre'];
    $ruc_proveedor = $_POST['ruc_proveedor'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $avatar = 'prov_default.png';

    $proveedor->crear($nombre,$ruc_proveedor,$telefono,$correo,$direccion,$avatar);
}

//editar
if($_POST['funcion']=='editar'){
   $id=$_POST['id'];
   $nombre = $_POST['nombre'];
   $ruc_proveedor = $_POST['ruc_proveedor'];
   $telefono = $_POST['telefono'];
   $correo = $_POST['correo'];
   $direccion = $_POST['direccion'];

   $proveedor->editar($id,$nombre,$ruc_proveedor,$telefono,$correo,$direccion);
}

if($_POST['funcion']=='buscar'){
    $proveedor->buscar();
    $json=array();
     foreach($proveedor->objetos as $objeto){
        $json[]=array(
            'id'=>$objeto->id_proveedor,
            'nombre'=>$objeto->nombre,
            'ruc_proveedor'=>$objeto->nombre,
            'telefono'=>$objeto->telefono,
            'correo'=>$objeto->correo,
            'direccion'=>$objeto->direccion,
            'avatar'=>'../img/prov/'.$objeto->avatar

        );
     }
     $jsonstring= json_encode($json);
     echo $jsonstring;
}

if ($_POST['funcion'] == 'cambiar_logo') {
    $id = $_POST['id_logo_prov'];
    $avatar = $_POST['avatar'];
    if (($_FILES['photo']['type'] == 'image/jpeg') || ($_FILES['photo']['type'] == 'image/png') || ($_FILES['photo']['type'] == 'image/gif')) {
 
       $nombre = uniqid() . '-' . $_FILES['photo']['name'];
       $ruta = '../img/prov/' . $nombre;
       move_uploaded_file($_FILES['photo']['tmp_name'], $ruta);
       $proveedor->cambiar_logo($id, $nombre);
       if ($avatar != '../img/prov/prov_default.png') {
          unlink($avatar);
       }
 
       $json = array();
       $json[] = array(
          'ruta' => $ruta,
          'alert' => 'edit'
       );
       $jsonstring = json_encode($json[0]);
       echo $jsonstring;
    } else {
       $json = array();
       $json[] = array(
          'alert' => 'noedit'
       );
       $jsonstring = json_encode($json[0]);
       echo $jsonstring;
    }
 }

 if ($_POST['funcion'] == 'borrar') {
    $id = $_POST['id'];
    $proveedor->borrar($id);
 }

 if($_POST['funcion']=='rellenar_proveedores'){
   $proveedor->rellenar_proveedores();
   $json=array();
   foreach($proveedor->objetos as $objeto){
        $json[]=array(
            'id'=>$objeto->id_proveedor,
            'nombre'=>$objeto->nombre
        );
   }
   $jsonstring=json_encode($json);
   echo $jsonstring;
}