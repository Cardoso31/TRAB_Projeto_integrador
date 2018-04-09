<?php
include "cabecalho.php";
include "funcoes.php";

$codigo=$_GET['cod'];

$jogo=buscaResenha($codigo);
?>
<div class="gridDupla">
	<div class="imagem">
<?php

	echo'
		<div class="ui link cards">
  <div class="card">
    <div class="image">
      <img src="imagens/'.$jogo["imagem1"].'">
    </div>
    <div class="content">
      <div class="header">'.$jogo["nome"].'</div>
    </div>
    <div class="extra content">
      <span class="right floated">Feito em '.$jogo["ano"].' </span>
      <span><i class="'.$jogo["icone"].' icon"></i>'.$jogo["categoria"].' </span>
    </div>
  </div>

  <div class="resenha">
	<div class="texto">
		<h3>'.$jogo["resenha"].'</h3>
	</div>
 	</div>
</div>
	
</div>
</div>'
;
include ("rodape.php");
?>


