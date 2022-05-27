<?php
session_start();
if( $_SERVER['REQUEST_METHOD'] === 'POST'){
    $_SESSION['RGB'] = $_POST['RGB'];
    header('Location: http://localhost/namu-darbai/mechanika/03_mechanika.php');
    die;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trecias</title>
</head>
<?php
if (isset($_SESSION['RGB']) && $_SESSION) {
    $spalva = $_SESSION['RGB'];
}
?>
<body style="background-color: <?php echo $spalva; ?>">
    <p>3.Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku GET metodu formoje.</p>
    <form action="" method="POST">
   Irasyk spalva: <input type="text" name="RGB">
    <button type="submit">GET</button>
</form>
</body>
</html>