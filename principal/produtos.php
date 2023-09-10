<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">  
    <title>CeepLanches</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16"  href="logi/img/favicons/favicon-16x16.png">
    <script src="https://kit.fontawesome.com/3478cf0681.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.ico">

  </head>
<body>
    <header class="header1">
        <a href="index.html"><img src="img/3.png"></a>
        <nav id="myTopnav" class="topnav">
            <a href="sobre.html">Sobre</a>
            <a href="produtos.php">Produtos</a>
            <a href="produtos_lite.php">Produtos lite</a>
            <a href="/registros/logi/login.php">Encerrar Sessão</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i> </a>
        </nav>
    </header>

    <?php 
    include("conexão.php");
    $sql = "SELECT * FROM produtos";
    $result = mysqli_query($coon, $sql);

    if (!$result) {
        echo "Erro ao recuperar produtos: " . mysqli_error($coon);
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
        echo "
              
                <div class = 'produtosingle'>
                    <div class='text2'>
                        <h2>{$row['nome']}</h2> 
                         <p> {$row['descrição']} 
                        <br> 
                     Preço: R$ {$row['preço']}
                        </p>
                </div>
                    <div class='botao'>
                    <button>Comprar</button>
                </div>
        </div>


";
    }
}

// Feche a conexão com o banco de dados
mysqli_close($coon);
?>

    <footer class="footer1">
        <p>CeepLanches 2023©</p>
    </footer>

    <script>
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
    </script><!--menu hamburguer-->

</body>
</html>