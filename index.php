<?php
// in completed list session Start
    session_start();
    if(!isset($_SESSION['list'])) {
        $_SESSION['list'] = array();
    }

    // completed list session Start
    if(!isset($_SESSION['completedList'])) {
        $_SESSION['completedList'] = array();
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
</head>
<body>
<!-- Navigation  -->
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="complete.php" role="tab" aria-controls="nav-profile" aria-selected="false">Completed</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#" role="tab" aria-controls="nav-contact" aria-selected="false">Not Completed</a>
  </div>
</nav>
<!-- End of navigation -->
<div class="container">
    <h1 class="text-center heading">TODO LIST</h1>
    <div class="line"></div>
<!-- form -->
     <form action="" class="textBox"  method="post">
         <input type="text" required class="textInput" name="todoEntry"  placeholder="Enter List" id="name" >
         <button type="submit" class="button btn btn-primary">Add</button>
     </form>
<!-- End of Form -->
</div>

 <?php
    if (isset($_POST['todoEntry'])) {
            $_SESSION['list'][] = $_POST['todoEntry'];
        } if (isset($_SESSION['list'])) {
            // Date initialization
            $date = date('Y-m-d');
            // Foreach loop
            foreach ($_SESSION['list'] as $key => $item) {
                ?>
                <!-- flex div that display all in a line -->
                <form class='container' action="" method="post">
                    <div class="shadow-sm pb-4">
                        <p id='<?= $key?>'> <?=$item . " " . $date ?></p>
                    </div>
                    <!-- tick btton -->
                    <div>
                        <button class="btn btn-danger " value="<?=$key?>" name="complete" onclick="checkList(<?= $key ?>)">
                            <i  class="fas fa-check"></i>
                        </button>
                    <!-- delete button -->
                        <button class="btn btn-danger float-right" name='delete' type="submit" value="<?= $key?>">
                                <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>

            </form>

                <?php
            }
            // End for eacheach loop
        }

 ?>
 <?php 
    if(isset($_POST['delete'])) {
        // var_dump($_POST['delete']);
        unset($_SESSION['list'][$_POST['delete']]);
    }

    if(isset($_POST['complete'])) {
        if($_SESSION['list'] = [$_POST['complete']]) {
        $_SESSION['completedList'] = $_SESSION['list'][$_POST['complete']];
        unset($_SESSION['list'][$_POST['complete']]);
        }
    }
// var_dump($_SESSION['completedList']);
 ?>
 <!-- All Scripts Links -->
<!-- links to Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- Link to Main.js -->

    <script>
    // $('#list ').css("color", "red");

    </script>

<!-- End of scripts LInks -->
</body>

</html>
