<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To-do App</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="enterList">
		<button type="submit">Add</button>
    </form>
    <?PHP 
        if($_POST) {
            echo "<br>" . "\n <ul> \n <li> " . $_POST("enterList") . "</li> \n </ul>";
        }    
    ?>
</body>
</html>