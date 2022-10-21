<?php

include("../conexion.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
   $query = "DELETE FROM clubes WHERE id = $id";
  $result = mysqli_query($conectar, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Se elimino usuario';
  $_SESSION['message_type'] = 'danger';
  header('Location: listado-delegados.php');
}

?>
