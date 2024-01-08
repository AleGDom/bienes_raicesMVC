<?php 

namespace Model;

class Sellers extends ActiveRecord{
    
    protected static $tabla = 'vendedores';
    protected static $campos = ['id','nombre','apellido','telefono'];
    public $id;
    public $nombre;
    public $apellido;
    public $telefono;

    public function __construct($args=[])
    {
        $this->id=$args['id'];
        $this->nombre=$args['nombre'];
        $this->apellido=$args['apellido'];
        $this->telefono=$args['telefono'];
    }

    public function validate(){
        if(!$this->nombre){
            self::$errores[]='El nombre es obligatorio';
        }
        if(!$this->apellido){
            self::$errores[]='El apellido es obligatorio';
        }
        if(!$this->telefono){
            self::$errores[]='El telefono es obligatorio';
        }

        return self::$errores;
    }
}

?>