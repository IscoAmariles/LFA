
<?php

include('conexion.php');

  
  $editar = $_POST['editar'];
  $comet = $_POST['comet'];
  $email = $_POST['email'];
  $pw = $_POST['pw'];
  $delegado = $_POST['delegado'];
  $equipo = $_POST['equipo'];
  $celular = $_POST['celular'];
  $saldo_pendiente = $_POST['saldo_pendiente'];
  $abonos = $_POST['abonos'];
  $logo = $_POST['logo'];
 

$query = "SELECT * FROM clubes WHERE pw = '$pw'";

$result = mysqli_query($conectar,$query);

if (mysqli_num_rows($result) == 1)

{

  echo "<h5>No se puede registrar</h5>";

}else{

  $consulta = "INSERT INTO clubes(editar, comet, email, pw, delegado, equipo, celular, saldo_pendiente, abonos, logo) VALUES ('$editar', '$comet', '$email', '$pw', '$delegado', '$equipo', '$celular', '$saldo_pendiente', '$abonos', '$logo' )";
  $conectar->query($consulta)or die(mysqli_error());
  echo "<h5>Usuario registrado</h5>";
}


?>