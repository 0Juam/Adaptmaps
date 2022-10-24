<?php
session_start();
    $email = $_POST['form-email'];
    $senha = $_POST['form-senha'];

   $conn = mysqli_connect('localhost:3307', 'root', '', 'adaptmaps');

    $email = mysqli_real_escape_string($conn, $email);
    $senha = mysqli_real_escape_string($conn, $senha);

    $resultado = mysqli_query($conn, 'SELECT * FROM usuario WHERE email = "' . $email . '" AND senha = "' . $senha . '"');
    $rowCount = $resultado->num_rows;
    $usuario = $resultado->fetch_assoc();

    if ($rowCount == 1){
         $_SESSION['loginStatus'] = "";
         $_SESSION['usuario'] = $usuario['nome'];
        header ('location: ../view/test-home.php');
    }
    else{
        $_SESSION['loginStatus'] = "Login inválido. Email e/ou senha inválidos!";
        header ('location: ../view/test-login.php');
    }

    mysqli_close($conn);

?>