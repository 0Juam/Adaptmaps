<?php
    $nomeComentario = $_POST['nomeComentario'];
    $comentario = $_POST['comentario'];

   $conn = mysqli_connect('localhost:3307', 'root', '', 'adaptmaps');

    $nomeComentario = mysqli_real_escape_string($conn, $nomeComentario);
    $comentario = mysqli_real_escape_string($conn, $comentario);

    $resultado = mysqli_query($conn, 'INSERT INTO comentario(nome, cometario) VALUES("' . $nomeComentario . '", "' . $comentario . '")');

    if ($resultado)
        echo("Comentario enviado com sucesso");
    else
        echo("Erro ao enviar comentário");

    mysqli_close($conn);

    header ('location: ../index.php');
    

?>