<?php

include '../../connection/connection.php';

$action = $_POST['action'];

if ($action == "Cancelar") {
    header("Location:../../../admin/pages/home/index.php");
} else {

    $name = $_POST['name'];
    $national_document = $_POST['national_document'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $token = (md5(uniqid(mt_rand(), true)));

    if ($action == "Cadastrar") {

        $sql = "SELECT *
        FROM brandname_tb_clients
        WHERE login = . $login";
        $table = mysqli_query($connection, $sql);

        ?>
        <script>
          console.log(<?php echo $table ?>);
        </script>
      <?php
if (isset($table)) {

            $sql = "INSERT INTO brandname_tb_clients
          (id, name, national_document, address, phone, email, login, password, token)
          VALUES
          (null, '$name','$national_document', '$address', '$phone', '$email', '$login', '$password', '$token')";
            $table = mysqli_query($connection, $sql) or die(mysqli_error($connection));
            ?>
           <script>
            alert("Cliente inserido com sucesso");
           </script>
        <?php
} else {
            ?>
          <script>
            alert("Erro: o cliente não foi inserido");
          </script>
          <?php
}

        if (mysqli_thread_id($connection)) {
            usleep(5);
            mysqli_close($connection);
            header("Location:../../../admin/pages/home/index.php");
        }

    }
}
?>