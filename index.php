<?php
// in completed list session Start
	session_start();

	require('inc/functions.php');

	if (!userExist()) {
		return header('Location: auth/login.php');
	}
	
	if(!isset($_SESSION['list'])) {
		$_SESSION['list'] = array();
	}

	// completed list session Start
	if(!isset($_SESSION['completedList'])) {
		$_SESSION['completedList'] = array();
	}

?>
<style type='text/css'>
	.line-success {
		text-decoration: line-through;
	}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>todo lsit</title>
	<!-- Bootstrap link -->
	<link rel="stylesheet"
	 href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
	 integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
	 crossorigin="anonymous">
	  <!-- Link for font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Text&display=swap" rel="stylesheet">

	 <style>
		.header{
			text-align: right;
		}
		.dropdown button{
			border: none;
			background: inherit;
			color: #000;
			/* width: 70%;
			margin: 0 auto; */
		}
		.todoLogo h1{
			font-family: 'Big Shoulders Text', cursive;
			font-size: 32px;
		}
		.dropdown button:after {
			border: none;
		}
		.todoLogo{
			width: 70%;
			margin: 0 auto;
			text-align: center;
		}
		.logo img{
			width: 30vh;
		}
	 </style>
	 <script>
	 	window.appUrl = '<?php echo getAppUrl(); ?>';
	 </script>
</head>
<body>
	<!-- header start -->
	<header class="header container">
	<!-- user nav -->
		<div class="dropdown center">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			   <i class="fa fa-bars"></i>
			</button>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="#">View profile</a>
				<a class="dropdown-item" href="#">Change password</a>
				<a class="dropdown-item" href="<?php echo getAppUrl('process.php?process&logout') ?>">Log out</a>
			</div>
		</div>
	</header>
	<!-- end of header -->
	<!-- main -->
	<section class="todoLogo">
		<div class="center"><h1>Todo Bucket</h1></div>
		<div class="logo">
			<img src="https://www.trzcacak.rs/myfile/full/104-1047089_shopping-cart-light-blue-green-shopping-cart-icon.png" alt="">
			<hr>
			<!-- form -->
				<form class='todo-form' method="post" action="">
					<div class='input-group mt-5 mb-3'>
						<input type='text' required class='form-control textInput todoText' id='name' name='todo'placeholder='Enter List' aria-label='Todo Item' aria-describedby='button-addon2' required>
						<input type='hidden' name='process'>
						<input type='hidden' name='save-todo'>
						<br>
						<div class='input-group-append'>
							<button class='btn btn-primary' name='submit' type='submit' id='button-addon2'>Add</button>
						</div>
					</div>
				</form>
			<!-- End of Form -->
		</div>
		<!-- flex div that display all in a line -->
		<div class='container todolist'>
			<?php foreach(loadTodos() as $todo) { ?>
				<div class='align-items-center d-flex p-4 pb-4 shadow-sm mt-3'>
					<p class='text-left w-75 <?php echo $todo['done'] == 1 ? 'line-success' : ''; ?>'>
						<?php echo $todo['content']; ?>
					</p>
					<div>
						<!-- tick btton -->
						<button class="btn btn-danger markTodo" value='<?php echo $todo['id']; ?>'>
							<i  class='fas fa-check'></i>
						</button>
						<!-- delete button -->
						<button class='btn btn-danger float-right removeTodo' name='delete' type='submit' value='<?php echo $todo['id']; ?>'>
							<i class='fas fa-trash-alt'></i>
						</button>
					</div>
				</div>
			<?php } ?>
		</div>
	</section>
	<!-- End of main -->

	<!-- Bootstap script links -->
	<script src='https://code.jquery.com/jquery-3.1.1.min.js' crossorigin='anonymous'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
	<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
	<script type='text/javascript' src='js/main.js'></script>
</body>
</html>