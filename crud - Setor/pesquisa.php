<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <title>Pesquisa</title>
    </head>

    <body>
        <?php 
        
            $pesquisa = $_POST['busca'];
        
           
           include "conexao.php";
           $sql = "SELECT * FROM setor WHERE nome_setor LIKE '%$pesquisa%' ";
           $dados = mysqli_query ($conexao, $sql);

        ?>
     
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Pesquisa</h1>
                    <nav class="navbar navbar-light bg-light">
                        <div class="container-fluid">
                            <form class="d-flex" action="pesquisa.php" method="POST">
                            <input class="form-control me-2" type="search" placeholder="Nome" aria-label="Search" name="busca">
                            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                            </form>
                        </div>
                        </nav>
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">id do setor</th>
                                <th scope="col">nome do setor</th>
                                <th scope="col">id da planta</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php

                                while ($linha = mysqli_fetch_assoc($dados)) {
                                    $id_setor = $linha['id_setor'];
                                    $nome = $linha['nome_setor'];
                                    $id_planta = $linha['id_planta'];
                                    
                                    echo "<tr>
                                        <th scope ='row'>$nome</th>
                                        <td>$id_setor</td>
                                        <td>$id_planta</td>
                                        <td><a href ='cadastroOne_edit.php?id=$id_setor' class='btn btn-success btn-sm'>Editar</a>
                                            <a href ='#' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#confirma'
                                            onclick=" .'"' ."pegar_dados($id_setor, '$nome')" .'"' .">Excluir</a>
                                        </td>
                                        </tr>";
                                }

                                ?>
                                      
                                        
                               
                            </tbody>
                            </table>
                        <a href="../index.html" class=" btn btn-info">Voltar ao Inicio</a>
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
            <p>Deseja realmente excluir <b id="nome_setor">Nome do setor?</b>?</p>
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                <input type="hidden" name="nome" id="nome_setor_1" value="">
                <input type="hidden" name="id" id="id_setor" value="">
                <input type="submit" class="btn btn-success" value="Sim">
            </form>
            </div>
            </div>
        </div>
        </div>

        <script type="text/javascript">
        function pegar_dados(id, nome) {
            document.getElementById('nome_setor').innerHTML = nome;
            document.getElementById('nome_setor_1').value = nome;
            document.getElementById('id_setor').value = id;
            
        }
        </script>

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