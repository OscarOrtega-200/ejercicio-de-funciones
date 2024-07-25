<?php
function generarFibonacci($numero){
    $secuencia= array (1,1);
    for ($i =2 ; $i< $numero; $i++){
        $secuencia [] = $secuencia[$i -1]+$secuencia [$i -2];   
 }
 return array_slice( $secuencia,0,$numero);
}
echo "Ingrese un numero:\n";
$numero = readline();
echo "Su numero en formato fibonacci es: \n";
// dos formas de mostrar los numeros del fibonaccci
print_r(generarFibonacci($numero));
echo implode(" , ", generarFibonacci($numero));
?>