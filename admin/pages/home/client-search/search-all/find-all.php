<?php
session_start();

include '../../../login/auth/login-admin-check.php';
?>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel = "stylesheet">
    <link rel="stylesheet" href="style-find-all.css">
      <title>Imobiliária - Lista completa de Clientes</title>
    </head>
    <body>
    <?php include '../../../../../db/connection/connection.php';?>
    <?php include '../../../../components/navbar-back/index.php';?>
      <main>
        <center>
          <h1>Lista completa de Clientes</h1>
          <h2>Locatários</h2>
<div class="client-table">
<table>

<?php
include '../../../../../db/tables/find-all/index.php';
include '../../../../../db/queries/admin/find-all/find-all-renters-db.php';
?>
</table>
</div>

<h2>Proprietários</h2>
<div class="client-table">
<table>

<?php
include '../../../../../db/tables/find-all/index.php';
include '../../../../../db/queries/admin/find-all/find-all-owners-db.php';
?>
</table>
</div>
    </center>
  </main>
</body>
<footer></footer>

</html>
<?php
mysqli_close($connection);
?>