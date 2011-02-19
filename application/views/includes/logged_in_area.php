	<h2>Welcome Back, <?php 
	$user = $this->ion_auth->get_user_array();
		echo $user['username'];
	?>!</h2>
     <p>This section represents the area that only logged in members can access.</p>
	<p><?php echo anchor('auth/logout', 'Logout'); ?></p>
	<p><?php echo anchor('auth/change_password', 'Change password'); ?></p>
	<p><?php echo anchor('item/post', 'post item'); ?></p>
	<p><?php echo anchor('user/view', 'Profile'); ?></p>
	<p><?php echo anchor('user/update', 'Edit Profile'); ?></p>
