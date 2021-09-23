<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="../Style.css" type="text/css">
    <title>Katara</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Gerenciar Minhas Plantas</h1>
                <nav class="navbar navbar-light bg-light">
                    <div class="container-fluid">
                        <form class="d-flex" action="pesquisa.php" method="POST">
                            <input class="form-control me-2" type="search" placeholder="Planta" aria-label="Search" name="Pesquisar">
                            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                        </form>
                    </div>
                </nav>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nº</th>
                            <th scope="col">NOME</th>
                            <th scope="col">SUBTIPO</th>
                            <th scope="col">DESCRIÇÃO</th>
                            <th scope="col">DATA DE PLANTIO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "conexao.php";
                        $sql = "SELECT * FROM planta ";
                        if (empty($_POST["Pesquisar"])) {
                            $pesquisa = "";
                        } else {
                            $pesquisa = test_input($_POST["Pesquisar"]);
                        }
                        $pesq = "SELECT * FROM planta WHERE nome_planta LIKE '%$pesquisa%' ";
                        if (is_null($pesquisa)) {
                            $dados = mysqli_query($conexao, $sql);
                        } else {
                            $dados = mysqli_query($conexao, $pesq);
                        }

                        while ($linha = mysqli_fetch_assoc($dados)) {
                            $id_planta = $linha['id_planta'];
                            $nome = $linha['nome_planta'];
                            $tipo_planta = $linha['tipo_planta'];
                            $desc_planta = $linha['desc_planta'];
                            $data_plantado = $linha['data_plantio'];

                            echo "<tr>
                                        <th scope ='row'>$id_planta</th>
                                        <td>$nome</td>                                        
                                        <td>$tipo_planta</td>
                                        <td>$desc_planta</td>
                                        <td>$data_plantado</td>
                                        <td><a href ='cadastroOne_edit.php?id=$id_planta' class='btn btn-success btn-sm'>Editar</a>
                                            <a href ='#' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#confirma'
                                            onclick=" . '"' . "pegar_dados($id_planta, '$nome')" . '"' . ">Excluir</a>
                                            <a href ='cadastroOne_edit.php?id=$id_planta' class='btn btn-primary btn-sm'>Informações</a>
                                        </td>
                                        </tr>";
                        }
                        function test_input($data)
                        {
                            $data = trim($data);
                            $data = stripslashes($data);
                            $data = htmlspecialchars($data);
                            return $data;
                        }

                        ?>



                    </tbody>
                </table>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <a href="../index.html">
                        <button type="button" class="btn btn-primary">Sair</button>
                    </a>
                    <a href="cadastroOne.php">
                        <button type="button" class="btn btn-primary">Cadastrar</button>
                    </a>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmação de Exclusão</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="excluir.php" method="POST">
                        <p>Deseja realmente excluir <b id="nome_planta">Nome da planta?</b>?</p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                    <input type="hidden" name="nome" id="nome_planta_1" value="">
                    <input type="hidden" name="id" id="id_planta" value="">
                    <input type="submit" class="btn btn-success" value="Sim">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function pegar_dados(id, nome) {
            document.getElementById('nome_planta').innerHTML = nome;
            document.getElementById('nome_planta_1').value = nome;
            document.getElementById('id_planta').value = id;

        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>