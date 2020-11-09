<?php
    require('conexao.php')
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Nova Genisis</title>
    <link rel="stylesheet" href="./css/produtos.css">
    <script src="./js/funcoes.js">
        
    </script>
</head>
<body>
    <div class="container-fluid">
        <header>
            <?php
                include_once('menu.html');
            ?>   
        </header>
        <aside>
            <nav class="navbar text-primary bg-dark">
                <h3>Categorias</h3>
                <section class="categoria">
                    <ul>
                        <li onclick="exibirTodos()">Todos(4)</li>
                        <li onclick="exibirCategoria('desenvolvimento')">Desenvolvimento(2)</li>
                        <li onclick="exibirCategoria('manutencao')">Manutenção(2)</li>
                    </ul>
                </section>
            </nav>
            
        </aside>
    
    
        <main>
            <h2 class="display-4">Produtos</h2>
            <section class="produtos">
                <?php
                    $sql = "select*from produto";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                    while($rows = $result->fetch_assoc()){

                ?>
                <div class="container" id="<?php echo $rows["categoria"]; ?>" style="display:block">
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
        </main>
    </div>
</body>
</html>