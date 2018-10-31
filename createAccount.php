<!DOCTYPE html>
<html>
	<body>
		<h2>Create an Account</h2>
		<form action = "newAccount.php" method = "post">
			<div style="margin-left: 1em;">
				Name:<br/> <input type =  "text" name="name" required /><br/>
				Username:<br/> <input type = "email" placeholder="email@example.com" name = "username" required /><br />
				Password:<br/> <input type = "password" name = "password" required /><br/>
				Team Name: <br/> <input type = "text" name = "teamName" required /><br/>
				<br />
				<input type = "submit" name = "createAccount" value = "Create Account"/>
			</div>
		</form>
	</body>
</html>
