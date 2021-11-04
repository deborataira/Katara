<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <title>Katara</title>
  </head>
    <body>
        <div class="container">
            <div class="row">
                <?php //Inicio do PHP
                    include "conexao.php"; //Incluindo script de conexão com bd
                    $id = $_POST['id']; 
                    //Variavel que guarda o id para editar no bd      
                    $nome = $_POST['nome_planta']; 
                    //Variavel que guarda o nome para editar no bd 
                    $desc = $_POST['desc_planta'];
                    //Variavel que guarda a desc para editar no bd 
                    $data_plantado = $_POST['data_plantio'];
                    //Variavel que guarda a data de plantio para editar no bd 
                    $sql = "UPDATE `planta`set `nome_planta` = '$nome', `desc_planta` = '$desc', `data_plantio` = '$data_plantado' 
                    WHERE id_planta = $id";
                    //Variavel que guarda o comando para edição do BD
                    if (mysqli_query($conexao,$sql)) {
                        //Se sucesso
                        echo "Planta Alterada com sucesso!";
                    } else { //Senão
                        echo "Planta não Alterada!";
                }
                ?><!--Fim do PHP-->
                 <a href="pesquisa.php" class="btn btn-primary">Voltar</a><!--Botão para voltar para a pag de pesquisa-->
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