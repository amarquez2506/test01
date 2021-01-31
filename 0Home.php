<!DOCTYPE html>

<!--
Página Home de mis cfdis

Referencias
https://www.tek-tips.com/faqs.cfm?fid=5201
https://stackoverflow.com/questions/2809688/directory-chooser-in-html-page
https://stackoverflow.com/questions/35260416/folder-choose-in-html
https://stackoverflow.com/questions/52420296/css-to-word-break-the-p-tag-containing-a-tag

https://stackoverflow.com/questions/12381563/how-to-stop-browser-back-button-using-javascript
-->

<html>
  <?php
    //echo 'ojo'.session_id();
    session_start();
    $NombreBase = $_SESSION["nombredb"];
    //echo 'ojo2'.$ConnCl;
    if($_SESSION["logueado"] == TRUE) 
      { 
  ?>
  <head>
    <title>MisCfdis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Estilos/w3.css">
    <script src="InclusionesJavaSc/javascriptbackarrow.js"> </script>
    <script>
      function CambiaAEnable()
        {
          document.getElementById("BotCarga").disabled = false;
          document.getElementById("MsgEnPantalla").className= "w3-panel w3-pale-yellow w3-border";
          document.getElementById("MsgEnPantalla").style.color = "red";
          document.getElementById("MsgEnPantalla").style = "background-color:red";
          document.getElementById("MsgEnPantalla").innerHTML = "<h4>La carpeta con sus archivos ha sido identificada.\n\
                                                                <BR /> Seleccione el boton <b>Leer XMLs</b> para leer el contenido de los archivos y habilitar la consulta.\n\
                                                                <BR /> O el boton <b>Elegir archivos</b> para seleccionar otra carpeta que contenga archivos xml.</h4>";
        }
      function DespMsgError(msg)
        {
          window.alert(msg);
        }
    </script>
    
  </head>
  <body class="w3-container">
    <div class="w3-col m1 w3-center">
      <p> </p> 
    </div>
    <div class="w3-col m10">
      <header class="w3-container w3-teal w3-small w3-border">
          <h4>MisCfdis</h4>
          <!-- Menu Principal -->
          <?php include "InclusionesPhp/MenuPrincipalMobile.php";?>
          <?php include "InclusionesPhp/MenuPrincipal.php";?>
          <!-- fin menu principal -->
      </header> 
      <main>   
        <h4 id="MsgEnPantalla" class="w3-panel w3-pale-green w3-border">Bienvenido a MisCfdis. La plataforma que permite realizar, 
            fácil y rápidamente, un análisis de los CFDIs en formato XML 
            almacenados en una carpeta. Seleccione la opción deseada.
        </h4>
      </main>
      <footer class="w3-container w3-teal">
        <p class="w3-tiny">&copy; itpresence 2021</p>
      </footer>
    </div>
  </body>
  <?php
      }
    else 
      {	header("Location: 010index.php");}
  ?>
</html>
