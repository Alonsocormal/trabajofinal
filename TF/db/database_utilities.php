<?php
require_once('database_credentials.php');
$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
$result = '';

if( $mysqli->connect_errno )
{
	echo 'Error en la conexión';
	exit;
}

function run_query()
{
	global $mysqli, $result;
	$sql = 'SELECT * FROM cliente';
	return $mysqli->query($sql);

}

function add( $nombres, $apellido_pat, $apellido_mat, $telefono, $correo, $contraseña )
{
	global $mysqli;
	$sql = "INSERT INTO cliente (Id, Nombres, Apellido_pat, Apellido_mat, Telefono, Correo, Contraseña) VALUES (null, '{$nombres}','{$apellido_pat}','
                                                                                                        {$apellido_mat}','{$telefono}','{$correo}','{$contraseña}')";
	$mysqli->query($sql);

}

function update( $id, $nombres, $apellido_pat, $apellido_mat, $telefono, $correo, $contraseña )
{
	global $mysqli;
	$sql = "UPDATE cliente SET Nombres = '{$nombres}', Apellido_pat = '{$apellido_pat}', Apellido_mat = '{$apellido_mat}', 
                                Telefono = '{$telefono}', Correo = '{$correo}', Contrase{a = '{$contraseña}' WHERE Id = {$id}";
	$mysqli->query( $sql );

}

function delete( $id )
{
	global $mysqli;
	$sql = "DELETE FROM cliente WHERE Id = {$id}";
	$mysqli->query($sql);
}

function get_user_by_id( $id )
{
	global $mysqli;
	$sql = "SELECT * FROM cliente WHERE Id = {$id}";
	$result = $mysqli->query($sql);
	if( $result->num_rows )
		return $result->fetch_assoc();
	return false;

}