<?php
function esPalindromo($texto){
    $texto = strtolower($texto);
    $texto = preg_replace('/[ ^a-z 0-9]/','' ,$texto);
    return $texto == strrev($texto);
}

echo "Bienvenido escriba una palabra para detectar si es un palindromo.\n";
$texto = readline();

if (esPalindromo($texto)){
    echo "la palbra '$texto' si un palindromo" ;
}else{
    echo "la palbra '$texto' no es un palindromo";
}


?>