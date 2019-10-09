<?php
session_start();
require('inc/functions.php');

try {

	if (!isset(getRequestMethod()['process'])) {
		throw new Exception('Request cannot be processed.');
	}

	if (isset(getRequestMethod()['register'])) {
		return register(getRequestMethod());
	}

	if (isset(getRequestMethod()['login'])) {
		return login(getRequestMethod());
	}

	if (isset(getRequestMethod()['logout'])) {
		return logout();
	}

	if (isset(getRequestMethod()['save-todo'])) {
		return saveTodo(getRequestMethod());
	}

	if (isset(getRequestMethod()['markTodo'])) {
		return markTodo(getRequestMethod());
	}

	if (isset(getRequestMethod()['removeTodo'])) {
		return removeTodo(getRequestMethod());
	}

}catch(Exception $e) {
	echo "<h1>" . $e->getMessage() . "</h1>";
	exit;
}