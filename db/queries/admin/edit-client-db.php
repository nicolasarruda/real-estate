<?php
include '../../connection/connection.php';

$id = $_POST['id'];

$sql = "SELECT id
      FROM brandname_tb_clients
      ORDER BY id";
$table = mysqli_query($connection, $sql);

if (!isset($sql)) {
    $name = $_POST['name'];
    $national_document = $_POST['national_document'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $login = $_POST['login'];
    $password = $_POST['password'];

    $sql = "UPDATE brandname_tb_clients SET
							name='$name',
							national_document='$national_document',
							address='$address',
							phone='$phone',
							login='$login',
							password='$password'
							WHERE id='$id'";

    $table = mysqli_query($connection, $sql) or die(mysqli_error($connection));
    mysqli_close($connection);
    header("Location:../../../admin/pages/home/index.php");
    ?>
<script>
	alert("Cliente editado com sucesso");
</script>
<?php
} else {
    mysqli_close($connection);
    header("Location:../../../admin/pages/home/client-form/edit-client/edit-client.php");
    ?>
	<script>
		alert("Cliente não existe ou não foi encontrado");
	</script>
	<?php
}
?>

