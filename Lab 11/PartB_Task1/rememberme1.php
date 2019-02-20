

<form action="rememberme2.php" method="post">
	
		<label>Username: </label>
		<input name="username" type="text" 
		value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" class="input-field">
		<br><br>

		 <label>Passward: </label> 
		 <input name="password" type="password" 
		 value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" class="input-field">
		 <br><br>

		<input type="checkbox" name="remember" />
		<label>Remember Me</label>
		<br><br>

	
		<input type="submit" value="Login">
	</form>