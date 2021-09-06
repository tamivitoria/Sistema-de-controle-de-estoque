<?php
include"config.php";


include"includes/header.php";

 $id_tipo = $_GET['id_tipo'];   
 $sql = "SELECT * FROM tipo WHERE id_tipo LIKE '$id_tipo'";
 $result = mysqli_query($conn, $sql);
 $linha = mysqli_fetch_assoc($result);
 
?>
    <br><br><br><br><br><br>
    <div class="row">
        <div class="col-md-6 .offset-md-3">
            <h1 style="text-align: center; font-size: 30px;">  Editar tipo de produtos </h1>
                <br>



                <form action="atualizar_tipo.php" method="POST">
                    <input name="id_tipo" type="hidden" class="form-control" value="<?php echo $linha['id_tipo']; ?>">
                    <div class="form-group">
                        <input name="tipo" type="text" class="form-control" placeholder="Tipo" value="<?php echo $linha['tipo']; ?>">
                    </div>
                    <div class="form-group">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end"><input value="Editar" type="submit" class="btn btn-info align-items-center"></div>
                    </div>
                </form>
        </div>

    </div>

  </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>