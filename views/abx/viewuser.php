<h3>Total: <?php echo count($this->data); ?></h3>

<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th>Username</th>
      <th>Email</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>
<?php
foreach ($this->data as $row) {
?>
    <tr>
      <td><?php echo $row[0]; ?></td>
      <td><?php echo $row[1]; ?></td>
      <td><?php echo $row[2]; ?></td>
      <td><?php echo $row[3]; ?></td>
    </tr>
<?php } ?>
  </tbody>
</table> 
