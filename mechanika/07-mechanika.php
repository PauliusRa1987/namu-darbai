<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $color = 'yellow';
    header('Location: http://localhost/namu-darbai/mechanika/07-mechanika.php?');
     die;
} 
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $color =  'green';
  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sestasoisi</title>
</head>
<body style="background-color: <?php echo $color?>;">
<p>7.Pakartokite 6 uždavinį. Papildykite jį kodu, kuris naršyklę po POST metodo peradresuotų tuo pačiu adresu (t.y. į patį save) jau GET metodu.</p>
    <form action="" method="GET">
        <button type="submit">GET</button>
    </form>
    <form action="" method="POST">
        <button type="submit">POST</button>
    </form>
</body>
</html>
