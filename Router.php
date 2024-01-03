<?php 
namespace MVC;
class Router{
    protected $getpaths=[];
    protected $postpaths=[];
    public function get(String $url,$fn){
        $getpaths[$url]=$fn;
    }
    public function ValidateURL(){
        $url=($_SERVER['PATH_INFO']) ?? null;
        $method=$_SERVER['REQUEST_METHOD'];
        if($method=='GET'){
            $fn=$this->getpaths[$url] ?? NULL;
        }

        if($fn){
            call_user_func($fn,$this);
        } else{
            echo "ERROR 404";
        }
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