<?php
	session_start();
	$idProduto = $_GET['id'];
	
	if(isset($_GET['remover']) && $_GET['remover'] == "cesta"){
	
	$idProduto = $_GET['id'];
	unset($_SESSION['itens'][$idProduto]);
	echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=cesta.php"/>';
	
}


	if(isset($_GET['add']) && $_GET['add'] == "cestaAdd")
{
	$idProduto = $_GET['id'];
	
	if (!isset($_SESSION['itens'][$idProduto]))
	{
		$_SESSION['itens'][$idProduto] = 1;
	}else{
		$_SESSION['itens'][$idProduto]+= 1;
	} 
}

?>
