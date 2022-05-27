<?php
$color = 'azure';
$background = 'black';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    ?>
    <h2><?php echo $_GET['bbb'] ?></h2>
    <h1><?php echo count($_POST); ?></h1>
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
    <p>10.Padarykite juodą puslapį, kuriame būtų POST forma, mygtukas ir atsitiktinis kiekis (3-10) checkbox su raidėm A,B,C… Padarykite taip, kad paspaudus mygtuką, fono spalva pasikeistų į baltą, forma išnyktų ir atsirastų skaičius, rodantis kiek buvo pažymėta checkboksų (ne kurie, o kiek). </p>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
   
    $skaicius = rand(3,10);
    $raide =range('A', 'J');
    $input = '';
    // $hidden = '';
    for ($i=0; $i < $skaicius; $i++) { 
        $input.='<br>'."<input type='checkbox' name='$raide[$i]'>" . "<label name='count'  for='checkbox'>'$raide[$i]'</label>";
        // $hidden.="<input type='hidden' name='count' value=' $raide[$i]'>";
    }
    ?>
   
    <form action="http://localhost/namu-darbai/mechanika/10_mechanika.php?bbb=<?php echo $skaicius?>" method="POST">
        <?php echo $input?>
        <br>
        <button type="submit">POST</button>
        
    </form>
    <?PHP } ?>
</body>
</html>