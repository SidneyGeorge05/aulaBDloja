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
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-4">
                        <center>
                            <?php
                            require_once("model/categoria.php");
                            require_once("dao/categoriaDao.php");

                            $categoria = new categoria();

                            $categoria->setNomeCategoria($_POST['txtcat']);

                            $categoriaDao = new categoriaDao();
                            categoriaDao::cadastrar($categoria);

                            echo ("<h4>Parabéns</h4> A categoria " . $categoria->getNomeCategoria() . " foi cadastrada!");
                            ?>
                            <br>
                            <br>
                            <a href="index.php" value="Voltar" class="btn btn-success">Voltar</a>
                            <a href="cadastraProduto.php" class="btn btn-info" role="button" aria-pressed="true" type='button'>Cadastro de produtos</a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>