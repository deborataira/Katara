<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <title>Cadastro</title>
    </head>

    <body>
        <?php 
        
           include "conexao.php";
           $sql = "SELECT * FROM usuario WHERE nome LIKE '%$pesquisa%' ";
           $dados = mysqli_query ($conexao, $sql);

           ?>
     
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Cadastro</h1>
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Nome</th>
								<th scope="col">Email</th>
								<th scope="col">Telefone</th>
                                <th scope="col">Endereço</th>
                                <th scope="col">Senha</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php

                                while ($linha = mysqli_fetch_assoc($dados)) {
                                    $id_usuario = $linha['id_usuario'];
                                    $nome = $linha['nome'];
									$email = $linha['email'];
									$telefone = $linha['telefone'];
                                    $endereco = $linha['endereco'];
                                    $senha = $linha['senha'];

                                    echo "<tr>
                                        <th scope ='row'>$nome</th>
										<td>$email</td>
                                        <td>$telefone</td>
                                        <td>$endereco</td>
                                        <td>$senha</td>
                                        <td><a href ='cadastroOne_edit.php?id=$id_usuario' class='btn btn-success btn-sm'>Editar</a>
                                            <a href ='#' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#confirma'
                                            onclick=" .'"' ."pegar_dados($id_usuario, '$nome')" .'"' .">Excluir</a>
                                        </td>
                                        </tr>";
                                }

                                ?>
                                      
                                        
                               
                            </tbody>
                            </table>
                        <a href="menu.html" class=" btn btn-info">Voltar ao Início</a>
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
            <p>Deseja realmente excluir <b id="nome">Nome da pessoa?</b>?</p>
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                <input type="hidden" name="nome" id="nome__1" value="">
                <input type="hidden" name="id" id="id_usuario" value="">
                <input type="submit" class="btn btn-success" value="Sim">
            </form>
            </div>
            </div>
        </div>
        </div>

        <script type="text/javascript">
        function pegar_dados(id, nome) {
            document.getElementById('nome').innerHTML = nome;
            document.getElementById('nome_1').value = nome;
            document.getElementById('id_usuario').value = id;
            
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