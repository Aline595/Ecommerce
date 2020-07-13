<!doctype html>
<html lang="pt-br">
	<head>
			
		<meta name="author" content="Aline Soares/ Celso Henrique/ Jonathan Kevin" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">	
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />	
		<!--tags para buscadores-->
		<meta name="description" content="Vestido Ideal: roupas de festa"/>
		<meta name="keywords" content="vestido, roupa de festa, vestido ideal, roupa de gala">
 
		<!--bootstrap-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<link href="../css/bootstrap.min.css" rel="stylesheet">
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	
		
		<!--titulo-->
        <title> Vestido Ideal </title>
		
		<!--icone logo-->
		<link rel="shortcut icon" href="../imagens_site/imagens/logo-removebg-preview.png">
		
		<!--icones na página-->
		<script src="https://kit.fontawesome.com/700cddc25b.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="style.css"/>
		<link rel="stylesheet" href="../global.css"/>

    </head>
    <header>
		<div id="cabecalho">
			<!--Imagem logo-->
			<div class='logo'>
				<a href="../vitrine/vitrine.php"><img src="../imagens_site/imagens/logo-removebg-preview.png" width=150 height=100></a>
				
			</div>
		<!--  caixa de busca mais nome loja-->
			<div class="col-lg-6">
				<h1 >Vestido Ideal</h1>
				<div class="input-group">
					
				<input id="pesquisa" type="text" class="form-control" placeholder="Pesquise">
				<span class="input-group-btn">
					<button  class="btn btn-default" type="button" style="background-color: black; color: white;" onclick="fazBusca()">OK</button></a>
				</span>
				</div>
			</div>
			 
			<!--icones perfil e carrinho-->
			<div id="icones_cabecalho">
				<a href="../cadastro/login.php" id="login"><i class="fas fa-user"></i></a>
				<a href="../Cesta/cesta.php" id="carrinho"><i class="fas fa-shopping-basket"></i></a>
			</div>
		
		</div>
		
		<!--MENU-->
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
			  <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="../vitrine/vitrine.php">Vestido Ideal</a>
			  </div>
			  <div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
				  <li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" class="active" href="#">Vitrine<span class="caret"></span></a>
					<ul class="dropdown-menu">
					  <li><a href="../pag_masculino/pag_masculino.php">Masculino</a></li>
					  <li><a href="../pag_feminino/pag_feminino.php">Feminino</a></li>
					</ul>
				  </li>
				  <li><a href="#">Carrinho</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				  <li><a href="../cadastro/cadastro.php"><i class="fas fa-user"></i> Cadastro</a></li>
				  <li><a href="../cadastro/login.php"><i class="fas fa-sign-in-alt"></i> Entrar</a></li>
				</ul>
			  </div>
			</div>
		  </nav>
	</header>


    <body style="background-color: rgb(248, 234, 233);">
        
        <div class="container">
			<?php
				if(isset($_GET["gravar"])) inserir();
			
			?>
            <form id="frm" method="post" action="cadastro.php?gravar=1">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" class="form-control" required="" placeholder="Digite seu nome" >
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required="" placeholder="Digite seu email">
                    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" class="form-control" required="" placeholder="Digite uma senha">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="senha">Confirmar senha</label>
                        <input type="password" id="senha_confirmada" class="form-control" required="" placeholder="Digite sua senha novamente">
                    </div>
                </div>


                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" class="form-control" required="" >
                </div>
                <div class="form-group">
                    <label for="tel">Telefone</label>
                    <input type="fone" id="telefone" name="telefone" placeholder="Digite seu telefone" class="form-control" required="" >
                </div>
				<input type="hidden" id="op" name="op" value="" />
                <button type="button" name="btCadCli" id = "btCadCli" style="background-color: rgb(236, 87, 107);
				border: none;" class="btn btn-primary" >Cadastrar</button>
            </form>
			
            <br/>
            <p>
                Já e cadastrado <a href="login.php" style="text-decoration: none; color: black;"> clique aqui</a>
            </p>

        </div>

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
	
	</body>
	<footer>
		<div>
			<h1>Conheça nossas redes </h1>

			<div id="icones">
				<a href="#"><i class="fab fa-facebook-square"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-youtube"></i></a>
				<a href="#"><i class="fab fa-pinterest"></i></a>
			</div>
			
		
		</div>

		<hr width="100%">

		<div id="pagamento">
			<h1>Formas de pagamento</h1>
			<img src="../imagens_site/imagens/cc.jpeg" alt=”some text” width=250 height=100>
		</div>

		<hr width="100%">

		<div>
			<h4> Encontre aqui os vestidos de festa ideais para todas as ocasiões. Grande variedade de cores e modelos para você estar sempre deslumbrante. Os nossos vestidos de festa são ideais para você. </h4>
			© 2020. Todos os direitos reservados.
		</div>
	</footer>
	
</html>

<script lang="javascript">


$("#btCadCli").click(function(){ 

  if(nome.value.length < 3){
		alert("Informe o seu nome !");
		nome.focus();
		return false;
	}
	
	if(email.value.length < 6 ||
		email.value.indexOf("@") <= 0 ||
		email.value.lastIndexOf(".") <=
		email.value.indexOf("@")
		){
		alert("Informe um email valido !");
		email.focus();
		return false;
	}
	
	if(senha.value.length < 6 || 
		isNaN(senha.value)){
		alert("Informe uma senha de almenos 6 digitos !");
		senha.focus();
		return false;
	}
	
	if(senha_confirmada.value != senha.value){
		alert("senha e confirmação não esta de acordo !");
		senha_confirmada.value = "";
		senha_confirmada.focus();
		return false;
	}
		
	if (TestaCPF(cpf.value)==false){
	    alert("Informe o número correto do seu cpf!");
		cpf.focus();
		return false;
	}

    var f = telefone.value.replace(/\D/gim, '');
	if ((f.length < 10) || (f.length > 11)) {
		alert("Digite o numero do telefone com DDD!");
		telefone.focus();
		return false;
	}
	
	frm.submit();

});
 

</script>


<script>
function TestaCPF(strCPF) {
    var Soma;
    var Resto;
    Soma = 0;
	
	strCPF=strCPF.replace("-","").replace(".","").replace(".","");
		
  if (strCPF == "00000000000" || strCPF == "11111111111" ) return false;
     
  for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
  Resto = (Soma * 10) % 11;
   
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;
   
  Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;
   
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
    return true;
}

</script>

<?php
function inserir(){
	$nome	  	= $_POST["nome"];
	$email	  	= $_POST["email"];
	$senha	  	= $_POST["senha"];
	$cpf	  	= $_POST["cpf"];
	$telefone 	= $_POST["telefone"];
	$con	 	= new mysqli("localhost", "root", "", "loja");
	$sql	  	= "select * from tb_cliente where email='$email'";
	$resultado	= mysqli_query($con, $sql);
	if($reg = mysqli_fetch_array($resultado)){
		echo "<div class='alert alert-danger'><b>Erro, esse email já é cliente!</b></div>";
	}else{
		$sql	  	= "select * from tb_cliente where cpf='$cpf'";
		$resultado	= mysqli_query($con, $sql);
		if($reg = mysqli_fetch_array($resultado)){
			echo "<div class='alert alert-danger'><b>Erro, esse CPF já foi cadastrado!</b></div>";
		}else{
			$sql	= "insert into tb_cliente(nome_cliente,email,senha,cpf,telefone) values('$nome', '$email',md5('$senha'), '$cpf', '$telefone' )";
			mysqli_query($con, $sql);
			echo "<script lang='javascript'>alert('Enviamos um email, click no link para confitmar seu cadastro!');	window.location.href='login.php';</script>";
			
		}
		
	}
	mysqli_close($con);
	
}
?>

<script>
function fazBusca() {
window.location.href = "../busca/busca.php?busca="+document.getElementById('pesquisa').value;
}
</script>