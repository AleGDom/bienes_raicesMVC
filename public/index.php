<?php 

require '/Users/alexi/Desktop/bienesraices_inicio/includes/app.php';

use Controller\AdminController;
use MVC\Router;
    use Controller\PagesController;
    
    $router=new Router();
    $router->get('/',[PagesController::class,'index']);
    $router->get('/nosotros',[PagesController::class,'nosotros']);
    $router->get('/anuncios',[PagesController::class,'anuncios']);
    $router->get('/blog',[PagesController::class,'blog']);
    $router->get('/contacto',[PagesController::class,'contacto']);

    //ADMIN
    $router->get('/admin',[AdminController::class,'index']);
    //CREATE
    $router->get('/propiedad/crear',[AdminController::class,'crear']);
    $router->post('/propiedad/crear',[AdminController::class,'crear']);
    //UPDATE
    $router->get('/propiedad/actualizar',[AdminController::class,'actualizar']);
    $router->post('/propiedad/actualizar',[AdminController::class,'actualizar']);

    $router->post('/propiedad/eliminar',[AdminController::class,'eliminar']);
    $router->ValidateURL();

?>