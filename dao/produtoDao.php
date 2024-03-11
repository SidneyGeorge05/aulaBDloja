<?php
    require_once("model/Conexao.php");
    require_once("model/produto.php");

    class produtoDao{

        public static function cadastrar($produto){
            $conexao = Conexao::conectar();

            $queryInsert = "INSERT INTO tbproduto(nomeProduto, precoProduto, idCategoria)
                            VALUES (?,?,?)";
            
            $prepareStatement = $conexao->prepare($queryInsert);

            $prepareStatement->bindValue(1, $produto->getNomeProduto());
            $prepareStatement->bindValue(2, $produto->getPrecoProduto());
            $prepareStatement->bindValue(3, $produto->getCategoria()->getIdCategoria());

            $prepareStatement->execute();
        }
    }

?>