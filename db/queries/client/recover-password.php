<?php

include '../../../db/connection/connection.php';

$pesquisar = $_POST['token'];
?>
	  <table style="border:1px solid rgb(23, 127, 135)"class = "tabela-clientes" align=center width=80%>

    <td align="center"><b>Login</b></td>
    <td align="center"><b>Senha</b></td>

      </tr>
      <?php
$sql = "SELECT *
				FROM clientes
				WHERE token LIKE '$pesquisar' LIMIT 32";
$query = mysqli_query($connection, $sql);
while ($row = mysqli_fetch_array($query)) {
    ?>
        <td align="center">
          <?php echo $row['login']; ?>
        </td>
        <td align="center">
          <?php echo $row['password']; ?>
        </td>
      </tr>
       </table>
<?php
}
?>


<?php
mysqli_close($connection);
?>