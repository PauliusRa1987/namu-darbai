<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document 12</title>
</head>
<body>
    <h1>Labas!</h1>
    <a href="http://localhost/namu-darbai/012.php/?page=1">Page 1</a>
    <a href="http://localhost/namu-darbai/012.php/?page=2">Page 2</a>
    <a href="http://localhost/namu-darbai/012.php/?page=3">Page 3</a>
<?php
if ($_GET['page'] == 1){
    ?>
    <h2>DDDD</h2>
    <?php
}
if ($_GET['page'] == 2){
    ?>
    <h2>22222</h2>
    <?php
}
if ($_GET['page'] == 3){
    ?>
    <h2>4444</h2>
    <?php
}

?>

</body>
</html>