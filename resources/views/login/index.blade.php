<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>

</head>
<body>

<fieldset>
	<legend>Login</legend>
	<form method="post" >
	<table>
		<tr>
			<td>UserID:</td>
			<td><input type="text" name="userId"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Submit"></td>
			<td></td>
		</tr>
	</table>
	</form>
</fieldset>

<div>
	{{session('msg')}}
</div>
</body>
</html>
