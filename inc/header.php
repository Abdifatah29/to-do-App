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
                <a class="dropdown-item" href="../auth/login.php">Log out</a>
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
        </div>
    </section>
    <!-- End of main -->

    <!-- Bootstap script links -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>