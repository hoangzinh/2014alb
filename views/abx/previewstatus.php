
<form class="form-horizontal" action="" method="post">
    <fieldset>
      <legend>Delete some rows of preview table</legend>
      <div class="form-group">
        <label for="idnumber" class="col-lg-3 control-label">ID Number</label>
        <div class="col-lg-9">
            <div class="input-group">
                  <span class="input-group-addon"><</span>
              <input type="text" class="form-control" id="idnumber" name="idnumber" placeholder="0" value="0">
           </div>
        </div>
      </div>
     <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
          <button type="submit" class="btn btn-primary pull-right">Delete</button>
        </div>
      </div>
    </fieldset>
</form>

<h3>Total: <?php echo count($this->data); ?></h3>

<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID</th>
      <th>Author</th>
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
    </tr>
<?php } ?>
  </tbody>
</table> 