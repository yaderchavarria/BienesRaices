<?php

function conectarDB() : mysqli {
    $db = new mysqli('localhost','root', '1234567','bienesraices_crud');

    if (!$db) {
        echo 'Error en la conexión';
        exit;
    }

    return $db;
    
}

