<?php

include '../../connection/connection.php';

$id = $_POST['id'];

if (isset($id)) {
    $sql = "DELETE FROM brandname_tb_clients
            WHERE id = '$id'";

    $table = mysqli_query($connection, $sql) or die(mysqli_error($connection));

    header("Location:../../../admin/pages/home/index.php");
} else {
    echo "<script> alert('Erro ao remover: id não existe'); </script>";
    header("Location:../../../admin/pages/home/client-form/delete-client/delete-client.php");
}

mysqli_close($connection);
