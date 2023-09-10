<?php 
  session_start();

  if(isset($_POST['submit'])){
    include("conexão.php");
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $bd = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ";

    $resultados = $coon -> query($bd);

    if($resultados -> num_rows == 1){
      $_SESSION['email'] = $email;
      header("location: /registros/principal/index.html");
      session_destroy();
    }
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.ico">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="style.css">
  <script src="validation.js"></script>
</head>
<body>
  <img src="img/logobranco.png" alt="Logo CEEP SNACK" class="logo slide-in">
  <div class="principal slide-in">
    <form action="login.php" method="POST">
      <h2>Login</h2>
      <div class="entrada">
        <input id="email" type="text" name="email" required>
        <label>Insira o e-mail</label>
      </div>
      <div class="entrada">
        <input type="password" name="senha" required>
        <label>Insira a senha</label>
      </div>
      <div class="adicionais">
        <label for="lembrar">
	  <input type="checkbox" id="lembrar">
          <p>Lembre-me</p>
        </label>
        <a href="#">Esqueceu a senha?</a>
      </div>
      <button type="submit" name="submit">Entrar</button>
      <div class="registro">
        <p>Não possui conta? <a href="/registros/registro/registro.php"><b>Cadastre-se</b></a></p>
      </div>
    </form>
  </div>
</body>  
</html>