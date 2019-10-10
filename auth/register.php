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
	<title>Sign Up</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<style type="text/css">
	/* google font */
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
		body{ font: 14px sans-serif; }
		.wrapper{ width: 350px; padding: 20px; }
		 /* Login page */
    .main-header{
        text-align: center;
        margin: 0 auto;
	}
	.main-header h1{
		font-family: 'Indie Flower', cursive;
		font-size: 3em;
	}
	.register{
        margin: 0 auto;
	}
	.register h2{
		font-family: initial;
	}
	</style>
</head>
<body>
	<div class="main-header">
		<!-- main heading -->
		<h1>You really need get shit done  &#129320</h1>
	</div>
	<div class="wrapper register">
		<h2>Sign Up</h2>
		<p>Please fill this form to create an account.</p>
		<form action="<?php echo getAppUrl('process.php'); ?>" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control" required value="">
				<span class="help-block"></span>
			</div>    
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" required value="">
				<span class="help-block"></span>
			</div>
			<div class="form-group">
				<label>Confirm Password</label>
				<input type="password" name="confirm_password" class="form-control" required value="">
				<span class="help-block"></span>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Submit">
			</div>
			<input type='hidden' name='process'>
			<input type='hidden' name='register'>
			<p>Already have an account? <a href="login.php">Login here</a>.</p>
		</form>
	</div>    
</body>
</html>