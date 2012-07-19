<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php 
   
   
   //tomar las variables  
   $codigo=$_POST['codigo'];
   $nombre=$_POST['nombre'];
   $tamano=$_POST['tamano'];
   $material=$_POST['material'];
   $cantidad=$_POST['cantidad'];
   $titulo=$codigo.$nombre;
   $nro_fil = 0;
    
$titulo=$cod_elemento.$nombre_elemento;
$nro_fil = 0;

include "coneccionbasedatosmysql.inc";
$enlace =conectarbase();
// $enlace se iguala a la funcion cenectarbase()


//tomo el valor de un elemento de tipo texto del formulario "$num_reg"
 $nombre_archivo2 = $cod_elemento.$nombre_elemento.".jpeg";
//datos del arhivo
 $nombre_archivo = $_FILES['archivo']['name'];
 $tipo_archivo = $_FILES['archivo']['type'];
 $tamano_archivo = $_FILES['archivo']['size'];
//compruebo si las caracter?sticas del archivo son las que deseo
if (!((strpos($tipo_archivo, "jpeg")) && ($tamano_archivo < 100000000)))
{
   echo "<center>La extensi?n no es correcta. <br><center>Se permiten archivos .jpg unicamente<br></br><br></br>";
}
else
{
// funcion para almacenar el archivo en el servidor
   if (move_uploaded_file($_FILES['archivo']['tmp_name'], "rutas/$nombre_archivo2"))
   {
      echo "<tr><td><BR><p><strong><center>Datos Correctos</center></strong></p><BR></td></tr></table>";
      if($nro_fil == 0)
           {
             $ruta = "rutas/$nombre_archivo2";
			 
			 
			 //COLOCA CONTENIDO EN MAYUSCULA


$nombre=strtoupper($nombre);
$material=strtoupper($material);

// funcion para insertar los ddatos en la tabla informe_personal
             $Insertar= "INSERT INTO piezas VALUES($codigo,'$nombre','$tamano','$material','$cantidad','$ruta','$titulo')";
             $resultadoins=basedatos($Insertar);
             echo "<BR><p><strong><center>La Informaci?n fue registrada satisfactoriamente</center></strong></p><BR></tr>";
           }
       mysql_close ($enlace);
   }else
    {
      echo "Ocurri? alg?n error al subir el fichero. No pudo guardarse.";
    }
}
?>


        

</body>
</html>