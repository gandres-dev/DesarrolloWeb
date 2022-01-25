<?php 
declare(strict_types=1); // Para mostrar los errores mientras escribre
include 'includes/header.php';

/* 
:string   devuelve un string
?:string es opcional que retorne un string
:void   no devuelve nada
string|int    especifica diferentes retornos
*/
function usuarioAutenticado(bool $autenticado) : ?string {
    if($autenticado) {
        return "El Usuario esta autenticado";
    } else {
        return null;
    }
}

$usuario = usuarioAutenticado(false);
echo $usuario;

include 'includes/footer.php';