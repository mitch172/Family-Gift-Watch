<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
	<title>Login</title>
</head>

<body>
	<div class="header">
		Family Gift Watch
		<div class="right">
			<a href="index.html">Home</a>
			<a href="login.php" class="current">Login</a>
			<a href="register.php">Register</a>
		</div>
	</div>
	<h1>Login Below</h1>
	<form method="post" action="login.php">
		<table>
			<tr>
				<td>Username: </td>
				<td><input type="text" name="username" required></td>
			</tr>
			<tr>
				<td>Password: </td>
				<td><input type="text" name="password" required></td>
			</tr>
			<tr>
				<td><input type="submit" value="Submit"></td>
				<td><input type="reset"></td>
			</tr>
		</table>
	</form>
</body>
</html>