
<h1> Login </h1>
<div id="container">
	<?php echo form_open('backend'); ?>
	<p>
	<?php 
	echo form_label('Username:','username');
	echo form_input('username','','id="username"');
	?>
	</p>
	<p>
	<?php 
	echo form_label('Password:','passwd');
	echo form_password('passwd','','id="passwd"');
	?>
	</p>
	<p>
	<?php echo form_submit('admin', 'Login'); ?>
	</p>
	<?php echo form_close(); ?>
</div>

</body>
</html>