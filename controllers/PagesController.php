<?php 
namespace Controller;

use Model\Properties;
use MVC\Router;
use PHPMailer\PHPMailer\PHPMailer;

class PagesController{

    public static function index(Router $router){
        $properties=Properties::get(3);
        
        $router->render('pages/index',[
            'inicio'=>true,
            'properties'=>$properties
        ]);
    }
    public static function nosotros(Router $router){
        $router->render('pages/nosotros',[

        ]);
    }
    public static function anuncios(Router $router){
        $properties=Properties::all();
        $router->render('pages/anuncios',[
            'properties'=> $properties
        ]);
    }
    public static function blog(Router $router){
        $router->render('pages/blog',[

        ]);
    }
    public static function contacto(Router $router){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $phpmailer = new PHPMailer();
            $phpmailer->isSMTP();
            $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
            $phpmailer->SMTPAuth = true;
            $phpmailer->Port = 2525;
            $phpmailer->Username = 'd5bbc4a46e96e9';
            $phpmailer->Password = '7a5305b3c7bed3';

            $phpmailer->setFrom('correo@correo.com', 'Bienes Raices');
            $phpmailer->addAddress('mallardalexdz@gmail.com', 'Alexis JIJIJA');     //Add a recipient
            $phpmailer->addAddress('correo@correo.com', 'Bienes Raices'); 
            
            $phpmailer->isHTML(true);                                  //Set email format to HTML
            $phpmailer->Subject = 'Here is the subject';
            $phpmailer->Body    = 'This is the HTML message body <b>in bold!</b>';
            $phpmailer->AltBody = 'This is the body in plain text for non-HTML mail clients';  
            
            if($phpmailer->send()){
                debuguear('Mensaje enviado');

            } else{
                debuguear('Mensaje no enviado');
            }
        }
        $router->render('pages/contacto',[

        ]);
    }
}
?>