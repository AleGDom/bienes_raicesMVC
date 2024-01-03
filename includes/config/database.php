<?php 
    function conectarDB(){
        try {
            $db= new mysqli('localhost','root','root','bienesraices_crud');
            return $db;
        } catch (\Throwable $th) {
            throw $th;
            
        }
    }

?>