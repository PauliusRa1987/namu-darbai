<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antras uzdavinys</title>
</head>
<?php

if (isset($_GET['color']) && $_GET['color']) {
    $spalva = $_GET['color'];
    
}else{
    $spalva = '000';
}

?>
<body style="background-color: #<?php echo $spalva; ?>">
    <p>2.Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos.</p>
    <a href="http://localhost/namu-darbai/mechanika/02_mechanika.php">Kita spalva</a>
</body>
</html>