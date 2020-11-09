<?php
    require('conexao.php')
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" lang="PT-BR">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="./css/index.css">
        <title>Nova Genisis</title>
    </head>
    <body>
        <div class="container-fluid">
            <header>
                <?php
                    include_once('menu.html');
                ?>
            </header>

            <main>
                <h1> Bem vindo a mais nova central de desenvolvimento tecnológico !!</h1>
                </br></br>
                <p class="txtbvindas"> Aqui você encontrará a aplicações Web, Redes, Banco de dados e muito mais.</p>
                <p class="txtbvindas"> Contando com os melhores desenvolvedores do Brasil</p>
                </br>
            </main>

            <footer>
                </br>
                <p><strong>Forma de pagamento </strong></p>
                <br>
                <img class="formpag" src="./imagens/formas_de_pagamento.png" alt="form.pagamento">
            </footer>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>