<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <title>Alteração do Cadastro</title>
    </head>

    <body>

    <?php

        include "conexao.php";
        $id = $_GET['id'] ;
        $sql = "SELECT * FROM usuario WHERE id_usuario = $id";
        $dados = mysqli_query($conexao, $sql);

        $linha = mysqli_fetch_assoc($dados);
    ?>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Alteração do Cadastro</h1>
                    <form action="edit.php" method="post">
                        <div class="form-group">
                            <label for="nome" class="form-label">Nome Completo</label>
                            <input type="text" class="form-control" name="nome" value="<?php echo $linha['nome']; ?>">
                        </div>
						 <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" value="<?php echo $linha['email']; ?>">
                        </div>
						 <div class="form-group">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" name="telefone" value="<?php echo $linha['telefone']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="endereco" class="form-label">Endereço</label>
                            <input type="text" class="form-control" name="endereco" value="<?php echo $linha['endereco']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="senha" class="form-label">Senha: *somente números </label>
                            <input type="numeric" class="form-control" name="senha" value="<?php echo $linha['senha']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Salvar Alterações">
                            <input type="hidden" name="id" value="<?php echo $linha['id_usuario']; ?>">
                        </div>
                        <a href="../menu.html" class=" btn btn-info">Voltar ao Início</a>
                    </form>
                </div>
            </div>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
            crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
            integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
            integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
            crossorigin="anonymous"></script>
    </body>

</html>