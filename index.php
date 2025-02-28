<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
    <!--<![endif]-->

    <head>
        <<meta charset="iso-8859-1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bienvenidos - Prueba Tecnica</title>
        <link href="estilos/boilerplate.css" rel="stylesheet" type="text/css">
        <link href="estilos/estilos.css" rel="stylesheet" type="text/css">
        <link href="Fonts/fuentes.css" rel="stylesheet" type="text/css">
        <!-- 
        Para obtener m�s informaci�n sobre los comentarios condicionales situados alrededor de las etiquetas html en la parte superior del archivo:
        paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/
          
        Haga lo siguiente si usa su compilaci�n personalizada de modernizr (http://www.modernizr.com/):
        * inserte el v�nculo del c�digo js aqu�
        * elimine el v�nculo situado debajo para html5shiv
        * a�ada la clase "no-js" a las etiquetas html en la parte superior
        * tambi�n puede eliminar el v�nculo con respond.min.js si ha incluido MQ Polyfill en su compilaci�n de modernizr 
        -->
        <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="Scripts/respond.min.js"></script>
        <script>




            function valida() {
                var formulario = document.getElementById("form");
                var nombre = document.getElementById('cam_email').value;
                var contrasena = document.getElementById('cam_password').value;
                var funciona = 'S';


                if (nombre == "") {
                    alert("Por favor, ingrese su usuario.");
                    formulario.nombre.focus();
                    funciona = 'N';
                }

                if (contrasena == "") {
                    alert("Por favor, ingrese su usuario.");
                    formulario.contrasena.focus();
                    funciona = 'N';
                }

                if (funciona == 'S') {

                    formulario.submit();

                }
            }


        </script>
    </head>
    <body>
        <div class="gridContainer clearfix">
            <div id="contenedor"> 
                <div id="cabezote"><center ><b class="Estilo01">Bienvenidos</b></center></div>
                <div id="cuerpo">
                    <div id="noticia">
                        <table width="100%"  border="0" cellspacing="1" cellpadding="1">
                            <tr>
                                <td>
                                    <form action="html/dashboard.php" method="post" id="form">
                                        <div id="cuadroing"></div>
                                        <div id="imagenF"></div>
                                        <div id="txt">
                                            <div id="nusuario" class="Estilo08">Usuario: </div>
                                            <div id="usuario"><input type="email" name="cam_email" id="cam_email" class="Estilo04" style="width:200px; height:15px; background-color:#fff; color: #004F72;font-size:10pt; font-family:Verdana;text-align:center;" placeholder="Correo"/>
                                            </div>
                                            <div id="ncontrasena" class="Estilo08">Contrasena: </div>
                                            <div id="contras"><input type="password" name ="cam_password" id ="cam_password" class="Estilo04" style="width:200px; height:15px; background-color:#fff; color:#004F72; font-size:10pt; font-family:Verdana; text-align:center;" placeholder="Contraseña" />
                                            </div>
                                            <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1', '', '../images/btn_10_2.png', 1)" onclick="valida();" target="_self" id="enviar">
                                                <div id="ingresar"> </div>
                                            </a>
                                            <a href="html/registrarse.php" target="_self">
                                                <div id="registro"></div>
                                            </a>
                                            <a href="html/recordar.php" target="_self">
                                                <div id="recordard"></div>
                                            </a>

                                        </div>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
            <div id="pie"></div>
        </div>
    </body>
</html>
