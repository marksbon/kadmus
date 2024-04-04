

<div id="container">
	<h1>Welcome to the Register Screen !</h1>

	<div id="body">
		
		<a href="<?php echo base_url();?>main/login">Login</a>
		<?php echo validation_errors(); ?>

		<?php 

			echo "<p>".form_open('main/register_user')."</p>";

			echo "<p> Username: ".form_input('username')."</p>" ;

			echo "<p> Password: ".form_password('password')."</p>" ;

			echo "<p>".form_submit('Register','Register')."</p>";

			echo form_close();
		?>

	</div>

	