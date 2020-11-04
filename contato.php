<?php
    require('conexao.php')
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" lang="PT-BR">
        <link rel="stylesheet" href="./css/estilo.css">
        <title>Nova Genisis</title>
    </head>
    <body>
        <?php
            include_once('menu.html');
            if(isset($_POST["nome"])&&isset($_POST["tel"])&&isset($_POST["msg"])){
            $nome = $_POST["nome"];
            $tel = $_POST["tel"];
            $msg = $_POST["msg"];
            $sql = "insert into comentarios(nome, tel, msg) values ('$nome','$tel','$msg')";
            $result = $conn->query($sql);  
            }
        ?>
        <hr>
         <h1>Mande sua mensagem e responderemos o mais breve possível</h1>
         <form method="POST" action="">
             <label for="nCompleto">Nome Completo:</label><br>
             <input name="nome" type="text" id="nCompleto"><br>
             <label for="tel">Telefone</label><br>
             <input name="tel"type="number" id="tel"><br>
             <label for="msg">Mensagem:</label><br>
            <textarea name="msg" id="msg" cols="50" rows="20"></textarea><br>
            <input type="submit" value="enviar">
         </form>

         

        
    </body>
</html>