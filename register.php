<!DOCTYPE html>
<html>
<head>
	<title>register</title>
</head>
<body>

<form action="ty.php" method="POST">
	<h1 align="center">Create an account on Hive!</h1>
	<table align="center">
			<tr>
				<td><label for="email">Enter your email</label></td>
				<td colspan="3"><input id="email" name="email" /></td>
			</tr>
			<tr>
				<td><label for="uname">Enter your desired username</label></td>
				<td colspan="3"><input id="uname" name="uname" /></td>
			</tr>

			<tr>
				<td><label for="fname">Enter your full name</label></td>
				<td colspan="3"><input name="fname" id="fname"></input></td>
			</tr>

			<tr>
				<td style="width: 200px"><label for="day">Enter your birth date</label></td>
				<td><input type="number" placeholder="Day" id="day" name="day"maxlength="2" style="width: 40px"></input></td>
				<td><input placeholder="Month" name="month" maxlength="2" style="width: 40px"></input></td>
				<td><input placeholder="Year" name="year" maxlength="4" style="width: 40px"></input></td>
			</tr>

			<tr>
				<td><label for="pass">Enter your password</label></td>
				<td colspan="3"><input id="pass" name="pass" ></input></td>
			</tr>
			<tr>
				<td><label for="cpass">Confirm your password</label></td>
				<td colspan="3"><input id="cpass" name="cpass" ></input></td>
			</tr>
			<tr>
				<td align="center" colspan="4" style="height: 100px"><input type="submit" value="REGISTER"></input></td>
			</tr>
			
			
	</table>
</form>


</body>
</html>