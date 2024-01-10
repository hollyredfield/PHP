<?php

//Tipos de datos en php

function salta(){
    echo PHP_EOL;
}

function suma($num1, $num2){
    echo "La suma de los numeros dados es: ". $num1 + $num2;
}

function resta($num1 = 10, $num2 = 10){
    echo "La resta de los numeros dados es: ". $num1 - $num2;
}

//Boolean

$activo = false;

echo PHP_EOL;

if ($activo == true) {
    echo "La variable acivo esta en true";
} else {
    echo "La variable activo esta en false";
}

if ($activo) {
    echo "La variable acivo esta en true segundo if";
} else {
    echo "La variable activo esta en false segundo if";
}

echo PHP_EOL;


//Float

$numero1 = 3.1416;
$numero2 = 5.7463;

echo "La suma es: " . $numero1 + $numero2;

salta();

//Ambos se hacen de la misma manera //Int  //String


//Bucles en PHP

//Bucle While

$galletas = 10;

salta();

while($galletas < 5){
    echo "$galletas, ".PHP_EOL;
    $galletas++;
}
echo "Fin bucle while".PHP_EOL;

//Bucle Until
echo PHP_EOL;
echo "Bucle Until".PHP_EOL;

$galletas = 10;

do {
    echo "$galletas, ";
    $galletas++;
} while ($galletas < 10);

echo "Fin bucle until".PHP_EOL;

//Bucle For
echo PHP_EOL;
echo "Bucle For".PHP_EOL;

for ($galletas = 0; $galletas < 10; $galletas++) {
    echo "$galletas, ";
}

echo "Fin bucle for".salta();

salta();
salta();

suma(5, 6);

salta();
salta();

echo "Esta funcion va con parametros dados ".resta($numero1,$numero2);

salta();

echo "Esta funcion va con SIN parametros dados ".resta();

//Se utilizan ambas segun los numeros que se quiera opear, ya que en una viene predefinido porque lo hicimos nosotros y en la otra le damos nosotros las variables
