<?php include('public_header.php'); ?>

<div class="container">
		<?php echo form_open('login/admin_login'); ?>
	  <fieldset>
	    <legend>Admin Login</legend>
	    <div class="form-group">
	      <label for="uname">User Name</label>
	      <?php echo form_input(['class'=>'form-control','id'=>'uname','name'=>'uname', 'placeholder'=>'Enter username', 'value'=>set_value('uname')]); ?>
	    </div>
	    <?php echo form_error('uname'); ?>
	    <div class="form-group">
	      <label for="exampleInputPassword1">Password</label>
	      <?php echo form_password(['class'=>'form-control', 'id'=>'pass', 'name'=>'pass', 'placeholder'=>'Enter password', 'value'=>set_value('pass')]); ?>
	    </div>
	    <?php echo form_error('pass'); ?>
	    <?php echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default']); ?>
	    <?php echo form_submit(['name'=>'submit','value'=>'Login','class'=>'btn btn-primary']); ?>
	  </fieldset>
	</form>
	
</div>

<?php include('public_footer.php'); ?>
	