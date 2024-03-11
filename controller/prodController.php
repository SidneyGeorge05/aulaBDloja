<?php
    require_once ("model/produto.php");

    class prodController{

        public $produto;

        public function __construct($produto){
            $this->produto = $produto;
        }

        public function validaPreco($precoProduto){
            $precoProduto = $_POST['precoProduto'];

            $produto = new produto();
            $produto->setNomeProduto($_POST['nomeProduto']);
            $produto->setPrecoProduto($_POST['precoProduto']);

            $categoria = new categoria();
            $categoria->setIdCategoria($_POST['slCat']);

            if($precoProduto > 0){
                echo("<h4>Parabéns</h4>");
                echo("O produto foi cadastrado com sucesso!");
                echo ("<br> <br>Produto: " . $produto->getNomeProduto() . "
                       <br>Preço: " . $produto->getPrecoProduto() . "
                       <br>Categoria: " . $categoria->getIdCategoria());
                       return true;
            }else{
                echo("<h4>Houve um erro</h4>");
                echo("O produto não pode ser cadastrado, pois ele não contém um preço. <br>Por favor, tente novamente.");
                return false;
            }
        }
    }

?>