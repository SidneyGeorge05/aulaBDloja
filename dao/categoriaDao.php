<?php
    require_once("model/Conexao.php");
    require_once("model/categoria.php");

    class categoriaDao{

        public static function cadastrar($categoria){
            $conexao = Conexao::conectar();

            $queryInsert = "INSERT INTO tbcategoria(nomeCategoria)
                            VALUES (?)";

            $prepareStatement = $conexao->prepare($queryInsert);

            $prepareStatement->bindValue(1, $categoria->getNomeCategoria());

            $prepareStatement->execute();
        }
    }

?>