<?php 
include("cabecalho.php");
include("funcoes.php");
$dados=listaJogos();
 ?>
<div class="marginTop "></div>


<div class=" ui grid center aligned page grid">

	<!-- Item-->
  <div class="four wide column ">


  	<a href="detalhaResenha.php/cod">
<?php
		for ($i=0; $i <8 ; $i++) { 
			$cod=$i;
	echo('
  	<div class="ui card">
  <div class="ui slide masked reveal image">
    <img src="'.$dados[imagem1].'" class="visible content">
    <img src="'.$dados[imagem1].'" class="hidden content">
  </div>
  <div class="content">
    <a class="header">'.$dados[nome].'</a>
    <div class="meta">
      <span class="date">'.$dados[info].'</span>
    </div>
  </div>
  <div class="extra content">
    <a>
      <i class="'.$dados[icone].' icon"></i>
    '.$dados[gategoria].'
    </a>
  </div>
</div>
 </a>
</div>
	');	
	}
?>
	<!-- Fim do tem-->

  </div>

</div>

