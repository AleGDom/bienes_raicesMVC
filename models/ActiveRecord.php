<?php 

    namespace Model;
    class ActiveRecord{
        public static $db;
        protected static $errores=[];
        protected static $tabla='propiedades';
        protected static $campos=['id','titulo','precio','imagen','descripcion','habitaciones','wc','estacionamiento','creado','vendedores_id'];


        protected $id;
        protected $titulo;
        protected $precio;
        protected $imagen;
        protected $descripcion;
        protected $habitaciones;
        protected $wc;
        protected $estacionamiento;
        protected $creado;
        protected $vendedores_id;

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

        /**
         * C R U D
         */

        public function save(){
            if($this->id){
                $this->update();
            } else{
                $this->create();
            }
        }

        protected function update(){

        }
        protected function create(){
            $attributes=$this->sanitize();
            $query="INSERT INTO ".self::$tabla." (";
            $query.=join(', ',array_keys($attributes));
            $query.=") VALUES ('";
            $query.=join("','",array_values($attributes));
            $query.="')";
            debuguear($query);
            
        }

        //Utilities

        protected function sanitize(){
            $attributes=$this->attributes();
            $sanitizado=[];
            foreach ($attributes as $key => $value) {
                $sanitizado[$key]=self::$db->escape_string($value);
            }
            return $sanitizado;
        }

        protected function attributes(){
            $attributes=[];

            foreach (static::$campos as $campo) {
                if($campo==='id'){
                    continue;
                }
                $attributes[$campo]=$this->$campo;
            }

            return $attributes;
        }


    }
?>