<?php



session_start();
require('../clases/connexion.php');

$con = new base_datos;
$usuario = $_SESSION["usuario"];




$usuariosg = array();
$consusuariosg = new base_datos;
$consusuariosg->connect();
$sqlusuariosg = "Select * from usuarios where username = '" . $usuario. "'";
$resusuariosg = $consusuariosg->query($sqlusuariosg);
while ($itemusuariosg = $consusuariosg->fetch_row($resusuariosg)) {
    array_push($usuariosg, $itemusuariosg);
}


$superg = $usuariosg[0]["perfil"];


$clientesg = array();
$consclientesg = new base_datos;
$consclientesg->connect();
$sqlclientesg = "Select * from listado_clientes";
$resclientesg = $consclientesg->query($sqlclientesg);
while ($itemclientesg = $consclientesg->fetch_row($resclientesg)) {
    array_push($clientesg, $itemclientesg);
}


?>
   
<html>
    <head>
    <meta charset="iso-8859-1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bienvenidos - Clientes</title>
        <link href="../estilos/boilerplate.css" rel="stylesheet" type="text/css">
        <link href="../estilos/estilosInt.css" rel="stylesheet" type="text/css">
        <link href="../estilos/estilosMenu.css" rel="stylesheet" type="text/css">
        <link href="../Fonts/fuentes.css" rel="stylesheet" type="text/css">
        
        <script src="../Scripts/respond.min.js"></script>
 
        <link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="../librerias/select2/css/select2.css">

	<script src="../librerias/jquery-3.2.1.min.js"></script>
	<script src="../librerias/bootstrap/js/bootstrap.js"></script>
	<script src="../librerias/alertifyjs/alertify.js"></script>
  <script src="../librerias/select2/js/select2.js"></script>

        <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    </head>
    <body>
    <div class="gridContainer clearfix"> 
    <div id="contenedor">
    <div id="cabezote">
        <div id="barsupder">
            <div id="txttitle"><center><b>Prueba</b></center></div>
        </div>
        <div id="barsupizq">
            <div id="cuadrologueo">
                <div id="usuario">Guiovanny</div>
                <div id="nrol">Super Administrador</div>
                <div id="salir">
               
                    <a href='logout.php' class="Estilo01" target='_self'>       
                      Salir -    <div id="imgsal"></div> 
                        </a> 
                </div>
            </div>
        </div>
    </div>
    <div id="barranavegacion">
     <div id="menuInt">

     <nav>
      <div class="wrapper">
        <div class="logo">
          <a href="#">Logo</a>
        </div>
        <input type="radio" name="slide" id="menu_btn" /><input type="radio" name="slide" id="cancel_btn" />
        <ul class="nav_links">
          <label for="cancel_btn" class="btn cancel_btn">
            <i class="fas fa-times"></i>
          </label>
          <li><a href="home.php">Dashboard</a></li>
          <li><a href="clientes.php">Clientes</a></li>
          <li>
            <a href="#" class="desktop_item">Acerca</a>
            <input type="checkbox" id="showDrop" />
            <label for="showDrop" class="mobile_item">Nosotros</label>
            <ul class="drop_menu">
              <li><a href="#">Nosotros</a></li>
             
            </ul>
          </li>
         
          
        </ul>
        <label for="menu_btn" class="btn menu_btn">
          <i class="fas fa-bars"></i>
        </label>
      </div>
    </nav>

     </div>
         



    </div>
    <div>&nbsp;</div>
    <div id="cuerpo">
     <div id="txtSeccion"><h1><b>Clientes</b></h1></div>
     <div id="txtContenido">
     <div>&nbsp;</div>
     <table width="100%" border="1">
  <tr>
    <td colspan="2">
    			<button class="btn btn-primary add" data-toggle="modal" name="add" data-target="#RegistrarClienteModal	" id="Agregar">AGREGAR</button> 
    </td>
   </tr>
  <tr>
    <td><b>Nombre</b></td>
    <td><b>Email</b></td>
    <td><b>City</b></td>
    <td><b>Telefono</b></td>
    <td><b>Accion</b></td>
  </tr>
  <?php foreach($clientesg as $lin){ 
  
  $datos = $lin['id']."||".$lin['email']."||".$lin['name']."||".$lin['city']."||".$lin['telephone'];
  
  ?>
  <tr>
    <td data_id="<?php echo $lin['name']?>"><?php echo $lin["name"];?></td>
    <td data_id="<?php echo $lin['email']?>"><?php echo $lin["email"];?></td>
    <td data_id="<?php echo $lin['city']?>"><?php echo $lin["city"];?></td>
    <td data_id="<?php echo $lin['telephone']?>"><?php echo $lin["telephone"];?></td>

    <td>
    <button  data-toggle="modal" data-target="#EditarClienteModal" onclick="agregardatos('<?php echo $datos; ?>')" name="edit" class="btn btn-primary btn-xs edit">Editar</button> 
    -
<button  data-toggle="modal" data-target="#EliminarClienteModal" id="<?php echo $lin['id']?>" name="drop" class="btn btn-primary btn-xs drop">Eliminar</button> 
    </td>
  </tr>
 <?php } ?>
</table>


     </div>

    </div>
    <div id="pie"></div>
    </div>   
 

</div>
</body>
</html>

<div id="RegistrarClienteModal" class="modal fade" role="dialog">
 <div class="modal-dialog">

 <!-- Modal content-->
 <div class="modal-content">
 <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal">×</button>
 <h4 class="modal-title">Agregar Cliente</h4>
 </div>
 <div class="modal-body">

		 <div class="form-group">
			   <label class="control-label" for="inputPatient">Nombre</label>
			   <div class="field desc">
			  	 <input class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" type="text" value="" required>
                 
           
			  </div>
     	 </div>

          <div class="form-group">
			   <label class="control-label" for="inputPatient">Email</label>
			   <div class="field desc">
			  	 <input class="form-control" id="Email" name="Email" placeholder="Email" type="text" value="" required>
                 
           
			  </div>
     	 </div>

          <div class="form-group">
			   <label class="control-label" for="inputPatient">Ciudad</label>
			   <div class="field desc">
			  	 <input class="form-control" id="Ciudad" name="Ciudad" placeholder="Ciudad" type="text" value="" required>
                 
               
			  </div>
     	 </div>

          <div class="form-group">
			   <label class="control-label" for="inputPatient">Telefono</label>
			   <div class="field desc">
			  	 <input class="form-control" id="Telefono" name="Telefono" placeholder="Telefono" type="text" value="" required>
                 
                 	
			  </div>
     	 </div>

   

 
		
		 
 </div>
 <div class="modal-footer">
 <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancelar</button>
 <button type="submit" class="btn btn-primary Registrar"  data-dismiss="modal" id="Registrar">Registrar</button>
  
 </div>
 </div>
 </div>
 </div>

 <div id="EditarClienteModal" class="modal fade" role="dialog">
 <div class="modal-dialog">

 <!-- Modal content-->
 <div class="modal-content">
 <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal">×</button>
 <h4 class="modal-title">Editar Cliente</h4>
 </div>
 <div class="modal-body">

 <div class="form-group">
			   <label class="control-label" for="inputPatient">Nombre</label>
			   <div class="field desc">
			  	 <input class="form-control" id="Nombreu" name="Nombreu" placeholder="Nombre" type="text" value="" required>
                 
                 	 
			  </div>
     	 </div>

          <div class="form-group">
			   <label class="control-label" for="inputPatient">Email</label>
			   <div class="field desc">
			  	 <input class="form-control" id="Emailu" name="Emailu" placeholder="Email" type="text" value="" required>
                 
             
			  </div>
     	 </div>

          <div class="form-group">
			   <label class="control-label" for="inputPatient">Ciudad</label>
			   <div class="field desc">
			  	 <input class="form-control" id="Ciudadu" name="Ciudadu" placeholder="Ciudad" type="text" value="" required>
                 
                 
			  </div>
     	 </div>

          <div class="form-group">
			   <label class="control-label" for="inputPatient">Telefono</label>
			   <div class="field desc">
			  	 <input class="form-control" id="Telefonou" name="Telefonou" placeholder="Telefono" type="text" value="" required>
                 
                 
			  </div>
     	 </div>

   

		 <div class="form-group">
			 
			   <div class="field desc">
			  <input class="form-control" id="id" name="id"  type="hidden">
			  </div>
     	 </div>
 
		
		 
 </div>
 <div class="modal-footer">
 <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancelar</button>
 <button type="submit" class="btn btn-primary Registrar"  data-dismiss="modal" id="Editar">Editar</button>
  
 </div>
 </div>
 </div>
 </div>


 
 <div id="EliminarClienteModal" class="modal fade" role="dialog">
 <div class="modal-dialog">

 <!-- Modal content-->
 <div class="modal-content">
 <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal">×</button>
 <h4 class="modal-title">Eliminar Cliente</h4>
 </div>
 <div class="modal-body">

		 seguro de eliminar?

   

 
		
		 
 </div>
 <div class="modal-footer">
 <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancelar</button>
 <button type="submit" class="btn btn-primary Registrar"  data-dismiss="modal" id="Eliminar">Eliminar</button>
  
 </div>
 </div>
 </div>
 </div>
  

