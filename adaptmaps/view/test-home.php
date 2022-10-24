<?php
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AdaptMaps</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap-5.2.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/pagina-inicial.css">
	<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>
<body>
	
	<?php
	if(isset($_SESSION['loginStatus'])){
		echo '<nav class="fixed-top">
		<ul>
			
			<li><a class="nav-link" href="#">'. $_SESSION['usuario'].'</a></li>
			<li><a class="nav-link" id="sair" href="../controller/sair.php">Sair</a></li>
		</ul>
	</nav>
	<div class="search">
		<h1>AdaptMaps</h1>
		<div class="search-form">
			<input type="text" name="test-form" value=""><br>
		</div>
		<div class="link-form">
			<img src="../IMG/loja-de-comida (1).png" title="Restaurantes">
			<!--<a href="#">Link 1</a>-->
			<img src="../IMG/parque (1).png" title="Lazer">
			<img src="../IMG/edificio-hospitalar.png" title="Hospitais">
		</div>
		<br>
		<div id="searchButton">
			<input type="submit" name="test-button" value="Pesquisar">
		</div>
	</div>';
	}else{
		echo '<nav class="fixed-top">
		<ul>
			<li><a class="nav-link" href="test-login.php">Entrar</a></li>
			<li><a class="nav-link" href="test-cadastro.php">Cadastrar</a></li>
		</ul>
	</nav>
	<div class="search">
		<h1>AdaptMaps</h1>
		<div class="search-form">
			<input type="text" name="test-form" value=""><br>
		</div>
		<div class="link-form">
			<img src="../IMG/loja-de-comida (1).png" title="Restaurantes">
			<!--<a href="#">Link 1</a>-->
			<img src="../IMG/parque (1).png" title="Lazer">
			<img src="../IMG/edificio-hospitalar.png" title="Hospitais">
		</div>
		<br>
		<div id="searchButton">
			<input type="submit" name="test-button" value="Pesquisar">
		</div>
	</div>';
	}
	?>
</body>
</html>