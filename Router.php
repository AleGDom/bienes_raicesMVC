<?php 
namespace MVC;
class Router{
    protected $getpaths=[];
    protected $postpaths=[];
    public function get(String $url,$fn){
        $this->getpaths[$url]=$fn;
    }
    public function post(String $url,$fn){
        $this->postpaths[$url]=$fn;
    }
    public function ValidateURL(){
        $urlProtected=['/admin','/propiedad/crear','/propiedad/actualizar','/propiedad/eliminar','/vendedor/crear','/vendedor/actualizar','/vendedor/eliminar'];
        $url=($_SERVER['PATH_INFO']) ?? '/';

        session_start();
        $auth=$_SESSION['login'] ?? false;

        if(in_array($url,$urlProtected) && !$auth){
            header('Location: /login');
        }
        $method=$_SERVER['REQUEST_METHOD'];
        if($method=='GET'){
            $fn=$this->getpaths[$url] ?? NULL;
        } else{
            $fn=$this->postpaths[$url] ?? NULL;
        }

        if($fn){
            call_user_func($fn,$this);
        } else{
            echo "ERROR 404";
        }
    }

    public function getd(){
        var_dump($this->getpaths);
    }

    public function render($dir,$var=[]){
        foreach ($var as $key => $value) {
            $$key=$value;
        }

        ob_start();
        
            include __DIR__.'/views/'.$dir.'.php';
        $contenido=ob_get_clean();

        include __DIR__.'/views/master_page.php';

    }


}

?>