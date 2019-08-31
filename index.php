<?php
session_start();
if(!isset($_SESSION['list'])) {
    $_SESSION['list'] = array();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">

 <!-- Link to stylesheet CSS -->
 <link rel="stylesheet" type="text/css" href="css/styles.css">
 <title>To do list</title>
</head>
<body>
     
     <form action="index.php" method="post">
         <input type="text" name="todoEntry" id="name" >
         <button type="submit" >Add</button>
     </form>
 <?php
    if (isset($_POST['todoEntry'])) {
        // var_dump($_POST['todoEntry']);
            $_SESSION['list'][] = $_POST['todoEntry'];
            // var_dump($_SESSION['list']);
        } if (isset($_SESSION['list'])) {
            foreach ($_SESSION['list'] as $item) {
                echo  $item ."</br>";
            }
        }
            // var_dump($_SESSION[]);

 ?>
</body>
</html>
