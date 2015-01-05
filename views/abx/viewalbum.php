<h3>Total album: <?php echo $this->total; ?></h3>
<form class="form-horizontal" action="" method="post">
	<fieldset>
		<div class="form-group">
			<label for="email" class="col-lg-2 control-label">Search by email</label>
			<div class="col-lg-5">
					<div class="input-group">
						<span class="input-group-addon">@</span>
						<input type="text" class="form-control" id="email" name="email" placeholder="email@example.com">
					</div>
					<button type="submit" class="btn btn-primary pull-right">Search</button>
			</div>
		</div>
	</fieldset>
</form>


<table class="table table-striped table-hover ">
	<thead>
	<tr>
		<th>#</th>
		<th>User</th>
		<th>Email</th>
		<th>Album</th>
		<th>Update</th>
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
      <td><?php echo '<a href="'.URL.'mem/admin/update?id_album='.$row[2].'" target="_blank" >Update</a>'; ?></td>
      <td><?php echo $row[4]; ?></td>
    </tr>
<?php } ?>
  </tbody>
</table> 
