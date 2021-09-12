<?php
if(isset($_POST['nome']) && $_POST['nome'] != ''){
    $cadastro = [];
    $cadastro['nome'] = $_POST['nome'];

    if(isset($_POST['endereco'])) {
        $cadastro['endereco'] = $_POST['endereco'];
    }else{
        $cadastro['endereco'] = '';
    }
   
    if(isset($_POST['cidade'])) {
        $cadastro['cidade'] = $_POST['cidade'];
    }else{
        $cadastro['cidade'] = '';
    }
    
    if(isset($_POST['estado'])) {
        $cadastro['estado'] = $_POST['estado'];
    }else{
        $cadastro['estado'] = '';
    }

    if(isset($_POST['telefone'])) {
        $cadastro['telefone'] = $_POST['telefone'];
    }else{
        $cadastro['telefone'] = '';
    }

    if(isset($_POST['cpf'])) {
        $cadastro['cpf'] = $_POST['cpf'];
    }else{
        $cadastro['cpf'] = '';
    }

    if(isset($_POST['email'])) {
        $cadastro['email'] = $_POST['email'];
    }else{
        $cadastro['email'] = '';
    }
}

    include "conexao.php";
   
    
    

        $sqlInserir = "INSERT INTO tb_clientes ( nome, endereco, cidade, estado, telefone, cpf, email
    ) VALUES(
        
    '{$cadastro['nome']}',
    '{$cadastro['endereco']}',
    '{$cadastro['cidade']}',
    '{$cadastro['estado']}',
    '{$cadastro['telefone']}',
    '{$cadastro['cpf']}',
    '{$cadastro['email']}'
   
);";

$resultado = mysqli_query($conexao, $sqlInserir);

if($resultado){
    echo "Cliente cadastrado com sucesso!<br>";
    echo "<a href='index.php' >VOLTAR</a>";
}else{
    echo "Algum erro aconteceu";
}

?> 
