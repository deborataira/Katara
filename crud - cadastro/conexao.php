<?php

$bdServidor = 'http://406f-2804-14d-6886-37f-ed4f-f2a-353c-7b4d.ngrok.io';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'etecdados1';
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if ( $conexao = mysqli_connect ($bdServidor,$bdUsuario,$bdSenha,$bdBanco) ) {
    //echo "Conectado!";
} else 
    echo "Erro";

?>