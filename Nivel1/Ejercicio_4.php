<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
function contador ($num_determinado, $modo_contar){

    for( $i = 0; $i <= $num_determinado; $i += $modo_contar){ 
        echo $i ."<br>"; 
    }    
 }
    $num_determinado = 66;
    $modo_contar = 6;
    contador ($num_determinado, $modo_contar) ."<br>"; 

 function contar (int $num_defecto = 10, int $modo_cuenta = 2){

    for( $i = 0; $i <= 10; $i += 2){ 
        echo $i ."<br>"; 
    }    
 } 
    contar () ."<br>";

 ?>
</body>
</html>