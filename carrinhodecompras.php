    <?php
         if(isset($_GET['adicionar'])){
         	//vamos adicionar ao carrinho.
         	$idProduto = (int) $_GET['adicionar'];
         	if(isset($itens[$idProduto])){
         		if (isset($_SESSION['carrinho'][$idProduto])) {
         		$_SESSION['carrinho'][$idProduto]['quantidade']++;
         	}else{
         		$_SESSION['carrinho'][$idProduto] = array('quantidade'=>1,'nome'=>$itens[$idProduto]['nome'],'preco'=>$itens[$idProduto]['preco']);
         	}
         	echo '<script>alert("O item foi adicionado ao carrinho")</script>';
         	}else{
         		die("Você não pode adicionar um produto que não existe") ;
         	}
         	}   	

    ?>
    <h2 id ="menu">Carrinho</h2>

    <?php
        foreach ($_SESSION['carrinho']as $key => $value) {
        	//Nome do produto
        	//Quantidade
        	//Preço
        	echo '<div class="carrinho-item">';
        	echo '<p>Nome: '.$value['nome'].'| Quantidade: ' .$value['quantidade'].' | Preço: R$'.($value['quantidade'])*($value['preco']).',00</p>'    
            ?>
      <a href="?remover=<?php echo $key ?>">Remover do carrinho</a>
      <?php 
          if (isset($_GET['remover'])) {
              $idProduto = (int) $_GET['remover'];
              if (isset($_SESSION['carrinho'])) {
                  unset($_SESSION['carrinho'][$idProduto]);
              }
              }
              echo '</div>';
          }
       ?>
    