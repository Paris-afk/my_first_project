<?php

$divisionAcademica=$_GET['DivisionAcademica'];
$carrera=$_GET['carrera'];
$grupo=$_GET['grupo'];
$periodo=$_GET['ciclos'];
$tema=$_GET['tema'];
$duracion=$_GET['duracion'];
$sesionActual=$_GET['solicitante'];
$fechaFin=$_GET['fechaFin'];
$numeroAlumnos=$_GET['numeroAlumnos'];
$Vturno=$_GET['Vturno'];
$Vtsu=$_GET['Vtsu'];
$Vasesoria=$_GET['Vasesoria'];
$comentario=$_GET['comentario'];
$tutor=$_GET['Tutor'];

echo $periodo;
echo $tutor;
//no olvidar insertar la fecha actual que es donde se genera la asesoria <3
try{
require_once '../../php/conexion.php';

$mysqli = getConn();

$sql="INSERT INTO `asesorias` (`CVE_FORMATOFOLIO`, `CVE_PERIODO`,`CVE_GRUPO`,`CVE_ASESOR`,`CVE_PROGRAMA`,`CVE_DIVA`,`CVE_ESTATUS`,`FECHA_INICIO`,`DURACION`,`DUDAS`,`FECHA_FIN`,`TURNO`,`NIVEL_A`,`TIPO_A`,`RECIBIDA`,`NUMERO_A`,`CVE_TUTOR`) VALUES (NULL,$periodo,$grupo,$tutor,$carrera,$divisionAcademica,2,NOW(),'$duracion','$comentario','$fechaFin',$Vturno,$Vtsu,$Vasesoria,0,'$numeroAlumnos',$sesionActual);";
$resultado = $mysqli->query($sql);


//el '1' en RECIBIDA quiere decir que es la sesion actual quien la solicita 
}catch(Exception $e){
$error = $e->getMessage();
echo $error;

}
?>

<script>
alert("solicitud con exito")
header("location:index2.php?id=".$id);
</script>



