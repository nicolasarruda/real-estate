<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" type="text/css" />
  </head>

  <body class="login-page-container">
    <h1>IMOBILIÁRIA ADMINISTRAÇÃO</h1>

    <div id="login-form-container" class="login-form-container">
      <h2>Entrar</h2>
      <form name="form" id="form" action="../../../admin/pages/login/auth/login-validation.php" method="POST">
        <input
          type="text"
          name="login"
          id="login"
          placeholder="Administrador"
        />
        <input type="password" name="password" id="password" placeholder="Senha" />
        <input type="submit" value="ACESSAR" />
      </form>
    </div>
  </body>
  <footer></footer>
</html>
