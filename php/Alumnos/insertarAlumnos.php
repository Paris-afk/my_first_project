<?php

//llamando a la db 
require_once('../conexion.php');

function InsertarAlumno(){
    $mysqli = getConn();
    $nombre = $_POST['nombre'];
    $apellidoPaterno= $_POST['apellidoPaterno'];
    $apellidoMaterno=$_POST['apellidoMaterno'];
    $grupo=$_POST['grupo'];
    $carrera=$_POST['carrera'];

    $query = " INSERT INTO `alumnos` (`MATRICULA_A`,`CVE_GRUPO`,`NOMBRE`,`APELLIDO_P`,`APELLIDO_M`) VALUES (NULL,'{$grupo}','{$nombre}','{$apellidoPaterno}','{$apellidoMaterno}');";
    $result = $mysqli -> query($query);
    
}
echo true;
echo InsertarAlumno();