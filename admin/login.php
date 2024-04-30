<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../view/CSS/login.css">
    <link rel="stylesheet" href="../view/CSS/login2.css">
</head>
<body>
    <!-- <h2>Login</h2>
    <form action="authenticate.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form> -->
    <h1>PLANTSHOPE</h1>

	<div class="w3layoutscontaineragileits">
	<h2>Đăng nhậP</h2>
		<form action="authenticate.php" method="post">
			<input type="text" Name="username" placeholder="Tên đăng nhập" required="">
			<input type="password" Name="password" placeholder="Mật khẩu" required="">
			
			<div class="aitssendbuttonw3ls">
				<input type="submit" value="ĐĂNG NHẬP">
				
			</div>
		</form>
	</div> 
</body>
</html>
