<?php

$bdServidor = 'localhost';
//Variavel com o endereço do bd
$bdUsuario = 'admin';
//Variavel com o user do bd
$bdSenha = 'admin';
//Variavel com a senha do bd
$bdBanco = 'etecdados1';
//Variavel com o nome da database
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);
//Conectando com Banco de dados

if ( $conexao = mysqli_connect ($bdServidor,$bdUsuario,$bdSenha,$bdBanco) ) {
    //se sucesso =
    //echo "Conectado!";
} else //senão =
    echo "Erro";

?>