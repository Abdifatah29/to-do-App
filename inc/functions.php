<?php

function getBasePath($append = '')
{
	$config = require(dirname(dirname(__FILE__)) . '/config.php');
	return $config['base_path'] . $append;
}

function userExist()
{
	$db = db();
	if (!isset($_SESSION['user_id'])) {
		return false;
	}

	$query = $db->prepare("SELECT id FROM users WHERE id = :id");
	$query->bindParam(':id', $_SESSION['user_id']);
	$query->execute();

	$result = $query->fetchAll();
	// If number of result is less than one, this means the user does not exists, so return false.
	if (count($result) < 1) {
		return false;
	}

	return true;
}

function getConfig($key)
{
	$config = require('../config.php');
	return $config[$key] ?? null;
}

function getAppUrl($append = '')
{
	$config = require(getBasePath('config.php'));
	return $config['app_url'] . $append;  
}

function db()
{
	require(getBasePath('inc/dbconnect.php'));
	return $conn;
}

function getRequestMethod()
{
	switch($_SERVER['REQUEST_METHOD']) {
		case 'GET':
		return $_GET;
		case 'POST':
		return $_POST;
		case 'PUT':
		return $_PUT;
		case 'DELETE':
		return $_DELETE;
		default:
		return null;
	}
}

function saveTodo($request)
{
	$db = db();
	$user_id = $_SESSION['user_id'];
	$date = date('Y-m-d H:i:s');

	// Save a new todo into database
	$save = $db->prepare("INSERT INTO todos (content, due_date, user_id) VALUES (?, ?, ?)");
	$save->execute([$request['todo'], $date, $user_id]);

	// Echo the id of the saved todo
	echo $db->lastInsertId();
}

function removeTodo($request)
{
	$db = db();

	// Remove a todo from the database
	$save = $db->prepare("DELETE FROM todos WHERE id = ?");
	$save->execute([$request['todo']]);
}

function markTodo($request)
{
	$db = db();

	// Mark a todo in the database to 1
	$save = $db->prepare("UPDATE todos SET done = 1 WHERE id = ?");
	if (!$save->execute([$request['todo']])) {
		header('HTTP/1.0 500 Internal Server Error');
	}
}

function loadTodos()
{
	$db = db();

	$result = [];

	// Load and return todos from the database
	$query = $db->prepare("SELECT * FROM todos WHERE user_id = :user_id");
	$query->bindParam(':user_id', $_SESSION['user_id']);
	$query->execute();

	$result = $query->fetchAll();
	return $result;
}

// Registers a new user
function register($request)
{
	$db = db();
	$username = $request['username'];
	$query = $db->prepare("SELECT username FROM users WHERE username = :username");
	$query->bindParam(':username', $username);
	$query->execute();

	$result = $query->fetchAll();
	// If number of result is more than one, this means the user exists, so give an error.
	if (count($result) > 0) {
		throw new Exception('User exists');
	}

	// Encrypt the user's password with `md5` function so that we will not save plain
	// password into the database.
	$password = md5($request['password']);
	$save = $db->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
	$save->execute([$username, $password]);

	// Get the id of the new user that is saved into the database and set the id as the
	// user_id in the session.
	$id = $db->lastInsertId();
	$_SESSION['user_id'] = $id;

	// Redirect back to the base url
	return header('Location: ' . getAppUrl());
}

// Logs a user in
function login($request)
{
	$db = db();
	$username = $request['username'];
	$password = md5($request['password']);
	$query = $db->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
	$query->bindParam(':username', $username);
	$query->bindParam(':password', $password);
	$query->execute();

	$result = $query->fetchAll();
	if (count($result) < 1) {
		throw new Exception('User does not exist');
	}

	$_SESSION['user_id'] = $result[0]['id'];

	return header('Location: ' . getAppUrl());
}

// Logs a user out
function logout()
{
	session_destroy();

	return header('Location: ' . getAppUrl());
}