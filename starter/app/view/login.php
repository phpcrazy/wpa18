<?php _load_view('partial/header', array('title' => 'Login')); ?>
	<h1>Member Login</h1>
    
   <p>Thanks for visiting! Please either login below, or <a href="register.php">click here to register</a>.</p>
    
	<form method="post" action="http://localhost/wpa18/starter/public/index.php?page=login" name="loginform" id="loginform">
	<fieldset>
		<label for="username">Username:</label><input type="text" name="username" id="username" /><br />
		<label for="password">Password:</label><input type="password" name="password" id="password" /><br />
		<input type="submit" name="login" id="login" value="Login" />
	</fieldset>
	</form>
<?php _load_view('partial/footer'); ?>