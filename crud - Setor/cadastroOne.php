<!doctype html>
<<<<<<< Updated upstream
<html lang="en">
=======
<html lang="pt-br">
>>>>>>> Stashed changes

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Cadastro Setor</title>
</head>

<body>
    <?php
    // cria lista -> informa nome da tabela, o campo a ser visualizado
    // e o campo a ser retornado
    // obs. quando o usuário escolher uma informação, por exemplo
    // do cursos, o valor retornado estará em sel (por definição na função)
    function criaLista($tabela, $campoLiteral, $campoCodigo)
    {
        // acessar o banco de dados
        $db = new mysqli('localhost', 'admin', 'admin', 'etecdados1');
        // definir uma sql de consulta
        $sql = "select * from " . $tabela;
        // cria uma lista no html (tag selet)
        echo '<select name="sel' . $tabela . '" size="1">';
        if ($result = $db->query($sql)) {
            // percorrer as informações da consulta
            while ($campo = $result->fetch_assoc()) {
                // criar as opções para o select o html]
                // value contém o valor do campoCodigo que será utilizado
                // como chave estrangeira, a ser armazenada em
                // outra tabela
                echo '<option value="' . $campo[$campoCodigo] . '">' . $campo[$campoLiteral];
            }
        }
        echo "</select>";
        $db->close();
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Cadastro</h1>
                <form action="cadastro.php" method="post">
                    <div class="form-group">
                        <label for="nome_setor" class="form-label">Nome do setor:</label>
                        <input type="text" class="form-control" name="nome_setor">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Nome Planta:</label>
<<<<<<< Updated upstream
                        <?php criaLista('planta', 'nome_planta', 'nome_planta'); ?>
=======
                        <?php criaLista('planta', 'nome_planta', 'id_planta'); ?>
>>>>>>> Stashed changes
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success">
                    </div>
                    <a href="../index.html" class=" btn btn-info">Voltar ao Inicio</a>
                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>