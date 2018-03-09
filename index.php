<<?php 
	include('server.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
 	
 	<link rel="stylesheet" type="text/css" href="style.css">

	<title>CRUD FORM</title>

</head>
<body>
	
	<table class="table">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Endereço</th>
				<th colspan="2">Ação</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>John</td>
				<td>United States</td>
				<td>
					<a href="#">Editar</a>
				</td>
				<td>
					<a href="#">Deletar</a>
				</td>
			</tr>
		</tbody>
	</table>
	<form method="post" action="servidor.php">
  <div class="form-group">
  
    <label for="exampleInputName1">Nome</label>
    <input type="text" class="form-control" id="exampleInputName1" name="nome" placeholder="Nome">
  </div>
  <div class="form-group">
    <label for="exampleInputAddress1">Endereço</label>
    <input type="text" class="form-control" id="exampleInputAddress1" name="address" placeholder="Endereço">
  </div>

  <button type="submit" name="save" class="btn btn-primary">Enviar</button>
</form>

</body>
</html>