<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title ?></title>

	<link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
	<!--<link rel="stylesheet" href="<?php //echo base_url();?>assets/CSS/style.css">-->
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	
</head>
<body>

	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a href="<?= base_url(); ?>" class="navbar-brand">CI Blog</a>
			</div>

			<div id="navbar">
				<ul class= "nav navbar-nav">
					<li><a href="<?= base_url(); ?>">Home</a></li>
					<li><a href="<?= base_url(); ?>about">About</a></li>
					<li><a href="<?= base_url(); ?>posts">Post</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?= base_url(); ?>posts/create">Create Post</a></li>
				</ul>
			</div>
		</div> 
	</nav>

		<div class="container"> 