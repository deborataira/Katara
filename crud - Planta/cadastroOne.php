<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Katara</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Cadastro</h1>
                <form action="cadastro.php" method="post">
                <!--Cria o start para um form e diz a forma como será mandado-->
                    <div class="form-group"> 
                        <!--Define parte de um site, neste caso o espaço de uma pergunta-->
                        <label for="nome_planta" class="form-label">Nome da planta:</label> 
                        <!--Cria espaço para o nome do input do nome da planta-->
                        <input type="text" class="form-control" name="nome_planta">
                        <!--Cria espaço para a inserção do nome da planta-->
                    </div>
                    <div class="form-group">
                        <!--Define parte de um site, neste caso o espaço de uma pergunta-->
                        <label for="desc_planta" class="form-label">Descrição:</label>
                        <!--Cria espaço para o nome do input do descrição da planta-->
                        <input type="text" class="form-control" name="desc_planta">
                        <!--Cria espaço para a inserção do descrição da planta-->
                    </div>
                    <div class="form-group">
                        <!--Define parte de um site, neste caso o espaço de uma pergunta-->
                        <label for="data_plantio" class="form-label">Data que foi plantada:</label>
                        <!--Cria espaço para o nome do input da data de plantio da planta-->
                        <input type="date" class="form-control" name="data_plantio">
                        <!--Cria espaço para a inserção da data de plantio da planta-->
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success">
                        <!--Botão de envio de informações inseridas para a parte do php que insere 
                        no banco de dados criado antes da criação do form-->
                    </div>
                    <a href="../index.html" class=" btn btn-info">Voltar ao Inicio</a>
                    <!--Botão de retornar para tela onde são mostradas as plantas ja cadastradas-->
                </form>
                <!--Cria o final para um form-->
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>