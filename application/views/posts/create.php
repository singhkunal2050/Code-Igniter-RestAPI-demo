<h3> <?= $title; ?> </h3>

<?php echo validation_errors() ; ?>

<?php echo form_open('posts/create'); ?>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" name="address">
  </div>

  <input name="button" type="submit" class="btn btn-light" value="Submit"> 


</form>