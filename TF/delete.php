<?php
include_once('utilities.php');
include_once('db/database_utilities.php');

header('Location: clientes.php');
$id = isset( $_GET['Id'] ) ? $_GET['Id'] : 0;
delete( $id );