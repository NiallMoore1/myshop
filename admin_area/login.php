<!DOCTYPE>

<html>
	<head>
		<title>Login Form</title>
		<link rel="stylesheet" href="styles/login_style.css" media="all"/>
	</head>
<body>

<div class="login">
<h2 style="color:white; text-align:center;"><?php echo @$_GET['not_admin'];?></h2>
	<h1>Admin Login</h1>
    <form method="post">
    	<input type="text" name="email" placeholder="email" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large" name="login">Let me in.</button>
    </form>
</div>

</body>

</html>