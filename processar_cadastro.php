<?php
include('conexão.php');

if (isset($_POST['submit'])) {
    // Recupere os dados do formulário
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];

 
    // Inserir os dados na tabela de produtos (substitua com o nome da sua tabela)
    $sql = "INSERT INTO produtos (nome, descrição, preço) VALUES ('$nome', '$descricao', '$preco')";

    if (mysqli_query($coon, $sql)) {
        echo "Produto cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o produto: " . mysqli_error($coon);
    }

    // Feche a conexão com o banco de dados
    mysqli_close($coon);
}
?>

