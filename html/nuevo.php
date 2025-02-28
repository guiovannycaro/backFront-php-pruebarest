<?php
require('../clases/connexion.php');

       $nombre = $_POST['nombre'];
       $email = $_POST['email'];
       $ciudad = $_POST['ciudad'];
       $telefono = $_POST['telefono'];


       $i_solicitud = array();
       $con = new base_datos;
       $con->connect();
$sqlclientesg = "INSERT INTO listado_clientes (names,email,city,telephone) VALUES ('" . $nombre . "','" . $email . "','" . $ciudad . "','" . $telefono . "')";
$resclientesg = $con->query($sqlclientesg);

if($resclientesg){

    echo "Cliente registrado de manera correcta";
}else{
    echo "Cliente no registrado de manera correcta";
 } ?>
