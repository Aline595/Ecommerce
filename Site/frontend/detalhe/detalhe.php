<?php
$id_produto=$_GET['id_produto'];
$con = new mysqli("localhost", "root", "", "loja");
$sql = "select * from tb_roupa where pk_id_produto = {$id_produto}";
$resultado = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
			
		<meta name="author" content="Alice Toledo/ Aline Soares/ Celso Henrique/ Jonathan Kevin" />
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
        <link rel="stylesheet" href="../bootstrap/bootstrap/js/bootstrap.js">
	
		
		<!--titulo-->
        <title> Vestido Ideal </title>
		
		<!--icone logo-->
		<link rel="shortcut icon" href="../imagens_site/imagens/logo-removebg-preview.png">
		
		<!--icones na página-->
    <script src="https://kit.fontawesome.com/700cddc25b.js" crossorigin="anonymous"></script>
    <!--CSS-->
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
				<a href="../vitrine/iconePerfil.php" id="login"><i class="fas fa-user"></i></a>
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
				  <li><a href="../Cesta/cesta.php">Carrinho</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				  <li><a href="../cadastro/cadastro.php"><i class="fas fa-user"></i> Cadastro</a></li>
				  <li><a href="../cadastro/login.php"><i class="fas fa-sign-in-alt"></i> Entrar</a></li>
				</ul>
			  </div>
			</div>
		  </nav>
	
    </header>
<body id="corpo">
	 <?php while($req = mysqli_fetch_assoc($resultado)){ ?>
    <div class="container">
        <div class="row">
          <div class="col">
            
            <div class="col-md-6">
				
				<h3 name="titulo" id="title"><?php echo $req['nome_roupa']; ?></>
              
                <ul class="slider">
                  <li style="width: 250px;">
                    <input type="radio" id="slide1" name="slide" checked>
                    <label for="slide1"></label>
					<img src="<?php echo $req['foto_roupa']; ?>" width="555px" height="520px">
                  </li>
                  
				  <?php 
				  
				  if(isset($req['foto_roupa_dois'])){
					echo '
				  <li style="width: 250px;">
                    <input type="radio" id="slide2" name="slide">
                    <label for="slide2"></label>
                    <img src="'.$req['foto_roupa_dois'].'" width="555px" height="520px">
                  </li>';
				  }
				  
				  if(isset($req['foto_roupa_tres'])){
					echo '
                 <li style="width: 250px;">
                    <input type="radio" id="slide3" name="slide">
                    <label for="slide3"></label>
                    <img src="'.$req['foto_roupa_tres'].'" width="555px" height="520px">
                  </li>';
				  }
				  ?>
				  
                </ul>
				
            </div>
            <div class="col-md-6">
              <div class="place">
                <br/>
                <br/>
				
				<p id="tamanho" style="font-size: 20px;">Tamanho Disponível: <?php echo $req['tamanhos']; ?>.</p>
				<p id="preco"  style="font-size: 20px;">R$ <?php echo $req['vl_produto']; ?> </p>
                <p><a href="../cesta/cesta.php?add=cesta&id=<?php echo $req['pk_id_produto']; ?>" 
				<button id="bt1" style="width: 75%;
                height: 60%;
                background-color: rgb(236, 87, 107);
                color: white;
                border: 0;
                border-radius: 8px;
                font-weight: 700;
                margin-top: 16px;
                display: inline-block;
                text-align: center;
                text-decoration: none;
                font-size: 18px;
                line-height: 60px;
                transition: filter 0.2s;">Comprar</button></a> </p>
              </div>	
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-6" style=" margin: 3%;">

                <p>
                  
                </p>
                <h2>Caracteristicas</h2>
                <p>
                  <?php echo $req['caracteristicas']; ?>
                </p>
                <h2>Modo de conservação:</h2>
                <p>
                  <?php echo $req['modo_conservacao']; ?>
                </p>
            </div>
        </div>
    </div>
	
    <script src="https://code.jquery.com/query-2.1.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<?php } ?>
</body>

<footer>
    <div class="container-fluid padding">
        <div class="row text-center">
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
                <img src="../imagens_site/imagens/cc.jpeg"alt="some" width=250 height=100>
            </div>
    
            <hr width="100%">
    
            <div id ="slogan">
                <h4> Encontre aqui os vestidos de festa ideais para todas as ocasiões. Grande variedade de cores e modelos para você estar sempre deslumbrante. Os nossos vestidos de festa são ideais para você. </h4>
                © 2020. Todos os direitos reservados.
            </div>
        </div>

    </div>
</footer>

</html>

<script>
function fazBusca() {
window.location.href = "../busca/busca.php?busca="+document.getElementById('pesquisa').value;
}
</script>


<script lang="javascript">
function botaoComprar(){//Funcao para colocar as coisas no carrinho

}
</script>



