<?php
// session Start
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
 <title>To do list</title>

 <!-- Link to stylesheet CSS -->
 <link rel="stylesheet" href="css/style.css">
 <!-- link to bootsrap -->
 <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
<!-- link to fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
<!-- google font  -->
<link href="https://fonts.googleapis.com/css?family=Gayathri&display=swap" rel="stylesheet">
<!-- link to Js Bootsrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
<!-- Navigation  -->
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Completed</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Not Completed</a>
  </div>
</nav>
<!-- End of navigation -->
<div class="container">
    <h1 class="text-center heading">TODO LIST</h1>
    <div class="line"></div>
<!-- form -->
     <form action="index.php" class="textBox" placeholder="Enter Text" method="post">
         <input type="text" required class="textInput" name="todoEntry" id="name" >
         <button type="submit" class="button">Add</button>
     </form>
<!-- End of Form -->
</div>

 <?php
    if (isset($_POST['todoEntry'])) {
        // var_dump($_POST['todoEntry']);
            $_SESSION['list'][] = $_POST['todoEntry'];
            // var_dump($_SESSION['list']);
        } if (isset($_SESSION['list'])) {
            // Date initialization
            $date = date('Y-m-d');
            // Foreach loop
            foreach ($_SESSION['list'] as $key => $item) {
                ?>
                <!-- flex div that display all in a line -->
                <div class='container'>
                    <div>
                        <p> <?=$item . " " . $date ?></p>
                    </div>
                    <!-- tick btton -->
                    <div>
                        <button class="btn btn-danger ">
                            <i  class="fas fa-check"></i>
                        </button>
                    <!-- delete button -->
                        <button class="btn btn-danger float-right" name='remove' action="delete">
                                <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>

                </div>

                <?php
            }
            // End for eacheach loop
        }

 ?>
 <script>
     $(docment).ready(function() {
        var itemDone =  0 ;
        $(".container p").click(function() {
    
        })
     });
 </script>

</body>

</html>
