<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="css/estiloCategoria.css">
    <title>Cadastro concluído!</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-6 mx-auto">
                <div class="card border-0 shadow rounded-3">
                    <div class="card-body p-4 p-sm-4">
                        <center>
                            <?php
                            require_once("model/categoria.php");
                            require_once("model/produto.php");
                            require_once("dao/produtoDao.php");
                            require_once("controller/prodController.php");

                            $produto = new produto();
                            $produto->setNomeProduto($_POST['nomeProduto']);
                            $produto->setPrecoProduto($_POST['precoProduto']);

                            $categoria = new categoria();
                            $categoria->setIdCategoria($_POST['slCat']);

                            $produto->setCategoria($categoria);

                            $prodController = new prodController($produto);

                            if ($prodController->validaPreco($produto)) {
                                produtoDao::Cadastrar($produto);
                            }
                            ?>
                            <br>
                            <br>
                            <a href="cadastraProduto.php" value="Voltar" class="btn btn-success">Voltar</a>
                            <a href="index.php" class="btn btn-info" role="button" aria-pressed="true" type='button'>Cadastro de categorias</a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>