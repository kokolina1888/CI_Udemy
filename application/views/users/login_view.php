<h2>Login form</h2>

<?php 
$attributes = array (
	'id'	=>'login_form',
	'class'	=>'form-horizontal');
echo form_open('users/login', $attributes); ?>

<div class="form-group">
	<?php 	echo form_label('username');

			$data_username = array(
				'class' => 'form-control',	
				'name' => 'username',	
				'placeholder' => 'username',			

				);
			echo form_input($data_username);
	?>
</div>
<div class="form-group">
	<?php 	echo form_label('password');

			$data_password = array(
				'class' => 'form-control',	
				'name' => 'password',	
				'placeholder' => 'password',			

				);
			echo form_password($data_password);
	?>
</div>

<div class="form-group">
	<?php 	

			$data_submit = array(
				'class' => 'btn btn-primary',	
				'name' => 'submit',	
				'value' => 'Log in',			

				);
			echo form_submit($data_submit);
	?>
</div>

<?php echo form_close(); ?>