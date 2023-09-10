<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Produto</title>
</head>
<body>
    <h1>Cadastro de Produto</h1>
    <form method="post" action="processar_cadastro.php">
        <label for="nome">Nome do Produto:</label>
        <input type="text" name="nome" id="nome" required><br>

        <label for="descricao">Descrição:</label><br>
        <textarea name="descricao" id="descricao" rows="4" cols="50"></textarea><br>

        <label for="preco">Preço:</label>
        <input type="number" name="preco" id="preco" step="0.01" required><br>

        <input type="submit" name="submit" value="Cadastrar Produto">

    </form>
</body>
</html>