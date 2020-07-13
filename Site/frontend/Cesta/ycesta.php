<?php
session_start();
if(!isset($_SESSION['itens'])){
    $_SESSION['itens'] = array();
}
	
if(isset($_GET['add']) && $_GET['add'] == "cesta")
{
	$idProduto = $_GET['id'];
	
	if (!isset($_SESSION['itens'][$idProduto]))
	{
		$_SESSION['itens'][$idProduto] = 1;
	}else{
		$_SESSION['itens'][$idProduto]+= 1;
	} 
}

if(count($_SESSION['itens']) == 0) {
	echo 'Carrinho Vazio<br>"<a href="../vitrine/vitrine.php"> Retornar para vitrine</a>';
}else{

$con = new mysqli("localhost", "root", "", "loja");

	foreach($_SESSION['itens'] as $idProduto => $quantidade)
	{
		$sql = "select * from tb_roupa where pk_id_produto = {$idProduto}";
		$resultado = mysqli_query($con, $sql);
		
		while($req = mysqli_fetch_assoc($resultado)){ 
			echo 	
			'Nome: '.$req['nome_roupa'].'<br/>
			Preรงo: '.$req['vl_produto'].'<br/>
			Quantidade: '.$quantidade.'<br/><hr/>'
			;
		}
		
	}
}



