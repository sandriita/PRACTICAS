<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practica</title>
    <style>
        div{
            width:100%;
            height: 1em;
        }
    </style>
</head>
<body>
<?php
   /*  Funciona sin array
   for ($i=0;$i<10;$i++){
        $azul=mt_rand(0,255);
        $verde=mt_rand(0,255);
        $rojo=mt_rand(0,255);
        echo "<div style='background-color:rgb($rojo,$verde,$azul)'>";
        echo "</div>";
    }*/
   for ($i=0;$i<10;$i++){
       $azul=mt_rand(0,255);
       $verde=mt_rand(0,255);
       $rojo=mt_rand(0,255);
       $color[$i]="<div style='background-color:rgb($rojo,$verde,$azul)'></div>";
   };
   for ($j=0;$j<10;$j++){
        foreach ($color as $i=>$s) {
        echo $s;
}
   }
?>
</body>
</html>