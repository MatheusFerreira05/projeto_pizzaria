<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pizzaria do Matheus</title>
	<style type="text/css">
		*{margin: 0;padding: 0;box-sizing: border-box;}
		h2.title{
			background-color: #069;
			width: 100%;
			padding: 20px;
			text-align: center;
			color: white;
		}
		#menu ul{
			background-color: #212529;
			list-style: none;
		}
		#menu ul li{
			display: inline;
		}
		#menu ul li a{
			padding: 10px 10px;
			display: inline-block;

			color: white;
			text-decoration: none;
			font-size: 20px;
		}
		#menu ul li a:hover{
			color: #A9A9A9;
		}
		h2#menu{
			background-color: #212529;
			color: white;
			text-align:center; 
			padding: 8px 10px;
		}

		.carrinho-container{
			display: flex;
			margin-top: 10px; 
		}

		.produto{
			width: 33.3%;
			padding: 0 30px;
		}
		.produto img{
			max-width: 100%;
			min-width: 70%;
		}
		.produto a{
			display: block;
			width: 100%;
			padding: 10px;
			color: white;
			background-color: #5fb382;
			text-align: center;
			text-decoration: none;
		}

		.carrinho-item{
			max-width: 1200px;
			margin: 10px auto;
			padding-bottom: 10px;

			border-bottom: 2px dotted #ccc;
		}

		.carrinho-item p{
			font-size: 19px;
			color: black;

		}
	</style>
</head>
<body>
	<!--<H2 class="title">Seja bem vindo!</H2>-->
	</div>
	<div id="menu">
		<ul>
			<li><img src="imagens/Logos.png"height="50" width="100"></li>
			<li><a href="index.html">Início</a></li>
			<li><a href="index.html">Sobre nós</a></li>
			<li><a href="index.html">Contato</a></li>
		</ul>
	</div>
	
	<div class="carrinho-container">
	<?php

     $itens = array(['nome'=>'Pizza calabresa','imagem' => 'imagens/tela/Pizzacalab.jpg','preco'=>'29'],
     	['nome'=>'Pizza chocolate','imagem' => 'imagens/tela/pizzadoce1.jpg','preco'=>'39'],
     	['nome'=>'Pizza frango','imagem' => 'imagens/tela/pizzafrango.jpg','preco'=>'49'],
        ['nome'=>'Pizza de MMs','imagem' => 'imagens/tela/pizza-doce2.jpg','preco'=>'39'],
        ['nome'=>'Pizza de Marguerita','imagem' => 'imagens/tela/pizzamarguerita.jpg','preco'=>'49']);
        ?>
        <?php

     foreach ($itens as $key => $value) {
?>
     <div class="produto">
     	<img src="<?php echo $value['imagem']?>"/>  
     	<a href="?adicionar=<?php echo $key ?>">Adicionar ao carrinho</a>
     	
     </div><!--produto-->

        
<?php
     }
?>
    </div><!--carrinho-container-->
</div>
          <?php
           include('carrinhodecompras.php');
        ?>
</body>
</html>

