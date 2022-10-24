<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <form name="formCadastro" id="formCadastro" action="../controller/cadastro.php" method="POST">
        <label>Nome:</label>
        <input  type="text" name="nomeCadastro" id="nomeCadastro" required/>

        <label>Gmail:</label>
        <input type="email" name="email" id="email" required/>

        <label>Senha:</label>
        <input type="password" name="senha" id="senha" required/>

        <label>Confirmar senha:</label>
        <input type="password" name="confirmarSenha" id="confirmarSenha" required/>

        <input type="button" name="btnCadastro" id="btnCadastro" value="Cadastrar">
    </form>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

</body>
<script language="javascript">
    $('#btnCadastro').click(function () {

        var senha = $('#senha').val();
        var confirmarSenha = $('#confirmarSenha').val();

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