<?php

$sql = "SELECT *
      FROM brandname_tb_renters
      ORDER BY id";
$table = mysqli_query($connection, $sql);
while ($row = mysqli_fetch_array($table)) {
    ?>
      <tr>
        <td align="center">
          <?php echo $row['id']; ?>
        </td>
        <td align="center">
          <?php echo $row['name']; ?>
        </td>
        <td align="center">
          <?php echo $row['national_document']; ?>
        </td>
		<td align="center">
          <?php echo $row['address']; ?>
        </td>
        <td align="center">
          <?php echo $row['phone']; ?>
        </td>
        <td align="center">
          <?php echo $row['email']; ?>
        </td>
        <td align="center">
          <?php echo $row['login']; ?>
        </td>
        <td align="center">
          <?php echo $row['password']; ?>
        </td>
        <td align="center">
          <?php echo $row['token']; ?>
        </td>
      </tr>
<?php
}
?>