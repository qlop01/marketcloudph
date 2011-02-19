<html>
<body>
<?php
 $user = $this->ion_auth->get_user_by_identity($identity); 
?>
	<p>Good day, <?php echo $user->username;?></p>
	<br>
	<p>Your password has been reset to: <?php echo $new_password;?></p>
	<br>
	<p>If you have any concerns,comments or suggestions please feel free to send it to us, Your feedback is important to us in helping improve our services.
</p>
	
<br><br>Thanks,<br>MarketCloudph Team <a ymailto="mailto:marketcloudph@gmail.com" href="mailto:marketcloudph@gmail.com">marketcloudph@gmail.com</a>
</body>
</html>