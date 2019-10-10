<?php
    session_start();
    require('../inc/functions.php');
?>
<?php
	if (userExist()) {
		return header('Location: /');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
		<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Patrick+Hand&display=swap" rel="stylesheet">
	<style type="text/css">
		body{ font: 14px sans-serif; }
		.wrapper{ width: 350px; padding: 20px; }
		
    /* Login page */
    .main-header{
        text-align: center;
        margin: 0 auto;
	}
		.main-header h1{
		font-family: 'Patrick Hand', cursive;
		font-size: 3em;
	}
    .login{
        margin: 0 auto;
	}
	.login h2{
		font-family: initial;
	}
	</style>
</head>
<body>
	<div class="main-header">
		<!-- main heading -->
		<h1>Time to get shit done &#x263A</h1>
	</div>
	<div class="wrapper login">
		<h2>Login</h2>
		<p>Please fill in your credentials to login.</p>
		<form action="<?php echo getAppUrl('process.php'); ?>" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type='text' name="username" class="form-control" value="">
				<span class="help-block"></span>
			</div>    
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control">
				<span class="help-block"></span>
			</div>
			<div class="form-group">
				<input type='hidden' name='process'>
				<input type='hidden' name='login'>
				<input type="submit" class="btn btn-primary" value="Login">
			</div>
			<p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
		</form>
	</div>
</body>
</html>