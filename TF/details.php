<?php
include_once('utilities.php');
include_once('db/database_utilities.php');

$id = isset( $_GET['Id'] ) ? $_GET['Id'] : '';

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

  update( $id, $nombres, $apellido_pat, $apellido_mat, $telefono, $correo, $contraseña );
  die();

}

$user = get_user_by_id( $id );

?>
<!doctype html>
<html class="no-js" lang="es">
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
 
      <div class="large-12 columns">
        <h3>Modifica registro</h3>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <form method="post">
                <div class="row">
                  <div class="large-12 columns">
                    <label>Nombres
                      <input type="text" name="Nombres" value="<?php echo $user['Nombres']; ?>" placeholder="" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <label>Apellido_pat
                      <input type="text" name="Apellido_pat" value="<?php echo $user['Apellido_pat']; ?>" placeholder="" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <label>Apellido_mat
                      <input type="text" name="Apellido_mat" value="<?php echo $user['Apellido_mat']; ?>" placeholder="" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <label>Telefono
                      <input type="text" name="Telefono" value="<?php echo $user['Telefono']; ?>" placeholder="" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <label>Correo
                      <input type="text" name="Correo" value="<?php echo $user['Correo']; ?>" placeholder="" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <label>Contraseña
                      <input type="text" name="Contraseña" value="<?php echo $user['Contraseña']; ?>" placeholder="" />
                    </label>
                  </div>
                </div>
                  <div class="large-4 columns">
                    <label>
                      <input type="submit" class="button success" value="MODIFICAR" />
                    </label>
                  </div>
                </div>
              </form>
            </div>
          </section>
        </div>
      </div>
    <?php require_once('footerc.php'); ?>