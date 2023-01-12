<?php

define('TEMPLATES_URL', __DIR__ . '/templates');
define('FUNCIONES_URL', __DIR__.'funciones.php');
define('CARPETA_IMAGENES', $_SERVER['DOCUMENT_ROOT'] . '/imagenes/');

function incluirTemplate($nombre,$inicio = false) {
    @include TEMPLATES_URL ."/${nombre}.php" ;
}

function estaAutenticado() {
    session_start();

   

    if (!$_SESSION['login']) {
        header('location:/');
    } else {
        header('locaton:/admin');
    }
    
    
}

function debuguear ($variable) {
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
    exit;
}

//Escapa y protege el html

function p($html) : string {
    $p = htmlspecialchars($html);
    return $p;
}

//Validar tipo de contenido

function validarTipoContenido($tipo) {
    $tipos = ['vendedor','propiedad'];

    return in_array($tipo,$tipos);
}

//Muestra los mensajes
function mostrarNotificaciones($codigo) {
    $mensaje = '';

    switch ($codigo) {
        case '1':
            $mensaje = 'Creado Correctamente';
            break;
        case '2':
            $mensaje = 'Actualizado Correctamente';
             break;
        case '3':
            $mensaje = 'Eliminado Correctamente';
            break;
        default:
            $mensaje = false;
            break;
    }
    return $mensaje;
}

function validarOredireccionar(string $url) {
    //Validar la url por id valido

    $id = $_GET['id'];

    $id = filter_var($id, FILTER_VALIDATE_INT);

    if (!$id) {
        header("location/${url}");
    }

    return $id;
}