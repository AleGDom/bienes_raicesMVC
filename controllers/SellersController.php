<?php 

    namespace Controller;

use Model\Sellers;
use MVC\Router;
    class SellersController{
        
        public static function crear(Router $router){
            $errores=[];
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $seller= new Sellers($_POST);
                $errores=$seller->validate();
                if(empty($errores)){
                    $seller->save();
                }



            }
            $router->render('admin/vendedores/crear',[
                'errores'=>$errores,
                'seller'=>$seller
            ]);
        }

        public static function actualizar (Router $router){
            $id=getID();
            $seller=Sellers::find($id);
            $errores=[];
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $seller->syncup($_POST);
                $errores=$seller->validate();

                if(empty($errores)){
                    $seller->save();
                }
            }
            $router->render('admin/vendedores/crear',[
                'errores'=>$errores,
                'seller'=>$seller
            ]);
        }

        public static function eliminar(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $id=$_POST['id'];
                if($id){
                    $object=Sellers::find($id);
                    $object->delete();
                }
            }
        }
    }
?>