<?php
    require('conexao.php')
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Nova Genisis</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <script src="./js/funcoes.js">
        
    </script>
</head>
<body>
    <?php
        include_once('menu.html');
    ?>
    <h2>Produtos</h2>
    <h3>Categorias</h3>
    
    <section class="categoria">
        <ul>
            <li onclick="exibirTodos()">Todos(4)</li>
            <li onclick="exibirCategoria('desenvolvimento')">Desenvolvimento(2)</li>
            <li onclick="exibirCategoria('manutencao')">Manutenção(2)</li>
        </ul>

    </section>
    <section class="produtos">
    <?php
        $sql = "select*from produto";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($rows = $result->fetch_assoc()){

    ?>
        <div class="box_produto" id="<?php echo $rows["categoria"]; ?>" style="display:block">
            <img src="<?php echo $rows["imagem"]; ?>" alt="<?php echo $rows["descricao"]; ?>" width="200px" onmouseenter="destaque(this)" onmouseout="miniatura(this)">
            <p class="descricao"><b><?php echo $rows["descricao"]; ?></b></p>
            <p class="preco"><?php echo $rows["preco"]; ?></p>
        </div>
    <?php
            }
        }else{
            echo "nenhum produto cadastrado";
        }
    
    ?>
    
        
    </section>
</body>
</html>