<?php


require_once dirname(__FILE__) . '/../utils/database.utils.php';

$query = $database->query('SELECT * FROM `customers`');

?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Contact</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Adresse</th>
    </tr>
  </thead>
  <?php
while (($data = $query->fetch())){
    ?><tbody>
      <tr>
        <th scope="row"><?php echo $data['customerNumber']; ?></th>
        <td><?php echo $data['customerName']; ?></td>
        <td><?php echo $data['contactLastName'] . $data['contactFirstName']; ?></td>
        <td><?php echo $data['phone']; ?></td>
        <td><?php echo $data['addressLine1'] . '</br>' . $data['city'] . '</br>' . $data['country']; ?></td>
      </tr>
      <?php
}?>
</tbody>
</table>
