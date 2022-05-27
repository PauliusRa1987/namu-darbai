<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){

    header('Location: http://localhost/namu-darbai/form.php');
    die;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forma</title>
</head>
<body>
    <form action="" method="POST">
    Tavo tekstas:  <input type="text">
    <button type="submit">SKRISK!</button>

    </form>    




</body>
</html>