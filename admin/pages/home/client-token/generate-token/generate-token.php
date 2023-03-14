<?php
session_start();
?>
<?php
include '../../../login/auth/login-admin-check.php';
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <script src="token.js"></script>
        <link rel = "stylesheet" href="style-token.css" type = "text/css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel = "stylesheet">
    </head>
    <body>
<?php include '../../../../../db/connection/connection.php';?>
<?php include '../../../../components/navbar-back/index.php';?>
        <main>
          <center>
          <h1>Token gerado automaticamente</h1>

          <h2>Selecione entre locatário ou proprietário</h2>
              <div class="form-input-radio-client">
                <input type="radio" name="tipo_cliente" value="owner" required/> <label>Proprietário</label>
                <input type="radio" name="tipo_cliente" value="renter" required />
                <label>Locatário</label>
              </div>

          <div class="generate-token-client-container">
              <h2>Selecione um ID</h2>
              <input type="text" name="id" value="">
          </div>

          <div class="generate-token-client-container">
              <input type="button" name="token" value="Gerar token" onclick="generateToken()">
              <div id="token"></div>
          </div>

          </center>
        </main>


    </body>
    <footer>

    </footer>

</html>
<?php
mysqli_close($connection);
?>