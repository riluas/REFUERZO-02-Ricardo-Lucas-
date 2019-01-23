<?php
$menu=["Inicio", "Blog", "Videos", "Contacto"];
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilos.css">
    <title></title>
  </head>
  <body>
    <ul>
      <?php
      foreach ($menu as $item) {
      echo "<li><a href=>$item</a></li>";
      }
      ?>
    </ul>
    <?php
    ?>
  </body>
</html>
