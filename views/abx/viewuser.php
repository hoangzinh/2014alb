<h3>Total users: <?php echo $this->total; ?></h3>
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
