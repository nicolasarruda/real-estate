<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Imobiliária - Login</title>
    <link rel = "stylesheet" href="style-login.css" type = "text/css">
</head>
<body>
    <?php include '../../components/navbar/index.php'?>
    <?php include '../../components/header/index.php'?>

<div class="login-form">

<h2>Faça o login</h2>

<form name="form" id="form" action="auth/login-validation.php" method="POST" autocomplete="off">
<div class = "login-input-form">
<input type="text" name="login" id="login" required autocomplete="off">
<label for="login" class="label-name">
    <span class="content-name">Login</span>
</label>
</div>

<div class ="login-input-form">
<input type="password" name="password" id="password" required autocomplete="off">
<label for="name" class="label-name">
    <span class ="content-name">Senha</span>
</label>
        </div>
        <input type="submit" value="Entrar">
    </form>
    <p>Deseja recuperar a sua conta via Token? Clique <a href="../token/index.php">aqui</a></p>

</div>

<h3>Gostou do que viu?
    Acompanhe o nosso trabalho pelas nossas redes sociais!
</h3>

</body>

<?php include '../../components/footer/index.php'?>

</html>


