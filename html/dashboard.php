<?php



session_start();
require('../clases/connexion.php');


@$corr = $_GET['email'];



if ($corr != "") {


    $usuario = $corr;
} else {
    @$usuario = $_POST["cam_email"];
}




$usuariosg = array();
$consusuariosg = new base_datos;
$consusuariosg->connect();
$sqlusuariosg = "Select * from usuarios where username = '" . $usuario. "'";
$resusuariosg = $consusuariosg->query($sqlusuariosg);
while ($itemusuariosg = $consusuariosg->fetch_row($resusuariosg)) {
    array_push($usuariosg, $itemusuariosg);
}


$superg = $usuariosg[0]["perfil"];


@$pass = $_GET['pass'];

if ($pass != "") {

    $contrasena = $pass;
} else {

    $contrasena = $_POST["cam_password"];
}






$_SESSION["email"] = $usuario;
$_SESSION["password"] = $contrasena;



$consulta = new base_datos;
$consulta->connect();
$sql = "select * from usuarios where username='$usuario' and contrasena='" . $contrasena . "'";
$res = $consulta->query($sql);
$cantidad = $consulta->numrows($res);


if ($datos = $consulta->fetch_row($res)) {


    $_SESSION["usuario"] = $usuario;
  ?>
   
<html>
    <head>
    <meta charset="iso-8859-1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bienvenidos - Menu</title>
        <link href="../estilos/boilerplate.css" rel="stylesheet" type="text/css">
        <link href="../estilos/estilosInt.css" rel="stylesheet" type="text/css">
        <link href="../estilos/estilosMenu.css" rel="stylesheet" type="text/css">
        <link href="../Fonts/fuentes.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="../estilos/estilosinternos.css">
        <script src="../Scripts/respond.min.js"></script>
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
    <div id="cuerpo">Dashboard</div>
    <div id="pie"></div>
    </div>   
 

</div>
</body>
</html>




   <?php } ?>

