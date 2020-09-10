<html>
 <head id ="signup_page">
    <title>Sign Up</title>
 <h1>Please Sign Up</h1>
 </head>
  <section>
<form action="signup_handler.php" method="post">
<fieldset>

<div>
	<label for ="firstname">First Name:</label><br> 
		<input type="text" id="firstname" name="firstname" placeholder='first name' value="<?php echo isset($setup['firstname']) ? $setup['firstname'] : ''; ?>" required/>
	<br><br>

	<label for ="lastname">Last Name: </label><br>
		<input type="text" id="lastname" name="lastname" placeholder='last name' value="<?php echo isset($setup['lastname']) ? $setup['lastname'] : ''; ?>" required/>
	<br><br>

	<label for ="email">Email:</label><br>
		<input type="email" id="email" name="email" placeholder='email' value="<?php echo isset($setup['email']) ? $setup['email'] : ''; ?>"required/>
	<br><br>

	<label for ="password">Password:</label><br> 
		<input type="password" id="password" name="password" placeholder='password' value="<?php echo isset($setup['password']) ? $setup['password'] : ''; ?>"required/>
	<br><br>

	<label for ="confirmedpassword">Confirm Password:</label><br> 
	<input type="password" id="confirmedpassword" name="confirmedpassword" placeholder='confirmed password'required/>
	<br><br>

	<button type="submit" value ="submit">Sign Up</button>
	<button type="reset">Reset</button>
</fieldset>
</form>
</section>
</html>
