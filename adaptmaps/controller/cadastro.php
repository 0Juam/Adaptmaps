<?php
session_start();
    $nome = $_POST['form-nome'];
    $email = $_POST['form-email'];
    $senha = $_POST['form-senha'];

   $conn = mysqli_connect('localhost:3307', 'root', '', 'adaptmaps');

    $nome = mysqli_real_escape_string($conn, $nome);
    $email = mysqli_real_escape_string($conn, $email);
    $senha = mysqli_real_escape_string($conn, $senha);

    $verificaEmail = mysqli_query($conn, 'SELECT * FROM usuario WHERE email = "' . $email .'"');
    $rowCount = $verificaEmail->num_rows;
    if($rowCount == 0){
        $resultado = mysqli_query($conn, 'INSERT INTO usuario(nome, email, senha) VALUES("' . $nome . '", "' . $email . '", "' . $senha . '")');
        header ('location: ../view/test-login.php');
    }else{
        $_SESSION['cadastroStatus'] = "Este email já está cadastrado!";
        header ('location: ../view/test-cadastro.php');
    }

    mysqli_close($conn);

    
    

?>