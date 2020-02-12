<!DOCTYPE html>
<html>
<head>
	<title>Mensagem</title>

	<meta charset="utf-8">

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

	    <!-- Bootstrap -->
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	    <script type="text/javascript">
	    </script>
</head>

<style type="text/css">
	body{
		margin-top:1%;
		margin-left: 1%;
	}
</style>

<body>
<form action="" method="POST">
	<label>
	   <input type="text" class="form-control" name="mensagem" placeholder="Digite sua mensagem: " required="required">
	</label>

	<button class="btn btn-primary">Salvar</button>

	<table class="table-striped" border="1">

	           <h4>Mensagens salvas:</h4>

       <thead>
         <tr>
           <th>Id</th>
           <th>Formato 1 </th>
           <th>Formato 2</th>
           <th>Formato 3</th>
           <th>Mensagem</th>
         </tr>
        </thead>

	  <?php
	  require 'inserir_dados.php';
	  
	  $consulta = "SELECT * FROM mensagens";

	  $objDB = new db();
	  $link = $objDB -> mysql();
	  $resultado = mysqli_query($link, $consulta);
	 
	  if ($resultado){
	  	while ($row_mensagem = mysqli_fetch_assoc($resultado)) {

		?>

		<tr>
		<td width="30"><?php  echo $row_mensagem['id'];?></td>
		<td width="150" align="center" ><?php date_default_timezone_set("America/Sao_Paulo");
		echo "" . date("d/m/Y");?></td>
		<td width="150" align="center" ><?php echo "" . date("Y-m-d");?></td>
		<td width="300" align="center" ><?php setlocale(LC_ALL, "pt_BR");
		echo "" . strftime('%a, %d de %B de %Y %X' );strtotime('today');?></td>
		<td width="150"><?php echo $row_mensagem['mensagem'];?></td>

 

		</tr>

		<?php  
	}
	   }else{
	     echo "Nemhum dado encontrado.";
	    }
	?>   

	</table>
	</form>
	</body>
</html>