<?php
require('../clases/connexion.php');

$id = $_POST['id'];
    

       $i_solicitud = array();
       $con = new base_datos;
       $con->connect();

$sqlclientesg = "Delete from listado_clientes  where id = '".$id."'";
$sqlclientesg = $con->query($sqlclientesg);

if($resclientesg){

    echo "Cliente eliminado de manera correcta";
}else{
    echo "Cliente no eliminado de manera correcta";
 } ?>
