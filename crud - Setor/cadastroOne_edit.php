<!doctype html>
<html lang="pt-br">

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
    function criaLista($tabela, $campoLiteral, $campoCodigo, $selecionado)
    {
        // acessar o banco de dados
        $db = new mysqli('localhost', 'admin', 'admin', 'etecdados1');
        // definir uma sql de consulta
        $sqll = "select * from " . $tabela;
        // cria uma lista no html (tag selet)
        echo '<select name="sel' . $tabela . '" size="1">';
        if ($result = $db->query($sqll)) {
            // percorrer as informações da consulta
            while ($campo = $result->fetch_assoc()) {
                // criar as opções para o select o html]
                // value contém o valor do campoCodigo que será utilizado
                // como chave estrangeira, a ser armazenada em
                // outra tabela
                if ($campo[$campoCodigo] == $selecionado)
                    echo '<option selected value="' . $campo[$campoCodigo] . '">' . $campo[$campoLiteral];
                else
                    echo '<option value="' . $campo[$campoCodigo] . '">' . $campo[$campoLiteral];
            }
        }
        echo "</select>";
        $db->close();
    }
    
    $id = $_GET['id'];
    $sql = "SELECT * FROM setor WHERE id_setor = $id";
    $dados = mysqli_query($conexao, $sql);

    $linha = mysqli_fetch_assoc($dados);

    ?>

<<<<<<< Updated upstream
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Alteração do Cadastro</h1>
                    <form action="edit.php" method="post">
                        <div class="form-group">
                            <label for="nome_planta" class="form-label">Nome do Setor</label>
                            <input type="text" class="form-control" name="nome_setor" value="<?php echo $linha['nome_setor']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Salvar Alterações">
                            <input type="hidden" name="id" value="<?php echo $linha['id_setor']; ?>">
                        </div>
                        <a href="index.php" class=" btn btn-info">Voltar ao Inícioo</a>
                    </form>
                </div>
=======
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Alteração do Cadastro</h1>
                <form action="edit.php" method="post">
                    <div class="form-group">
                        <label for="nome_setor" class="form-label">Nome do Setor</label>
                        <input type="text" class="form-control" name="nome_setor" value="<?php echo $linha['nome_setor']; ?>">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Planta:</label>
                        <?php
                        criaLista('planta', 'nome_planta', 'id_planta', $linha["id_planta"]); ?>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Salvar Alterações">
                        <input type="hidden" name="id" value="<?php echo $linha['id_setor']; ?>">
                    </div>
                    <a href="pesquisa.php" class=" btn btn-info">Voltar ao Início</a>
                </form>
>>>>>>> Stashed changes
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>