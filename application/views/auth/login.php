<!--<div class='mainInfo'>-->

	<p>Please login with your email address and password below.</p>
	
	<div id="infoMessage"><?php echo $message;?></div>
	
    <?php echo form_open("auth/login");?>
    	
      <p>
      	<label for="email">Email:</label>
      	<?php echo form_input($email);?>
      </p>
      
      <p>
      	<label for="password">Password:</label>
      	<?php echo form_input($password);?>
      </p>
      
      <p>
	      <label for="remember">Remember Me:</label>
	      <?php echo form_checkbox('remember', '1', FALSE);?>
	  </p>
      
      
      <p><?php echo form_submit('submit', 'Login');?></p>

      
    <?php echo form_close();?>
  	  <a href="#" onclick="history.go(-1); return false;">Back</a>
	 
	 <?php echo anchor('auth/forgot_password', 'Forgot Password?'); ?>

<!--</div>-->