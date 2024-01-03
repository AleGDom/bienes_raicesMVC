<?php 

require '/Users/alexi/Desktop/bienesraices_inicio/includes/app.php';

    use MVC\Router;
    use Controller\PagesController;
    
    $router=new Router();
    $router->get('/index',[PagesController::class,'index']);
    $router->get('/nosotros',[PagesController::class,'nosotros']);
    $router->ValidateURL();

?>