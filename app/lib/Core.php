<?php


class Core {
    protected $controladorActual = 'Paginas';
    protected $metodoActual = 'index';
    protected $parametros = [];


    public function __construct(){ //Esto lo hacemos para verificar el controlador exista y redirigirlo 
          $url = $this->getUrl();
          //print_r(($this->getUrl()));

          if (!empty($url) && isset($url[0]) && file_exists('../app/controllers/'. ucwords($url[0]). '.php')) {
            
                $this->controladorActual = ucwords($url[0]);
                unset($url[0]);
            }

        require_once '../app/controllers/' . $this->controladorActual . '.php';
        $this->controladorActual = new $this->controladorActual;

        if (!empty($url) && isset($url[1]) && method_exists($this->controladorActual,$url[1])){
                $this->metodoActual = $url[1];
                unset($url[1]);
        }

        //echo $this->metodoActual;

        $this->parametros = $url ? array_values($url): [];
        call_user_func_array([$this->controladorActual,$this->metodoActual], $this->parametros);
   
        }

    

    public function getUrl (){
       
            if (isset($_GET['url'])) { //si esta configurado correctamente
                $url = rtrim($_GET['url'], '/'); //cortar los espacio que tenemos hacia la derecha y el delimitador /
                $url = filter_var($url, FILTER_SANITIZE_URL); // que se interprete la url como una url que los datos sean seguros y los datos sean los que estamos esperando
                $url = explode('/', $url);//string que queremos que verifique
                return $url;
            }
            
        }
        

}



?>