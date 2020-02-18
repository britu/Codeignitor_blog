<h2><?php echo $post['title']; ?></h2>

<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small><br>

<img class="thumbnail" src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image'] ?>" alt="no-image">


<div class="post-body">
	<?php echo $post['body']; ?>
</div>
<hr>
<a href="edit/<?php echo $post['slug']; ?>" class="btn btn-primary pull-left">Edit</a>
<?php echo form_open('/posts/delete/'.$post['id']); ?>
	<input type="submit" value="delete" class="btn btn-danger">
</form>


	
