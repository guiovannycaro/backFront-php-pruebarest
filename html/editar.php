<?php
require('../clases/connexion.php');
$id = $_POST['id'];
       $nombre = $_POST['nombre'];
       $email = $_POST['email'];
       $ciudad = $_POST['ciudad'];
       $telefono = $_POST['telefono'];


       $i_solicitud = array();
       $con = new base_datos;
       $con->connect();

$sqlclientesg = "update listado_clientes set names ='".$nombre."',email ='".$email."',city ='".$ciudad."',telephone ='".$telefono."' where id = '".$id."'";

$resclientesg = $con->query($sqlclientesg);

if($resclientesg){

    echo "Cliente registrado de manera correcta";
}else{
    echo "Cliente no registrado de manera correcta";
 } ?>
