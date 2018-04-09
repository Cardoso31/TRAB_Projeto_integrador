<?php

function listaResenhas(){
	$resenha= array();

	$dados= file("dados.csv");

	foreach ($dados as $posicao => $linha) {
		if ($posicao !=0) {
		$colunas= explode(";",$linha);
			$resenha['cod'] =$colunas[0];
			$resenha['nome'] =$colunas[1];
			$resenha['imagem1'] =$colunas[2];
			$resenha['imagem2'] =$colunas[3];
			$resenha['info'] =$colunas[4];
			$resenha['categoria'] =$colunas[5];
			$resenha['icone'] =$colunas[6];
			$resenha['resenha'] =$colunas[7];
			$resenha['ano'] =$colunas[8];
			$resenhas[]=$resenha;
		}
			
	}
	return $resenhas;
}

function buscaResenha($codigo){

	$resenha= array();

	$dados= file("dados.csv");

	foreach ($dados as $linha) {
		$colunas= explode(";",$linha);
		if($colunas[0]==$codigo){
			$resenha['cod'] =$colunas[0];
			$resenha['nome'] =$colunas[1];
			$resenha['imagem1'] =$colunas[2];
			$resenha['imagem2'] =$colunas[3];
			$resenha['info'] =$colunas[4];
			$resenha['categoria'] =$colunas[5];
			$resenha['icone'] =$colunas[6];
			$resenha['resenha'] =$colunas[7];
			$resenha['ano'] =$colunas[8];		}
	}
	return $resenha;
}
