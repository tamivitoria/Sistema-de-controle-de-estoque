<?php

include 'config.php';
include 'includes/header.php';


$result = mysqli_query($conn, "SELECT * FROM tipo");
$row = mysqli_num_rows($result);


?>
<html>
	<head>
		<title> Cadastrar tipo</title>

		<link href="assets/css/cadastro.css" rel ="stylesheet">




	</head>

	<body>

		<br><br><br><br><br><br>
		<div class=tudo>

			<div class="row">
			    <div class="col-md-6 .offset-md-3">
					<h1 style="text-align: center; font-size: 30px;">  Cadastrar tipo de produtos </h1>
					<br>



						<form action="cadastrar_tipo.php" method="POST">
							<div class="form-group">
							    <input name="tipo" type="text" class="form-control" placeholder="Tipo" required>
							</div>
							<div class="form-group">
								<div class="d-grid gap-2 d-md-flex justify-content-md-end"><input value="Cadastrar" type="submit" class="btn btn-info align-items-center"></div>
							</div>
						</form>
				</div>

			</div>
	</div>
		
  </div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
		<script src="assets/js/bootstrap.min.js"></script>
	</body>
</html>
