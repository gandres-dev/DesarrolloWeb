<?php include 'includes/header.php';  // Incluye otros archivos

// Tambien puede ir comparentesis, es lo mismo
// <?php include('includes/header.php');

// require: Lanza un Fatal error si no encuentra el archivo
// Usarlo cuando tengamos funciones criticos para la aplicacion.
// include: Para incluir otros tamplates
require 'funciones.php';

iniciarApp();  // Podemos ahora utilizar ya la funcion de funciones.php

// require_once: Igual que require, pero solo lo incluye una vez.


include 'includes/footer.php';