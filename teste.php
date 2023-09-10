<?php 
    include("conexão.php");

    if(isset($_POST['submit'])){
    $desc = $_POST['description'] ;
    $img = $_POST['imagem'];

    $sql = mysqli_query($coon,"INSERT INTO produtos(imagem, descrição) VALUES ('$img', '$desc')");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="teste.php" method="post">

        <label>imagem aqui</label>
        <input type="file" name="imagem" required>

        <label>Descrição</label>
        <input type="text" name="description" required>

        <button type="submit" name = "submit">enviar</button>
        


    </form>
</body>
</html>