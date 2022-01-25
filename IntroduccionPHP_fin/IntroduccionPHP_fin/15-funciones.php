<?php 
declare(strict_types=1);
include 'includes/header.php';

/* Types
int
float
bool
array

*/

function sumar(int $numero1 = 0, array $numero2 ) {
    echo $numero1 + $numero2;
}

sumar(10, []);

//Named Parameters PHP8
sumar(numero1: 10, numero2: []);


include 'includes/footer.php';