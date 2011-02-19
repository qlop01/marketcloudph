<html>
<body>
<?php
 $user = $this->ion_auth->get_user_by_identity($identity); 
?>
	<p>Good day, <?php echo $user->username;?></p>
	<br>
	<p>This message is sent to you to confirm your request for a password reset.</p>
	<br>
	<p>Please click this link to <?php echo anchor('auth/reset_password/'. $forgotten_password_code, 'Reset Your Password');?>.</p>
		<br>
	<p>If you have any concerns,comments or suggestions please feel free to send it to us, Your feedback is important to us in helping improve our services.
</p>
	
<br><br>Thanks,<br>MarketCloudph Team <a ymailto="mailto:marketcloudph@gmail.com" href="mailto:marketcloudph@gmail.com">marketcloudph@gmail.com</a>
</body>
</html>