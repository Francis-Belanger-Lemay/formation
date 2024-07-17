<?php echo form_open('users/login'); ?>
	<div class="row" id="login_div">
		<div class="col-md-4 col-md-offset-4" >
			<h1 class="text-center"> <?php echo $title; ?> </h1><br>

			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="Enter username" required autofocus>
			</div>
			<div class="form-group">
				<input type="password" name="passsword" class="form-control" placeholder="Enter passsword" required autofocus>
			</div>

			<button type="submit" class="btn btn-primary"> Login </button>
		</div>
	</div>


<?php form_close(); ?>
