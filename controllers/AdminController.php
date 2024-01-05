<?php 

namespace Controller;

use Model\ActiveRecord;
use MVC\Router;

class AdminController{

    public static function index(Router $router){
        $router->render('admin/admin',[
            
        ]);
    }
    public static function crear(Router $router){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $propiedad= new ActiveRecord($_POST);
            $errores=$propiedad->save();
        }
        $router->render('admin/propiedades/crear',[
            'errores'=>$errores
        ]);
    }
}

?>