<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-5.2.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/form-registro.css">
    <script type="text/javascript" src="../script/labelFloat.js" defer></script>
	<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

	<title>Entrar</title>
</head>
<body>
	<div class="search-form">
		<fieldset>
			<legend>Entrar</legend>
			<form name="formLogin" id="formLogin" action="../controller/login.php" method="POST">
				<div class="search-form-container">
                    <label>Email: </label><br>
                    <input type="text" name="form-email" value="" id="email" required><br><br>
				</div>
				<div class="search-form-container">
                    <label>Senha: </label><br>
                    <input type="text" name="form-senha" value="" id="senha" required><br><br>
				</div>
			</form>
		</fieldset>
		<p style=' text-align:center'>Não tem uma conta? Clique <a href="test-cadastro.php">aqui</a></p><br>
		<?php
        if(isset($_SESSION['loginStatus'])){
            echo "<p style='color:red; text-align:center'>". $_SESSION['loginStatus']. "</p>";
			session_destroy();
        }
    	?>
        <div id="regButton">
            <input type="submit" name="test-button" id="btnlogin" value="Entrar">
            <a href="test-home.php">Cancelar</a>            
        </div>		
	
	</div>
</body>
<script language="javascript">
    $('#btnlogin').click(function () {

        var email = $('#email').val();
        var senha = $('#senha').val();

        if (email == "") {
            alert('O campo email é obrigatório!');
            return;
        }

		if (senha == "") {
            alert('O campo senha é obrigatório!');
            return;
        }

        $('#formLogin').submit();

    });  
</script>
</html>