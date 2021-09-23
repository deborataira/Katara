<?php

$bdServidor = 'localhost';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'etecdados1';
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if ( $conexao = mysqli_connect ($bdServidor,$bdUsuario,$bdSenha,$bdBanco) ) {
    //echo "Conectado!";
} else 
    echo "Erro";

?>