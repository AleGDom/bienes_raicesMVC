<?php 

namespace Controller;
    use MVC\Router;
class LoginController{


    public static function login(Router $router){
        $router->render('admin/auth/login');
    }   
}

?>