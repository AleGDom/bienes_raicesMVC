<?php 
namespace Controller;
use MVC\Router;
class PagesController{

    public static function index(Router $router){
        $router->render('pages/index',[
            'inicio'=>true
        ]);
    }
    public static function nosotros(Router $router){
        $router->render('pages/nosotros',[

        ]);
    }
    public static function anuncios(Router $router){
        $router->render('pages/anuncios',[

        ]);
    }
    public static function blog(Router $router){
        $router->render('pages/blog',[

        ]);
    }
    public static function contacto(Router $router){
        $router->render('pages/contacto',[

        ]);
    }
}
?>