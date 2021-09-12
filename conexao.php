<?php
#CONEXÂO COM O BANCO DE DADOS

$servidor = '127.0.0.1';
$usuario = 'root';
$senha = '';
$banco = 'bd_projeto_integracao';

try{
    $pdo = new PDO('mysql:host=localhost;dbname=bd_projeto_integracao', $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $erro){
    echo "Erro: " . $erro->getMessage();
}

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco); 

if(!$conexao){
    die ("<br><h3>Não conectou</h3>!!! Erro: " . mysqli_connect_error());

}

?>