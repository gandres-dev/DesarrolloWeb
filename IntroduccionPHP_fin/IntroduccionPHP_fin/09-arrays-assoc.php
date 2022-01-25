<?php include 'includes/header.php';
// Arreglos asociativos
// Simil a objetos en javascript y dictionarios en Python

$cliente = [
    'nombre' => 'Juan', 
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium', 
        'disponible' => 100
    ]
];

echo "<pre>";
var_dump($cliente['informacion']);
echo "</pre>";

// Acceder a un elemento es mediante la propiedad
// echo $cliente['nombre'];
// echo $cliente['informacion']['disponible'];

// Agregando una nueva propiedad
$cliente['codigo'] = 1209192012;

echo "<pre>";
var_dump($cliente);
echo "</pre>";



include 'includes/footer.php';