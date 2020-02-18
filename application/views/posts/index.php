<?php echo $title; ?>

<?php foreach ($posts as $post) : ?>
	
	<h3><?= $post['title']; ?></h3>
	<div class="row">
		<div class="col-md-3">
			<img class="post-thumb thumbnail" src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image'] ?>" alt="no-image">
		</div>

		<div class="col-md-9">
			
		
			<small class="post-date">Posted on: <?php echo $post['created_at']; ?> in <strong><?php echo $post['name']; ?></strong></small><br>
			<?php echo word_limiter($post['body'], 63); ?>
			<p><br>
				<a class="btn btn-default" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read more..</a>
			</p>


		</div>
	</div>

<?php endforeach ?>

