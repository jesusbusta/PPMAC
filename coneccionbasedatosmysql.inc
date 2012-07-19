<?php
  function conectarbase()
  {
     $enlace = mysql_connect("localhost", "root", "") or die("No pudo conectarse : " . mysql_error());
     mysql_select_db("pabloprada") or die("No pudo seleccionarse la BD.");
     return $enlace;
  }
  function basedatos($consulta)
  {
  $resultado = mysql_query($consulta) or die("La consulta fall&oacute;: " . mysql_error());
  return $resultado;
  }
?>
