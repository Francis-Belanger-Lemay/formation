<html>
	<head>
		<title>Ciblog</title>
		<link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<script src="https://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- 				 -->


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
					<li><a href="<?php echo base_url(); ?>posts/create"> Create Post </a></li>
					<li><a href="<?php echo base_url(); ?>categories/create"> Create Category </a></li>
				</ul>

			</div>
		</div>
	</nav>

	<div class = "container">
