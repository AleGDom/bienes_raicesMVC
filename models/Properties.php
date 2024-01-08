<?php 

    namespace Model;
    class Properties extends ActiveRecord{

        protected static $tabla='propiedades';
        protected static $campos=['id','titulo','precio','imagen','descripcion','habitaciones','wc','estacionamiento','creado','vendedores_id'];


        public $titulo;
        public $id;
        public $precio;
        public $imagen;
        public $descripcion;
        public $habitaciones;
        public $wc;
        public $estacionamiento;
        public $creado;
        public $vendedores_id;

        public function __construct($args=[])
        {
            $this->id=$args['id'] ?? '';
            $this->titulo=$args['titulo'] ?? '';
            $this->precio=$args['precio'] ?? '';
            $this->imagen=$args['imagen'] ?? '';
            $this->descripcion=$args['descripcion'] ?? '';
            $this->habitaciones=$args['habitaciones'] ?? '';
            $this->wc=$args['wc'] ?? '';
            $this->estacionamiento=$args['estacionamiento'] ?? '';
            $this->creado=$args['creado'] ?? date('Y/m/d');
            $this->vendedores_id=$args['vendedores_id'] ?? '';

        }

        public function validate(){
            if(!$this->titulo){
                self::$errores[]='Es necesario escribir un titulo';
            }
            if(!$this->precio){
                self::$errores[]='Es necesario escribir un Precio';
            }
            if(!$this->imagen){
                self::$errores[]='Es necesario agregar una imagen';
            }
            if(!$this->descripcion){
                self::$errores[]='Es necesario agregar una descripcion';
            }
            if(!$this->habitaciones){
                self::$errores[]='Es necesario escribir la cantidad de habitaciones';
            }
            if(!$this->wc){
                self::$errores[]='Es necesario escribir la cantidad de WC';
            }
            if(!$this->estacionamiento){
                self::$errores[]='Es necesario escribir la cantidad de estacionamiento';
            }
            if(!$this->vendedores_id){
                self::$errores[]='Elegir un vendedor';
            }

            return self::$errores;
        }

        
    //IMAGE

    public static function hola(){
        debuguear('Hola');
    }

    public function setImagen($imageName){
        if($this->imagen && file_exists(DIR_IMAGES.$this->imagen)){
            unlink(DIR_IMAGES.$this->imagen);
        }
        $this->imagen=$imageName;
    }

    /** GETTERS Y SETTERS */

    




    }
?>