<?php
include"config.php";


include "includes/header.php";

 $id_produto = $_GET['id_produto'];   
 $sql = "SELECT * FROM produto WHERE id_produto='$id_produto'";
 $result = mysqli_query($conn, $sql);
 $linha = mysqli_fetch_assoc($result);
?>

<br><br><br><br><br><br>
<div class="row align-items-center">
    <div class="col-md-6 .offset-md-3">

        <h1 style="text-align: center; font-size: 30px;">  Editar produto </h1>
        <br>



            <form action="atualizar_prod.php" method="POST" enctype='multipart/form-data'>
                <input name="id_produto" type="hidden" class="form-control" value="<?php echo $linha['id_produto']; ?>">
                <div class="form-group">
                    <input name="nome" type="text" class="form-control" placeholder="Nome do produto" value="<?php echo $linha['nome']; ?>">
                </div>
                <div class="form-group">
                    <select class="form-select" aria-label="Default select example" name="tipo" value="<?php echo $linha['tipo']; ?>">
                        <option selected>Tipo</option>
                        <?php

                            $conn = mysqli_connect($servidor,$dbusuario,$dbsenha,$dbname);
                            $sql_tipo = mysqli_query($conn, "SELECT * FROM `tipo`");
                            $sel_tipo = $linha['tipo'];
                                while($row = mysqli_fetch_assoc($sql_tipo)){
                                    if($row['id_tipo'] == $sql_tipo){
                                        $selected = 'selected';
                                    }else{
                                        $selected = '';
                                    }
                                    echo "<option>" .$row['id_tipo']. " - " .$row['tipo']."</option>";
                                    
                                }
                        ?>
                    </select><br>               
                <div class="form-group">
                    <input name="quant" type="text" class="form-control" placeholder="Quantidade" value="<?php echo $linha['quant']; ?>">
                </div>                  
                <div class="form-group">
                    <input name="valor" type="text" class="form-control" placeholder="Valor" value="<?php echo $linha['valor']; ?>">
                </div>
                <div class="form-group">
                    <input name="imposto" type="text" class="form-control" placeholder="% Impostos" value="<?php echo $linha['imposto']; ?>">
                </div>
                <div class="form-group">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end"><input value="Editar" type="submit" class="btn btn-info"></div>
                </div>
            </form>
    </div>

   </div>
  </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>