<?php
function suma($numero){
    $numeroDado = $numero;
    $suma = 0;
    $pasos = '';
    while ($numero > 0){
        $digito = $numero % 10;
        $pasos = $digito . ' + '. $pasos;
        $suma += $digito; 
        $numero = (int) ($numero / 10); 
    }
    $pasos = rtrim($pasos, ' + '); 
    echo  "La suma de los digitos de $numeroDado es: $pasos = $suma \n ";
    return $suma;
}

echo "Escribe un numero : \n";
$numero = readline();
suma($numero);
?>