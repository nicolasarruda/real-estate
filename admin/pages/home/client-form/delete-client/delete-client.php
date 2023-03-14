<?php
session_start();
?>
<?php
include '../../../login/auth/login-admin-check.php';
?>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="style-delete-form.css" rel ="stylesheet"  type ="text/css">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel = "stylesheet">
  <title>Imobiliária - Remover clientes</title>
</head>
<body>
<?php include '../../../../../db/connection/connection.php';?>
<?php include '../../../../components/navbar-back/index.php';?>
    <main>
          <center>
            <h1>Remoção de Clientes</h1>
            <form method="post" action="../../../../../db/queries/admin/delete-client-db.php">
            <div class="form-delete-client">
              <p> ID: </p>
              <input type="text" name="id" value="">
              <input type="submit" name="action" value="Remover">
            </div>
            </form>
         </center>
        </main>
</body>
<footer></footer>
</html>
<?php
mysqli_close($connection);
?>