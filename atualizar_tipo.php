<?php

include 'config.php';

$id_tipo = $_POST['id_tipo'];
$tipo = $_POST['tipo'];
mysqli_select_db($conn,'$dbname');

$sql = "UPDATE tipo SET tipo='$tipo' WHERE id_tipo='$id_tipo'"; 

if (mysqli_query($conn,$sql))
echo "<script>alert('Editado com sucesso!'); window.location = 'consultar_tipo.php';</script>";
else
  echo "<script type='text/javascript'> alert ('Erro ao editar tipo!'); window.location ='editar_tipo.php'; </script>";
mysqli_close($conn);
?>

?>
