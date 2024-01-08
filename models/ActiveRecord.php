<?php 

    namespace Model;
    class ActiveRecord{
        public static $db;
        protected static $errores=[];
        protected static $tabla='';
        protected static $campos=[];


        public $id;
        


        public function validate(){
            
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
            $attributes=$this->sanitize();
            $array=[];
            
            foreach ($attributes as $key => $value) {
                $array[] = $key." = '".$value."'";
            }
            $query="UPDATE ".static::$tabla." SET " ;
            $query.=join(', ',$array);
            $query.=" WHERE id=".$this->id;
            $result=self::$db->query($query);

            if($result){
                header('Location: /admin?result=2');
            }
        }
        protected function create(){
            $attributes=$this->sanitize();
            $query="INSERT INTO ".static::$tabla." (";
            $query.=join(', ',array_keys($attributes));
            $query.=") VALUES ('";
            $query.=join("','",array_values($attributes));
            $query.="')";

            $result=self::$db->query($query);

            if($result){
                header('Location: /admin?result=1');
            }
             
        }

        public function delete(){
            $query="DELETE FROM ".static::$tabla." WHERE id=".$this->id;
            $result=self::$db->query($query);

            if($result){
                header('Location: /admin');
            }
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

        
    

    //GENERAL QUERYS ID

    public static function all(){
        $query= " SELECT * FROM ". static::$tabla;
        $result=self::querySQL($query);
        return $result;
    }
    public static function find($id){
        $query="SELECT * FROM ".static::$tabla." WHERE id=".$id;
        $result = self::querySQL($query);

        return array_shift($result);
        
    }
    protected  static function querySQL($query){
        $properties = self::$db->query($query);
        $result=[];
            while ($property = $properties->fetch_assoc()) {
                $result[]=self::createObject($property);
            }
          $properties->free();  
        return $result;  
    }

    protected static function createObject($property){
        $object = new static($property);

        return $object;
    }

    public function syncup($args=[]){
        foreach ($args as $key => $value) {
            if(property_exists($this,$key) && !is_null($value)){
                $this->$key = $value;
            }
            # code...
        }
    }
    public function setImagen($imageName){

    }
    




    }
?>