
<?php
/*


//ejemplo que me ha gustado, haber como podemos implementarlo.
//evidentemente las rutas no coinciden y el nombre de las clases tampoco


// routes.php

// Obtener la URI actual y procesarla
$request = $_SERVER['REQUEST_URI'];

// Eliminar cualquier parámetro de la query string
$request = strtok($request, '?');

// Rutas de la aplicación
switch ($request) {
    case '/':
        require __DIR__ . '/../app/Controllers/HomeController.php';
        $controller = new HomeController();
        $controller->index();
        break;

    case '/trasteros':
        require __DIR__ . '/../app/Controllers/TrasteroController.php';
        $controller = new TrasteroController();
        $controller->index();
        break;

    case '/trasteros/detalle':
        require __DIR__ . '/../app/Controllers/TrasteroController.php';
        $controller = new TrasteroController();
        $controller->detalle();
        break;

    case '/alquiler':
        require __DIR__ . '/../app/Controllers/AlquilerController.php';
        $controller = new AlquilerController();
        $controller->index();
        break;

    case '/usuario/perfil':
        require __DIR__ . '/../app/Controllers/UsuarioController.php';
        $controller = new UsuarioController();
        $controller->perfil();
        break;

    default:
        // Ruta para página 404 no encontrada
        http_response_code(404);
        echo "Página no encontrada";
        break;
}
