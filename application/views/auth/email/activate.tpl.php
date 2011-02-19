<html>
<body>
<?php
 $user = $this->ion_auth->get_user_by_identity($identity); 
?>

	<h3>Welcome to MarketCloudph <?php echo $user->username;?>!</h3> 
	
	<p>This is an automated message to confirm that your registration to MarketCloudph was succesful. Replies to this message are not monitored or answered.
</p>
	<br>
	<p>Please click this link to <?php echo anchor('auth/activate/'. $id .'/'. $activation, 'Activate Your Account');?>.</p>
	<br>
	<p>If you have any concerns,comments or suggestions please feel free to send it to us, Your feedback is important to us in helping improve our services.
</p>
	
<br><br>Thanks,<br>MarketCloudph Team <a ymailto="mailto:marketcloudph@gmail.com" href="mailto:marketcloudph@gmail.com">marketcloudph@gmail.com</a>
</body>
</html>