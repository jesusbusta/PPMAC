<?php require_once('Connections/equipo.php'); ?>
<?php
mysql_select_db($database_equipo, $equipo);
$query_Recordset1 = "SELECT * FROM equipo";
$Recordset1 = mysql_query($query_Recordset1, $equipo) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
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
    <style type="text/css">
<!--
.Estilo1 {font-size: 18px}
-->
    </style>
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
<div class="art-nav">
	<div class="art-nav-l"></div>
	<div class="art-nav-r"></div>

</div>

<?php include "menup1.php" ?>	

<style type="text/css">
@import url(calendario/calendar-blue.css);</style>
<script type="text/javascript" src="calendario/calendar.js"></script>
<script type="text/javascript" src="calendario/calendar-es.js"></script>
<script type="text/javascript" src="calendario/calendar-setup.js"></script>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script language="javascript" src="validacion.js"></script> 
</head>
<body>	

<div class="cleared reset-box"></div>
<div class="art-content-layout">
                <div class="art-content-layout-row">
                    <div class="art-layout-cell art-content">
<div class="art-post">
    <div class="art-post-body">
<div class="art-post-inner art-article">
                                <h2 align="center" class="art-postheader">Sistema Automatizado para el Mantenimiento Preventivo de una Linea Procesadora de Papa Fresca </h2>
                                <div class="cleared"></div>
                                <div class="art-postcontent">

 <form method="post" name="form1" id="form1" enctype="multipart/form-data" action="piezas.php" onsubmit="return validar()">
<br>   
 
<p align="center" class="Estilo3 Estilo1"><strong>Registro de Piezas  </strong></p>

<div align="center"><br>
<fieldset>
<legend><strong>Piezas</strong></legend>
  
  <table border="0" align="center">
	<tr>
	<td><p><strong> Seleccionar Equipo</strong></p><select name="Equipo">
	  <?php
do {  
?>
	  <option value="<?php echo $row_Recordset1['serial']?>"<?php if (!(strcmp($row_Recordset1['serial'], $row_Recordset1['serial']))) {echo "selected=\"selected\"";} ?>><?php echo $row_Recordset1['serial']?></option>
	  <?php
} while ($row_Recordset1 = mysql_fetch_assoc($Recordset1));
  $rows = mysql_num_rows($Recordset1);
  if($rows > 0) {
      mysql_data_seek($Recordset1, 0);
	  $row_Recordset1 = mysql_fetch_assoc($Recordset1);
  }
?>
	</select></td>
	</tr>
	
        <td width="49"><div align="center"><strong>Codigo de pieza </strong></div></td>
        <td width="49"><label>
          <div align="left">
            <input name="codigo" type="text" id="codigo" />
          </div>
        </label></td>
		
        <td width="70"><div align="center">
          <p><strong>Nombre de la Pieza </strong></p>
        </div></td>
        <td width="74"><div align="left">
          <input name="nombre" type="text" id="nombre" />
        </div></td>
		
		<td width="70"><div align="center">
          <p><strong>Dimensiones </strong></p>
        </div></td>
        <td width="74"><div align="left">
          <input name="tamano" type="text" id="tamano" />
        </div></td>
		
       
	   <tr>
	    <td width="49"><div align="center"><strong>Prioridad de revision</strong></div></td>
        <td width="49"><div align="left">
		    <label>
		    <select name="revision" id="revision">
		      <option selected>Seleccionar</option>
		      <option value="diaria">Diaria</option>
		      <option value="semanal">Semanal</option>
				<option value="mensual">Mensual</option>	        </select>
		    </label>
	    </div></td>
	 

		<td width="90" valign="middle"><div align="center"><strong>Fecha de Mantenimiento Proximo</strong></div></td>
        <?php // formato de la fecha ano, mes y dia
              $hoy=date("Y-m-d");
            ?>
        <td width="155"><div align="center">
            <input type="text" id="fechai" name="fechademantenimiento" size="10" onkeypress="return nonumeyletra(event)"readonly="readonly"/>
            <input name="image" type="image" id="fecha" src="calendario/calendario.gif" />
            <input type="hidden" name="fechatemp1" id="fechatemp" value="<?php echo $hoy?>" size="20" />
            <script type="text/javascript">

					//importante colocar esto cada vez que se utiliza el calendario y adaptarlo al input que se va a utilizar
 					Calendar.setup
						(
    							{
      								inputField  : "fechai", //nombre del id de del campo
      								ifFormat    : "%d-%m-%Y",
      								button      : "fecha" //nombre del id del campo boton o imagen que saca el calendario
    							}
  						);

				</script>
        </div></td>
	
		 <tr> 
	<td width="70"><div align="center">
          <p><strong>Cantidad</strong></p>
        </div></td>
	 	
		<td width="49"><div align="left">
          <input name="cantidad" type="text" id="cantidad" />
        </div></td>
	   <table border="0" align="center">
	<tr>
	
<td><div align="center"><strong>Fotografia</strong>
      <input type="hidden" id="titulo" name="titulo" >
      <input type="file" size="20" name="archivo" id="archivo">
  </div></td>

	  </tr>
	
	
</table>
</fieldset>

  <br>

    <input name="submit" type="submit" value="Guardar">
</div>
 </form>
</div>
                <div class="cleared"></div>
                </div>

		<div class="cleared"></div>
    </div>
</div>

                      <div class="cleared"></div>
                    </div>
                </div>
          </div>
            <div class="cleared"></div>
            <div class="art-footer">
                <div class="art-footer-t"></div>
                <div class="art-footer-l"></div>
                <div class="art-footer-b"></div>
                <div class="art-footer-r"></div>
                <div class="art-footer-body">
                            <div class="art-footer-text">
                                
<p>Elaborado por </p>


                  </div>
                    <div class="cleared"></div>
                </div>
            </div>
    		<div class="cleared"></div>
        </div>
    </div>
    <div class="cleared"></div>
    <p class="art-page-footer"><a href="http://www.artisteer.com/?p=website_templates">Website Template</a> created with Artisteer.</p>
</div>

</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
