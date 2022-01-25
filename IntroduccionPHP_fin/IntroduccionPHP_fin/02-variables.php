<?php include 'includes/header.php';


$nombre = "Juan";


$nombre = "Juan 2";

echo $nombre;
var_dump($nombre);

//1) Forma más comun de crear constantes
define('constante', "Este es el valor de la constante");
echo constante;
// 2) Segunda forma menos común
const constante2 = "Hola 2";
echo constante2;

$nombreCliente = "Pedro";  // Convecion Javascript y Java
$nombre_cliente = "Pedro";  // Convencion en php

include 'includes/footer.php';