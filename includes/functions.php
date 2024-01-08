<?php 

    define('DIR_IMAGES',$_SERVER['DOCUMENT_ROOT'].'/imagenes/');

    function debuguear($var){
        echo "<pre>";
            var_dump($var);
        echo "</pre>";
    }

    function getID(){
        $id=$_GET['id'];
        
        $id = filter_var($id,FILTER_VALIDATE_INT);
        if(!$id){
            header('Location: /admin');
        } 
        
        return $id;
        
    }

?>