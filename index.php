<html>
<head>
<title>PHP Tester</title>
</head>
<body>

	<style>
	html{
		position: absolute;
		width: 100%;
		height:100%;
		z-index: -1;
	}
	body{
		position: absolute;
		width: 100%;
		height:100%;
		z-index: 0;
		background-color: gray;
	}

	</style>

	<h1 style ="text-align:center;color:purple;">Help me get good at PHP by making a simple account. No real personal info required!<br> (Everything is case sensative)</h1><br>
	<p style="text-align:center; color:blue;font-size:16px;">This section is for making a new account.</p>
	<form action="putIn.php" method="post">
Name -> <input type="text" name="name" placeholder="Name" required><br>
Username -> <input type="text" name="username" placeholder="Username" required><br>
Password -> <input type="password" name="password" required placeholder="Password"><br>
<button type="submit" name="push">Submit</button>
</form>
<br><p style="text-align:center;color:blue;font-size:16px;">This section is for logging in? Maybe.</p><br>
<form action="loginTester.php" method="post">
	Username: <input type="text" name="username" placeholder="Username" required><br>
	Password: <input type="password" name="password" required placeholder="Password"><br>
	<button type="submit" name="subber">Login</button>
</form>
</body>
</html>
