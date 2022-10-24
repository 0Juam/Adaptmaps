<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="IMG/logo.png"/>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="view/style.css" />
    <title>Adaptmaps</title>
  </head>
  <body>
    <header>
      <nav>
        <img src="IMG/login.png" style="width:40px;height:40px;" alt="login"/>
        <input type="text" class="search.txt" placeholder="Pesquise aqui"/>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <li><a href="#">Início</a></li>
          <li><a href="#">Sobre</a></li>
          <li><a href="#">Contato</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <div class="meio">
        <p>
          
             </p>
              <div class="avaliacao">
                <form name="avaliacao" action="../controller/avaliacao.php" method="POST">
                      <input type="radio" name="vazio" value="" checked style="height: 15px; width: 15px;">

                      <label for="estrela1"><i class="fa"></i></label>
                      <input type="radio" name="estrela1" value="1" style="height: 15px; width: 15px;">

                      <label for="estrela2"><i class="fa"></i></label>
                      <input type="radio" name="estrela2" value="2" style="height: 15px; width: 15px;">

                      <label for="estrela3"><i class="fa"></i></label>
                      <input type="radio" name="estrela3" value="3" style="height: 15px; width: 15px;">

                      <label for="estrela4"><i class="fa"></i></label>
                      <input type="radio" name="estrela4" value="4" style="height: 15px; width: 15px;">

                      <label for="estrela5"><i class="fa"></i></label>
                      <input type="radio" name="estrela5" value="5" style="height: 15px; width: 15px;">
                      <br><br>
                      <input type="button" id="btnEnviarAvali" value="Avaliar" style="height: 25px;width: 150px;margin-top: 8px; cursor: pointer;">
                </form>

              </div>
        <div id="coment">
          <h3><center>COMENTÁRIOS</center></h3>
        </div>

        <form id="formComentario" action="controller/enviarComentario.php" method="POST">

            <label>Nome:</label><br>
            <input type="text" name="nomeComentario" id="nomeComentario" style="height: 25px;width: 150px; border-radius:5px;"><br>
            <label>Comentário:</label><br>
            <textarea name="comentario" id="comentario" style="height: 50px;width: 500px; border-radius:5px;"></textarea></br>
            <input type="button" id="btnEnviarComent" value="Enviar" style="height: 25px;width: 150px;margin-top: 8px; cursor: pointer;">
        
        </form>
        <br>
        <hr>
        <div id="comentarios" style="overflow-y: scroll; height: 100px; width: 900px;">
        <?php
					$conn = mysqli_connect('localhost:3307', 'root', '', 'adaptmaps');
					$resultado = mysqli_query($conn, 'SELECT * FROM comentario');
					while ($comentario = mysqli_fetch_object($resultado))
					{
						?>
						<b><?php echo($comentario->nome); ?></b> (<?php echo($comentario->data); ?>) comentou:
						<br />
						<?php echo($comentario->cometario); ?>
						<br />
            <br>
						<hr />
						<?php
					}
				?>
        </div>
      </div>
    </main>
    
    <script src="controller/mobile-navbar.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  </body>
  <script language="javascript">
      $('#btnEnviarComent').click(function(){

          var nomeComentario = $('#nomeComentario').val();
          var comentario = $('#comentario').val();

          if(nomeComentario == ""){
            alert('O campo nome é obrigatório');
            return;
          }
          if(comentario == ""){
            alert('O campo cometário é obrigatório!');
            return;
          }

          $('#formComentario').submit();

      });  
    </script>
</html>