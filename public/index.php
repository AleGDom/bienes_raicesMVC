<?php 

require '/Users/alexi/Desktop/bienesraices_inicio/includes/app.php';

use Controller\AdminController;
use Controller\LoginController;
use MVC\Router;
    use Controller\PagesController;
use Controller\SellersController;

    $router=new Router();
    $router->get('/',[PagesController::class,'index']);
    $router->get('/nosotros',[PagesController::class,'nosotros']);
    $router->get('/anuncios',[PagesController::class,'anuncios']);
    $router->get('/blog',[PagesController::class,'blog']);
    $router->get('/contacto',[PagesController::class,'contacto']);

    //ADMIN
    $router->get('/admin',[AdminController::class,'index']);
//CRUD FOR PROERTIES
    //CREATE
    $router->get('/propiedad/crear',[AdminController::class,'crear']);
    $router->post('/propiedad/crear',[AdminController::class,'crear']);
    //UPDATE
    $router->get('/propiedad/actualizar',[AdminController::class,'actualizar']);
    $router->post('/propiedad/actualizar',[AdminController::class,'actualizar']);
    //DELETE
    $router->post('/propiedad/eliminar',[AdminController::class,'eliminar']);
//CRUD DOR SELLERS
    //CREATE
    $router->get('/vendedor/crear',[SellersController::class,'crear']);
    $router->post('/vendedor/crear',[SellersController::class,'crear']);
    //UPDATE
    $router->get('/vendedor/actualizar',[SellersController::class,'actualizar']);
    $router->post('/vendedor/actualizar',[SellersController::class,'actualizar']);
    //DELETE
    $router->post('/vendedor/eliminar',[SellersController::class,'eliminar']);

    //Login
    $router->get('/login',[LoginController::class,'login']);
    $router->post('/login',[LoginController::class,'login']);

    //Logout
    $router->get('/logout',[LoginController::class,'logout']);


    $router->ValidateURL();

?>