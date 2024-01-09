<?php 

namespace Controller;

use Model\Admin;
use MVC\Router;
class LoginController{


    public static function login(Router $router){
        $errores=[];
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $admin = new Admin($_POST);
            $errores=$admin->validate();

            if(empty($errores)){
                $authEmail=$admin->verifyEmail();

                if(!$authEmail){
                    $errores[]='El usuario no existe';
                } else{
                    $authPassword=$admin->verifyPassword($authEmail);
                    if(!$authPassword){
                        $errores[]='La contraseña es incorrecta';
                    } else{
                        $admin->authenticate();
                    }
                }
            }

        }
        $router->render('admin/auth/login',[
            'errores'=>$errores
        ]);
    }
    
    public static function logout(){
        session_start();
        $_SESSION=[];

        header('Location: / ');
    }
}

?>