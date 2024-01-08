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
        } else if(!preg_match('/[0-9]{10}/',$this->telefono) || strlen($this->telefono)>10){
            self::$errores[]="Formato de telefono no válido";
        }

        return self::$errores;
    }
}

?>