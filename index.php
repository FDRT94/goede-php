<?php

date_default_timezone_set('Europe/Amsterdam');

$hour = date('H');
$time = date('H:i');
$night =  date('00:00');
$morning = date('06:00');
$afternoon = date("12:00");
$evening =  date("18:00");
   

if ($hour > 6 && $hour <=11){
    $greeting = 'Morgen';
 }   

 if ($hour > 12 && $hour <=17){
    $greeting = 'Middag';
 }   

 if ($hour > 18 && $hour <=23){
    $greeting = 'Avond';
 }   

 if ($hour > 0 && $hour <=5){
    $greeting = 'Nacht';
 }  

?>  


<!DOCTYPE html>
<html>
<head>
    <title>Goede PHP</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lobster" />
</head>
<body class='<?= $greeting ?>'>
        <div class='text'>
            <h1>Goede <?=  $greeting ?></h1>
            <h1>Het is nu <?=$time?></h1>
        </div>
</body>
</html>
