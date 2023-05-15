<?php
        include('../app/config/conexion.php');
        
    session_start();
    if (isset($_SESSION['sesion_email'])) {
        $sesion = $_SESSION['sesion_email'];
      //echo "existe una session iniciada";
    }else{
        header('Location:..'.$url.'/login');
    }

  // vamos a realizar la conexion a la base de datos para que podamos obtener los datos de la base 

  $consulta = "SELECT * FROM tb_users Where email = '$sesion' ";

  $resultado = $servidor->query($consulta);
  $renglones = $resultado->num_rows;



  if ($renglones > 0){
    while ($result = $resultado->fetch_assoc()) {
      $sessionNombre = $result['nombre'];
      $sessionApellido = $result['apellidos'];
      $sessionDui = $result['DUI'];
      $sessionCelular = $result['celular'];
      $sessionCargo = $result['cargo'];
      $sessionEmail = $result['email'];
      $sessionImg = $result['imgPerfil'];
    }
  }

?>

<?php
  include('../layout/admin/menus.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper"  >

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Binvenido <span style="font-style:oblique; color:#303030;text-shadow: -1px 5px 4px rgba(57,57,57,0.81);"  class= "text"><?php echo $sessionNombre; ?></span> </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div class= "row">
          <div class="col-md-4">
            
          </div>
          <div class="col-md-4">
          <table class="table table-hover table-striped" style="background-color: #fff">
              <thead>
                 <tr>
                  <th scope="col">Nombre</th>
                  <th scope="col"><?php echo $sessionNombre; ?></th>

                </tr>
             </thead>
              <tbody>
                 <tr>
              <th scope="row">Apellido</th>
                <td><?php echo $sessionApellido; ?></td>


              </tr>
               <tr>
                <th scope="row">Dui</th>
                <td><?php echo $sessionDui; ?></td>


              </tr>
              <tr>
                <th scope="row">Celular</th>
                <td colspan="2"><?php echo $sessionCelular; ?></td>

              </tr>
              <tr>
                <th scope="row">Cargo</th>
                <td colspan="2"><?php echo $sessionCargo; ?></td>

              </tr>
              <tr>
                <th scope="row">E-mail</th>
                <td colspan="2"><?php echo $sessionEmail; ?></td>

              </tr>
            </tbody>
          </table>
        
          </div>
          <div class="col-md-4">

          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->  


  <?php 
    include('../layout/admin/bodyFooter.php');
  ?>