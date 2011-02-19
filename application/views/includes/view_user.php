<div>
<h2>User Info</h2>
<p>First name: <?php echo $user['first_name']?></p>
<p>Surname: <?php echo $user['last_name']?></p>
<p>Location: <?php echo $user['location']?></p>
<p>Company: <?php echo $user['company']?></p>
<p>Contact #: <?php echo $user['phone']?></p>
<p>Created on: <?php echo unix_to_human($user['created_on'])?></p>
<p>Last login: <?php echo unix_to_human($user['last_login'])?></p>
<br>
  <a href="#" onclick="history.go(-1); return false;">Back</a>
</div>