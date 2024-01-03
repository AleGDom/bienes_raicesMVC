<?php 

require '/Users/alexi/Desktop/bienesraices_inicio/includes/app.php';

    use MVC\Router;
    
    $router=new Router();
    $router->get('/',[]);

    $router->ValidateURL();

?>