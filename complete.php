<?php
// in completed list session Start
    session_start();

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
    <title>Complete</title>
</head>
<body>
    <?php
        echo  $_SESSION['completedList'];
    ?>
</body>
</html>