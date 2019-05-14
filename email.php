<?php
 include("cabecalho.php");
$nome = filter_input(INPUT_POST, "nome");
$email = filter_input(INPUT_POST, "email");
$descricao = filter_input(INPUT_POST, "descricao");
$fone = filter_input(INPUT_POST, "fone");
echo "Nome: " . $nome;
echo "<br>E-mail: " . $email;
echo "<br>Descrição: " . $descricao;
echo "<br>Fone: " . $fone;
?>
<div class="alert alert-success" role="alert">
  Enviado com Sucesso!
  </div>
<?php
include("rodape.php");
 ?>