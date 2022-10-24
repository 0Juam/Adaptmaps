<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../bootstrap-5.2.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/form-registro.css">
    <script type="text/javascript" src="../script/labelFloat.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <title>Cadastro</title>
</head>
<body>
   <div class="search-form">
       <fieldset>
           <legend>Cadastro</legend>
            <form name="formCadastro" id="formCadastro" action="../controller/cadastro.php" method="POST">
                <div class="search-form-container">
                    <label for="userName">Nome: </label><br>
                    <input type="text" name="form-nome" value="" id="nomeCadastro" required><br><br>
                </div>
                <div class="search-form-container">
                    <label>Email: </label><br>
                    <input type="text" name="form-email" value="" id="email" required><br><br>
                </div>
                <div class="search-form-container">
                    <label>Senha: </label><br>
                    <input type="text" name="form-senha" value="" id="senha" required><br><br>
                    </div>
                <div class="search-form-container">
                    <label>Confirmar senha: </label><br>
                    <input type="text" name="form-conf-senha" value="" id="confSenha" required><br><br>
                </div>
            </form>
        </fieldset>
        <?php
        if(isset($_SESSION['cadastroStatus'])){
            echo "<p style='color:red; text-align:center'>". $_SESSION['cadastroStatus']. "</p>";
			session_destroy();
        }
    	?>
        <div id="regButton">
            <input type="submit" name="test-button" id="btnCadastro" value="Cadastrar">
            <a href="test-home.php">Cancelar</a>
        </div>
    </div>
</body>
<script language="javascript">
    $('#btnCadastro').click(function () {

        var nome = $('#nomeCadastro').val();
        var email = $('#email').val();
        var senha = $('#senha').val();
        var confirmarSenha = $('#confSenha').val();

        if (nome == "") {
            alert('O campo nome é obrigatório!');
            return;
        }
        if (email == "") {
            alert('O campo email é obrigatório!');
            return;
        }
        if (senha != confirmarSenha) {
            alert('As senhas não conferem!');
            return;
        }
        if (senha == "" || confirmarSenha == "") {
            alert('As senhas não conferem!');
            return;
        }

        $('#formCadastro').submit();

    });  
</script>
</html>