<h2> <?= $title ?></h2>

<?php echo form_open('posts/create'); ?>
	<input name="button" type="submit" class="btn btn-success" value="Create User"> 
</form>

<?php foreach ($posts as $post) : ?>
	<br><hr>
	<small class = "date">Created on : <?php echo $post['crated_at']; ?> </small> <br>
	<small> ID : <?php echo $post['id']; ?> </small><br>
	<small>Slug : <?php echo $post['slug']; ?> </small> <br>
	<small>Name: <?php echo $post['name']; ?> </small> <br>
	<small>Email: <?php echo $post['email']; ?> </small> <br>
<?php  endforeach; ?>

