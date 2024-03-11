<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="css/estilo.css">
    <title>Cadastro de Produtos</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-6 p-sm-5">
                        <center>
                            <h4>Cadastro de produtos</h4>
                        </center>
                        <br>
                        <form method="post" action="produtoSuc.php">
                            <div class="form-floating">
                                <input type="text" name="nomeProduto" class="form-control" id="floatingInput" placeholder="Insira uma produto">
                                <label for="floatingInput">Insira uma produto</label>
                            </div>
                            <br>
                            <div class="form-floating">
                                <input type="text" name="precoProduto" class="form-control" id="floatingInput" placeholder="Insira seu preço">
                                <label for="floatingInput">Insira seu preço</label>
                            </div>
                            <br>
                            <select name="slCat" class="form-select" aria-label="Default select example">
                                <option selected>Categorias</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                            <br>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Continuar</button>
                                <br>
                                <a href="index.php" class="btn btn-info" role="button" aria-pressed="true" type='button'>Cadastro de categorias</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <center>
                <footer>
                    <span> Criado por Tech Inovações | <span class="far fa-copyright"></span>© 2022 Todos direitos reservados</span>
                </footer>
            </center>

        </div>
    </div>
</body>

</html>