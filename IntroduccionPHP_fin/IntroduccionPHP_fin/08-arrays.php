<?php include 'includes/header.php';

// Existen 2 tipos
// - Arrays indexados
// - Arrays asociativos

// Array literal
$carrito = [];
// Array constructor
$carrito = array();

$carrito = ['Tablet', 'Television', 'Computadora'];

// Util para ver los contenidos de un array <pre>
echo "<pre>";
var_dump($carrito);
echo "</pre>";

// Acceder a un elemento del array
echo $carrito[1];

// Añade un elemento en el indice 3 del arreglo
$carrito[3] = 'Nuevo Producto...';

// Añadir un elemento nuevo al final...
array_push($carrito, 'Audifonos');

// Añadir al final segunda forma
$carrito[] = 'Nuevo producto';

// Añadir al inicio
array_unshift($carrito, 'Smartwatch');



// Util para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

// Array constructor
$clientes = array('Cliente 1', 'Cliente 2', 'Cliente 3');
echo "<pre>";
var_dump($clientes);
echo "</pre>";
 
echo $clientes[1];


include 'includes/footer.php';