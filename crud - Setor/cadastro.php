
<!doctype html>
<html lang="pt-br">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <title>Cadastro Setor</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <?php
                    include "conexao.php";      
                    $nome_setor = $_POST['nome_setor'];
                    $planta = $_POST['selplanta'];
<<<<<<< Updated upstream
                    //echo "Inf. recebidas: ".$nome_setor.",Planta id:".$planta." ";
                    $sql = "INSERT INTO `setor` (`id_setor`, `nome_setor`, `id_planta`) VALUES (NULL, '$nome_setor', '$planta')";
=======
                    echo "Inf. recebidas: ".$nome_setor.",Planta:".$planta." ";
                    $sql = "INSERT INTO `setor` (`id_setor`, `nome_setor`, id_planta) VALUES (NULL, '$nome_setor', '$planta')";
>>>>>>> Stashed changes

                    if (mysqli_query($conexao,$sql)) {
                        echo "$nome_setor cadastrado com sucesso!";
                    } else
                        echo "$nome_setor não cadastrado!";
                ?>
                 <a href="pesquisa.php" class="btn btn-primary">Voltar ao Inicio</a>
            </div>
        </div>


        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
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