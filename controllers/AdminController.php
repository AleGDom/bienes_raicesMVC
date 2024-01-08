<?php 

namespace Controller;

use MVC\Router;
use Intervention\Image\ImageManagerStatic as Image;
use Model\Properties;
use Model\Sellers;

class AdminController{

    public static function index(Router $router){
        $properties=Properties::all();
        $sellers=Sellers::all();
        $router->render('admin/admin',[
            'properties'=>$properties,
            'sellers'=>$sellers
        ]);
    }


    public static function crear(Router $router){
        $property= new Properties();
        $sellers=Sellers::all();
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $errores=[];
            $propiedad= new Properties($_POST);

            $carpeta=DIR_IMAGES;
            $imageName=md5(uniqid(rand(),true)).'.jpg';
            if($_FILES['imagen']['tmp_name']){
                $propiedad->setImagen($imageName);
             
                $image=Image::make($_FILES['imagen']['tmp_name'])->fit(800,600);
            }

            $errores=$propiedad->validate();

            if(empty($errores)){
                if(!is_dir($carpeta)){
                    mkdir($carpeta);
                }

                $image->save($carpeta.$imageName);
                $propiedad->save();

            }

        }
        $router->render('admin/propiedades/crear',[
            'errores'=>$errores,
            'property'=>$property,
            'sellers'=>$sellers
        ]);
    }

    public static function actualizar(Router $router){
        $id=getID();
        $sellers=Sellers::all();
        $errores=[];
        $property= Properties::find($id);
        
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $property->syncup($_POST);
            if($_FILES['imagen']['tmp_name']){
                $image=Image::make($_FILES['imagen']['tmp_name'])->fit(800,600);
            }
            $errores=$property->validate();

            if(empty($errores)){
                
            
                if(!is_dir(DIR_IMAGES)){
                    mkdir(DIR_IMAGES);
                }
                $imageName=md5(uniqid(rand(),true)).'.jpg';
                if($_FILES['imagen']['tmp_name']){
                    $property->setImagen($imageName);
                    $image->save();
                }

                $property->save();
                
            }
        }
        
        $router->render('admin/propiedades/actualizar',[
            'property'=>$property,
            'sellers'=>$sellers,
            'errores'=>$errores
        ]);
    }

    public static function eliminar(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $id=$_POST['id'];
            if($id){
                $object=Properties::find($id);
                $object->delete();
            }
        }
    }
}

?>