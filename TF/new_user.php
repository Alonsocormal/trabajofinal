<?php
include_once('utilities.php');
include_once('db/database_utilities.php');

if( $_POST )
{

  header('Location: clientes.php');
  //die();
  $nombres = isset( $_POST['Nombres'] ) ? $_POST['Nombres'] : '';
  $apellido_pat = isset( $_POST['Apellido_pat'] ) ? $_POST['Apellido_pat'] : '';
  $apellido_mat = isset( $_POST['Apellido_mat'] ) ? $_POST['Apellido_mat'] : '';
  $telefono = isset( $_POST['Telefono'] ) ? $_POST['Telefono'] : '';
  $correo = isset( $_POST['Correo'] ) ? $_POST['Correo'] : '';
  $contraseña = isset( $_POST['Contraseña'] ) ? $_POST['Contraseña'] : '';

  add( $nombres, $apellido_pat, $apellido_mat, $telefono, $correo, $contraseña );
  die();

}

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clientes |  Iconic</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <?php require_once('headerc.php'); ?>

     
    <div class="row">
 
      <div class="large-9 columns">
        <h3>Agregar nuevo registro</h3>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <form method="post">
              <div class="row">
                  <div class="large-12 columns">
                    <label>Nombres
                      <input type="text" name="Nombres" placeholder="" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <label>Apellido_pat
                      <input type="text" name="Apellido_pat" placeholder="" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <label>Apellido_mat
                      <input type="text" name="Apellido_mat" placeholder="" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <label>Telefono
                      <input type="text" name="Telefono" placeholder="" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <label>Correo
                      <input type="text" name="Correo" placeholder="" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <label>Contraseña
                      <input type="text" name="Contraseña" placeholder="" />
                    </label>
                  </div>
                </div>
                  <div class="large-4 columns">
                    <label>
                    <input type="submit" class="button success" value="AGREGAR" />
                    </label>
                  </div>
                </div>
              </form>
            </div>
          </section>
        </div>
      </div>
    

    <?php require_once('footerc.php'); ?>