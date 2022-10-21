<?php

 include('conexion.php');

  $id = $_REQUEST['id'];
  $equipo = $_POST['equipo'];
  $logo = $_POST['logo'];
  $convocado = $_POST['convocado'];
  
  
  

 $query = "UPDATE jugadores set equipo = '$equipo', logo = '$logo', convocado = '$convocado' WHERE id=$id";
  mysqli_query($conectar, $query);

 $result = mysqli_query($conectar,$query);


 if ($result){

 	header('location: imprimir.php');
}

 else{

 	echo 'No se puedo liberar';
}

  

?> 








