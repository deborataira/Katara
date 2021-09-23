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

    <?php

    include "conexao.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM planta WHERE id_planta = $id";
    $dados = mysqli_query($conexao, $sql);

    $linha = mysqli_fetch_assoc($dados);
    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Alteração do Cadastro</h1>
                <form action="edit.php" method="post">
                    <div class="form-group">
                        <label for="nome_planta" class="form-label">Nome da Planta:</label>
                        <input type="text" class="form-control" name="nome_planta" value="<?php echo $linha['nome_planta']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="tipo_planta" class="form-label">Subtipo:</label>
                        <input type="text" class="form-control" name="tipo_planta" value="<?php echo $linha['tipo_planta']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="desc_planta" class="form-label">Descrição:</label>
                        <input type="text" class="form-control" name="desc_planta" value="<?php echo $linha['desc_planta']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="data_plantio" class="form-label">Data de Plantio</label>
                        <input type="date" class="form-control" name="data_plantio" value="<?php echo $linha['data_plantio']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Salvar Alterações">
                        <input type="hidden" name="id" value="<?php echo $linha['id_planta']; ?>">
                    </div>
                    <a href="pesquisa.php" class=" btn btn-info">Voltar</a>
                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>