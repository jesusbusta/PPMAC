<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Created by Artisteer v3.0.0.39952
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Página Nueva</title>
    <meta name="description" content="Description" />
    <meta name="keywords" content="Keywords" />


    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
<div id="art-page-background-glare">
    <div id="art-page-background-glare-image"> </div>
</div>
<div id="art-main">
    <div class="art-sheet">
        <div class="art-sheet-tl"></div>
        <div class="art-sheet-tr"></div>
        <div class="art-sheet-bl"></div>
        <div class="art-sheet-br"></div>
        <div class="art-sheet-tc"></div>
        <div class="art-sheet-bc"></div>
        <div class="art-sheet-cl"></div>
        <div class="art-sheet-cr"></div>
        <div class="art-sheet-cc"></div>
        <div class="art-sheet-body">
            <div class="art-header">
                <div class="art-header-clip">
                    <div class="art-header-png"></div>
                    <div class="art-header-jpeg"></div>
                </div>
                <div class="art-headerobject"></div>
                <div class="art-logo">
                                 <h1 class="art-logo-name"><a href="./index.html">PP MAC</a></h1>
                                                 <h2 class="art-logo-text">Lavadora y Peladora</h2>
                                </div>
            </div>
            <div class="cleared reset-box"></div>

<div class="cleared reset-box"></div>
                                <h2 class="art-postheader">
                
                                </h2>
                <div class="cleared"></div>
                                <div class="art-postcontent">
<!--fin -->
<?php include "menup1.php" ?>	


<!--fin parte 1 encabezado-->
<title>CONSULTA-EMPLEADO</title>
</head>
<body>

<?php

	include "coneccionbasedatosmysql.inc";
    $criterio = $_POST['criterio'];
	//declarando la variable $criterio
	$enlace =conectarbase();
	// $enlace se iguala a la funcion cenectarbase()


	if(!isset($_GET['pag']))
//paginacion
	{

	$pag=1;

	}else

	{

		$pag=$_GET['pag'];

	}

	$hasta=10000000;
	$desde=($hasta*$pag)-$hasta;
// consulta a la tabla informe_personal	
	$consulta="SELECT * FROM elementos_componentes where match (codigo,nombre, equipo) against ('$criterio*' IN BOOLEAN MODE)";
	$resultado=mysql_query($consulta,$enlace);


?>

<center>
<CAPTION><strong>CONSULTA PARTES DE EQUIPO</strong></CAPTION>
<p>&nbsp;</p>

<table width="350"  border="8" align="center" class="tabla1"/>

<?PHP
		$i=0;
		while ($row = mysql_fetch_row($resultado))
    {
       //$link2 =$row[9];
       
		echo "<tr ><td> codigo: $row[0]</td>";
		//echo "<td><a target=_blank href='$link2'><img src='$row[9]' width='120'height='100'></a></td></tr>";
       	echo "<tr><td>Nombre:    $row[1]</td>";
		//echo "<td>Apellido:      $row[3]</td></tr>";
		echo "<tr ><td> Tamano: $row[2]</td></tr>";
		echo "<tr><td>Material: $row[3]</td><tr >";
       	echo "<tr><td>Cantidad: $row[4]</td>";
       	//echo "<tr><td>Departamento: $row[5]</td><tr>";
		echo "<tr><td> Equipo: $row[5]</td></tr>";
	

	   $i=$i+1;

       if (($i%1)==0)

       {

       echo "<tr></tr>";

       }

    }

		mysql_free_result($resultado);

	 ?>
  </table>
</body>
</html>

<!--fin de plantilla-->

<div class="art-content-layout">
  <div class="art-layout-cell art-sidebar1">
            <div class="art-footer">
                <div class="art-footer-t"></div>
                <div class="art-footer-l"></div>
                <div class="art-footer-b"></div>
                <div class="art-footer-r"></div>
                <div class="art-footer-body">
                <div class="art-footer-text">				
                                
<p><a href="#">Link1</a> | <a href="#">Link2</a> | <a href="#">Link3</a></p>
<p>Copyright © 2011. All Rights Reserved.</p>

</body>
</html>