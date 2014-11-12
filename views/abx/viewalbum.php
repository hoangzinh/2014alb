<h3>Total: <?php echo count($this->data); ?></h3>

<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th>User</th>
      <th>Email</th>
      <th>Album</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>
<?php
foreach ($this->data as $row) {
    //Removes whitespace or other predefined characters from the right side of a string
    $string = ltrim($row[0]);
    // Removes whitespace or other predefined characters from both sides of a string
    $string = rtrim($string);
    // str replace methods
    $string = str_replace(" ", "-", $string);
    // RemoveSpecial Character
    $string = preg_replace("/[^A-Za-z0-9\-]/", "",$string);
    // Remove Multiple -
    $string = preg_replace('/-+/', '-',$string);
?>
    <tr>
      <td><?php echo $row[2]; ?></td>
      <td><?php echo $row[1]; ?></td>
      <td><?php echo $row[3]; ?></td>
      <td><?php echo '<a href="'.URL.'mem/'.$row[1].'/'.$row[2].'-'.$string.'" target="_blank" class="list-group-item-heading name-album">'.$row[0].'</a>'; ?></td>
      <td><?php echo $row[4]; ?></td>
    </tr>
<?php } ?>
  </tbody>
</table> 
