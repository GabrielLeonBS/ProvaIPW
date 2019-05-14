<?php
	include("cabecalho.php");
?>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-7">
    <h1>Localização </h1>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.357894413209!2d-51.87183288502417!3d-23.447551484739442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ecdabcbb262c97%3A0x1286c3f69a9f00db!2sCol%C3%A9gio+Ant%C3%B4nio+Francisco+Lisboa!5e0!3m2!1spt-BR!2sbr!4v1556623696592!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
     </div>
     <div class="col-sm-5">
      <h2>Contato</h2>
       <form action="email.php" method="post">
		  <div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="email" class="form-control" id="email" name="email">
		  </div>
		  <div class="form-group">
		    <label for="nome">Nome:</label>
		    <input type="text" class="form-control" id="nome" name="nome">
		  </div>
		  <div class="form-group">
		    <label for="fone">Fone:</label>
		    <input type="text" class="form-control" id="fone" name="fone">
		  </div>
		  <div class="form-group">
		    <label for="descricao">Descrição:</label>
		    <textarea class="form-control" id="descricao" name="descricao"></textarea>
		  </div>
		  <button type="submit" class="btn btn-primary">Enviar</button>
		</form> 	
    </div>
  </div>
</div>

<?php
	include("rodape.php");	
?>