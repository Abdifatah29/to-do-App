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
 <!-- link to bootsrap -->
 <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
<!-- link to fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
<!-- link to Js Bootsrap -->
<script 
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
    crossorigin="anonymous">
</script>



 <title>To do list</title>
</head>
<body>
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
  </div>
</nav>
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
                echo  "<li>" . $item ."</li>";
            }
        //    console.log($item);

        }
        //    console.log($_SESSION['list']);

 ?>
</body>
</html>
