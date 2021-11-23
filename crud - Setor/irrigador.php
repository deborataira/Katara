<!doctype html>
<html lang="pt-br">

<head>
</head>

<body>
    <?php
    $bdServidor = 'localhost';
    $bdUsuario = 'admin';
    $bdSenha = 'admin';
    $bdBanco = 'etecdados1';
    $conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

    if ($conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco)) {
        echo "Conectado!";
    } else
        echo "Erro";
    mysqli_query($conexao, $sql);
    $sql = "INSERT INTO `irrigador` (`id`, `horario`, `umidade`) VALUES (NULL, $hora, $umidade)";

    ?>
</body>

</html>