<?php

$bdServidor = 'localhost';
$bdUsuario = 'admin';
$bdSenha = 'admin';
$bdBanco = 'etecdados1';
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if ( $conexao = mysqli_connect ($bdServidor,$bdUsuario,$bdSenha,$bdBanco) ) {
    //echo "Conectado!";
} else 
    echo "Erro";

?>