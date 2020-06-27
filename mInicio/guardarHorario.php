<?php
// Conexion mysqli
include ("../conexion/conexionli.php");

//Recibo valores con el metodo POST
$id_datos                 = trim($_POST['txtclave']);
$hturno                  = trim($_POST['hTurno']);
$lEntrada                = trim($_POST['lEntrada']);
$lSalida                 = trim($_POST['lSalida']);
$mEntrada                = trim($_POST['mEntrada']);
$mSalida                 = trim($_POST['mSalida']);
$miEntrada               = trim($_POST['miEntrada']);
$miSalida                = trim($_POST['miSalida']);
$jEntrada                = trim($_POST['jEntrada']);
$jSalida                 = trim($_POST['jSalida']);
$vEntrada                = trim($_POST['vEntrada']);
$vSalida                 = trim($_POST['vSalida']);
$sEntrada                = trim($_POST['sEntrada']);
$sSalida                 = trim($_POST['sSalida']);
$dEntrada                = trim($_POST['dEntrada']);
$dSalida                 = trim($_POST['dSalida']);

$fecha=date("Y-m-d"); 
$hora=date ("H:i:s");

//Inserto registro en tabla pacientes 
$cadena = "INSERT INTO horarios
(id_datos_persona,
turno,
l_entrada,
l_salida,
m_entrada,
m_salida,
mi_entrada,
mi_salida,
j_entrada,
j_salida,
v_entrada,
v_salida,
s_entrada,
s_salida,
d_entrada,
d_salida,
fecha_registro,
hora_registro)
VALUES
('$id_datos',
'$hturno',                    
'$lEntrada',                
'$lSalida',                 
'$mEntrada',               
'$mSalida',                 
'$miEntrada',               
'$miSalida',                
'$jEntrada',                
'$jSalida',                 
'$vEntrada',                
'$vSalida',                 
'$sEntrada',                
'$sSalida',                 
'$dEntrada',                
'$dSalida',
'$fecha',
'$hora')";
echo $cadena;
// $insertar = mysqli_query($conexionLi, $cadena);

//En caso de error imprime
print_r(mysqli_error($conexionLi));
//Cierro la conexion
mysqli_close($conexionLi);
?>
