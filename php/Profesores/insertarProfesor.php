<?php

//llamando a la db 
require_once('../conexion.php');

function InsertarProfesor(){
    $mysqli = getConn();
    $nombre = $_POST['nombre'];
    $apellidoPaterno= $_POST['apellidoPaterno'];
    $apellidoMaterno=$_POST['apellidoMaterno'];
    $tutor=$_POST['tutor'];
    $carrera=$_POST['carrera'];

    $query = " INSERT INTO `profesores` (`CVE_ASESOR`,`CVE_PROGRAMA`,`NOMBRE`,`APELLIDO_P`,`APELLIDO_M`,`TUTOR`) VALUES (NULL,'{$carrera}','{$nombre}','{$apellidoPaterno}','{$apellidoMaterno}','{$tutor}');";
    $result = $mysqli -> query($query);
    
}
echo true;
echo InsertarProfesor();