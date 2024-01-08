<?php 

namespace Model;

class Admin extends ActiveRecord{
    
    protected $tabla='usuarios';
    protected $campos=['id','email','password'];

    public $email;
    public $password;
    
   function __construct($args=[])
   {
    $this->email=$args['email'];
    $this->password=$args['password'];
   }
    
}

?>