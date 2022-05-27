<?php
$color = 'azure';
$background = 'black';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    ?>
    <h1><?php echo count($_POST) ?></h1>
    <?php 
    $color = 'black';
    $background = 'azure';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nr9</title>
</head>
<body style="background-color: <?php echo $background?>; color:<?php echo $color?>">
    <p>9.Padarykite juodą puslapį, kuriame būtų POST forma, mygtukas ir atsitiktinis kiekis (3-10) checkbox su raidėm A,B,C… Padarykite taip, kad paspaudus mygtuką, fono spalva pasikeistų į baltą, forma išnyktų ir atsirastų skaičius, rodantis kiek buvo pažymėta checkboksų (ne kurie, o kiek). </p>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
   
    $skaicius = rand(3,10);
    $raide =range('A', 'J');
    $input = '';
    for ($i=0; $i < $skaicius; $i++) { 
        $input.='<br>'."<input type='checkbox' name='$raide[$i]'>" . "<label for='checkbox'>'$raide[$i]'</label>";
    }
    ?>

    <form action="http://localhost/namu-darbai/mechanika/09-mechanika.php" method="POST">
        <?php echo $input?>
        <br>
        <button type="submit">POST</button>
        
    </form>
    <?PHP } ?>
</body>
</html>