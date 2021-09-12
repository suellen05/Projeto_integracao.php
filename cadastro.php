<?php include "conexao.php";
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Conta</title>
    <link rel="shortcut icon" href="imagens/bolsalog-1.jpg">
    <link rel="stylesheet" href="css/minhaconta.css" type="text/css">
   
</head>
<body>
    <header class="header">
        <nav class="menu">
            <ul>
                <a href="index.php">Minha Conta / Cadastre-se</a>
                <a href="#">ATÉ 6X SEM JUROS</a>
                <a href="index.php">Carrinho de Compra</a>
                <div class="buscar">
                 <label for="Buscar">Buscar</label> <input type="" buscar="button" id="buscar">
                    <img src="imagens/search.png">
            </ul>
        </nav>
    </header>
    <div class="site">
        <a href="index.php" title="Fabi-correia" class="_db">
        <img class="logo-empresa" src="imagens/fab.jpg" alt="imagem logo">
        </a>
    
    
        <h1 class="nome"><em>Fabi Bolsas e Acessórios</em></h1>
        <br>
    </div>

    <strong>
        <ul>
            <li class="lista">
                <a title="Acessórios" href="#" class="_db"> ACESSÓRIOS </a>
                <a title="Bolsas" href="bolsas.php" class="_db"> BOLSAS</a>
                <a title="Mais vendidas" href="#" class="_db"> MAIS VENDIDAS </a>
                <a title="Promoção" href="#" class="_db"> PROMOÇÕES </a>
                <a title="Carteira" href="#" class="_db"> CARTEIRAS </a>
            </strong>
            </li>
        </ul>
        <hr>
<br>

<br>
<form class="formulario" method="post" action="cadastro-clientes-inserir.php">
       <h1> Ainda Não é Cliente?</h1>
       <br>
           
       
        <p>Ao cadastrar sua conta, você será capaz de comprar mais rápido, ficar atualizado sobre a situação de um pedido e acompanhar o histórico dos pedidos que você já fez.

        </p>
        <br>
   
<br>
                       
                    <div class="campo">
                        <label for="Nome">Nome:</label>
                        <input type="text" id="nome" name="nome" placeholder="*Digite seu Nome*"style="width:51em">
                              

                    <div class="campo">
                        <label for="endereco">Endereco:</label>
                        <input type="text" id="endereco" name="endereco" placeholder="*Digite seu Endereço*"style="width:49em">

                    </div>

                        <label for="cidade">Cidade</label>
                        <input type="text" id="cidade" name="cidade" style="width: 30em">
                   

                   
                        <label for="estado">Estado</label>
                        <select name="estado" id="estado">
                            <option>--</option>
                            <option value="RJ">RJ</option>
                            <option value="SP">SP</option>
                            <option value="CE">CE</option>
                        </select>
                    </div>
            
                    <div class="campo">
                        <label for="telefone">Telefone:</label>
                        <input type="text" id="telefone" name="telefone" placeholder="*Digite seu Telefone*"style="width:16em">
                    
                        <label for="cpf">CPF:</label>
                        <input type="text" id="cpf" name="cpf" placeholder="*Digite seu CPF*"style="width:16em">


                        <div class="campo">
                        <label for="Email">Email:</label>
                        <input type="text" id="telefone" name="email" placeholder="*Digite seu Email*"style="width:49em">





        </div>
        <input class="botao" type="submit" name="acao" value="ENVIAR">
       
            </form>
        </div>
        <br>
        <br>
        <br>
        <br>
        <hr>

</body>
</html>