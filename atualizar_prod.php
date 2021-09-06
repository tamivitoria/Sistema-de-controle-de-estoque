<?php

include 'config.php';

$id_produto = $_POST['id_produto'];
$nome = $_POST['nome'];
$tipo_id = $_POST['tipo'];
$quant = $_POST['quant'];
$valor = $_POST['valor'];
$imposto = $_POST['imposto'];
mysqli_select_db($conn,'$dbname');

$sql = "UPDATE produto SET nome='$nome', tipo_id='$tipo_id', quant='$quant', valor='$valor', imposto='$imposto' WHERE id_produto='$id_produto'"; 

if (mysqli_query($conn,$sql))
echo "<script>alert('Editado com sucesso!'); window.location = 'consultar_prod.php';</script>";
else
  echo "<script type='text/javascript'> alert ('Erro ao editar produto!'); window.location ='editar_prod.php'; </script>";
mysqli_close($conn);
?>

?>
