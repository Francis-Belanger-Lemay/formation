<html>
	<head>
		<title>Ciblog</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<script src="https://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>

	</head>
	<body>
	<nav class ="navbar navbar-default" >
		<div class = "header_container container">
			<div class="navbar-header">
				<a class = "navbar-brand" href="<?php echo base_url(); ?>"> ciBlog </a>
			</div>
			<div id = "navbar">
				<ul class = "nav navbar-nav">
					<div class="row">

						<div class="col-md-3">

							<li><a href="<?php echo base_url(); ?>"> Home </a></li>

						</div>

						<div class="col-md-3">

							<li><a href="<?php echo base_url(); ?>about"> About </a></li>

						</div>

						<div class="col-md-3">

							<li><a href="<?php echo base_url(); ?>posts"> Blog </a></li>

						</div>

						<div class="col-md-3">

							<li><a href="<?php echo base_url(); ?>categories"> Categories </a></li>

						</div>
					</div>

				</ul>

				<ul class="nav navbar-nav navbar-right">
					<?php if (!$this->session->userdata('logged_in')) : ?>
						<li><a href="<?php echo base_url(); ?>users/login"> Login </a></li>
						<li><a href="<?php echo base_url(); ?>users/register"> Register </a></li>
					<?php else : ?>
						<li><a href="<?php echo base_url(); ?>users/logout"> Logout </a></li>
						<li><a href="<?php echo base_url(); ?>posts/create"> Create Post </a></li>
						<li><a href="<?php echo base_url(); ?>categories/create"> Create Category </a></li>
					<?php endif ; ?>
				</ul>

			</div>
		</div>
	</nav>

	<div class = "container">
		<!-- Flash messages -->
		<?php if($this->session->flashdata('user_registered')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
		<?php elseif($this->session->flashdata('post_created')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
		<?php elseif($this->session->flashdata('post_updated')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
		<?php elseif($this->session->flashdata('category_created')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
		<?php elseif($this->session->flashdata('post_deleted')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
		<?php elseif($this->session->flashdata('post_deleted')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
		<?php elseif($this->session->flashdata('login_failed')): ?>
			<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
		<?php elseif($this->session->flashdata('login_success')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('login_success').'</p>'; ?>
		<?php elseif($this->session->flashdata('logout_success')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('logout_success').'</p>'; ?>
		<?php elseif($this->session->flashdata('category_deleted')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>'; ?>
		<?php endif; ?>
