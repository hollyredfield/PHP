
<?php
function salta() {
    echo PHP_EOL;
}
function suma($a, $b) {
return $a + $b;
}
suma(2, 3);
$activo = false; //boolean
if ($activo == true) {
echo "la variable actvo está en true";
} else {
echo "la variable activo está en false";
}
?> //
<?php
$galletas = 0;
while ($galletas < 10) {
echo "$galletas, ";
$galletas++;
}
echo "Fin del bucle while".PHP_EOL;
//Bucle until, lo comprueba después.
echo PHP_EOL;
echo "Bucle until".PHP_EOL;
$galletas =10;
do {
echo "$galletas, ";
$galletas++;
} while ($galletas < 10);

//bucle for valor inicial, condición de salida , incremento, admite tres valores
for ($galletas = 0; $galletas < 10; $galletas++) {
echo "$galletas, ";
}
function resta($num1 = 10, $num2 = 10) {
echo "El resultado es: ";

}
echo "Esta función tiene parámetros por defecto".resta();