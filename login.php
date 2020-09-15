

<html>
<body>
<div class = "login">
<header><title>Log In</title></header>
 <h1>Please log in</h1>
    <form method ="POST" id="loginform" action="login_handler.php" autocomplete = "off">
      <div>
	<label for="email">Email:</label><br>
		<input type="email" id="email" name="email" placeholder="email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>"required/>
	</div>
	<br>

	<div>
	<label for="password">Password:
	<input type="password" id="password" name="password" placeholder="password" value="<?php echo isset($_SESSION['password']) ? $_SESSION['password'] : ''; ?>"required/>
	</div>

	  <div>
	<button type="submit" value = "submit" id="login">Submit</button>
	</div>
    </form>
</div>
</body>
</html>
