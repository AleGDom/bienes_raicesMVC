<?php 

namespace Model;

class Admin extends ActiveRecord{
    
    protected static $tabla='usuarios';
    protected static $campos=['id','email','password'];

    public $email;
    public $password;
    
   function __construct($args=[])
   {
    $this->email=$args['email'];
    $this->password=$args['password'];
   }

   public function validate(){
        if(!$this->email){
            self::$errores[]='Es necesario escribir el correo';
        }
        if(!$this->password){
            self::$errores[]='Es necesario escribir la contraseña';
        }
        return self::$errores;
   }

   public function verifyEmail(){
        $query="SELECT * FROM ". static::$tabla." WHERE email= '".$this->email."'";

        $result=self::$db->query($query);

        if(!$result->num_rows){
            return false;
        }
        return $result;
   }

   public function verifyPassword($object){
        $password=$object->fetch_assoc();
        $password=$password['password'];
        
        if(password_verify($this->password,$password)){
            return true;
        }
        return false;  
   }

   public function authenticate(){
        session_start();
        $_SESSION['login']=true;
        $_SESSION['user']=$this->email;
        header('Location: /admin');
   }
    
}

?>