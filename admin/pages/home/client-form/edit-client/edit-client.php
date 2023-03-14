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
      <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
      <link rel ="stylesheet" href="style-edit-form.css">
      <title>Imobiliária - Editar clientes</title>
    </head>
<body>
<?php include '../../../../../db/connection/connection.php';?>
<?php include '../../../../components/navbar-back/index.php';?>
        <main>
          <center>
            <h1>Edição de Clientes</h1>


          <form class="form-edit-client" name="edit-form" method="post" action="../../../../../db/queries/admin/edit-client-db.php">

          <div class="form-input-edit-client-container">
              <h2>Selecione entre locatário ou proprietário</h2>
              <div class="form-input-radio-client">
                <input type="radio" name="tipo_cliente" value="owner" required/> <label>Proprietário</label>
                <input type="radio" name="tipo_cliente" value="renter" required />
                <label>Locatário</label>
              </div>
              <h2>Selecione o ID</h2>
              <input type="text" name="id" value="" />
              <h2>Edite os seguintes campos</h2>
              <p>Nome</p>
              <input type="text" name="name" value="" />
              <p>Documento Nacional de Identificação</p>
              <input type="text" name="national_document" value="" />
              <p>Endereço</p>
              <input type="text" name="address" value="" />
              <p>Telefone</p>
              <input type="text" name="phone" value="" />
              <p>Login</p>
              <input type="text" name="login" value="" />
              <p>Senha</p>
              <input type="text" name="password" value="" />
          </div>
          <div class="form-button-edit-client-container">
              <input type="submit" name="action" value="Editar" />
          </div>
      </form>
    </center>
  </main>

<?php
mysqli_close($connection);
?>
</body>
<footer></footer>
</html>