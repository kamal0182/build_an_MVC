<?php 
namespace app\Core;

use app\Core\Request as CoreRequest;
use app\Core\Response as CoreResponse;
use Request;
use Response;

class Router {
    public CoreRequest $request ;
    public CoreResponse $response ;
    protected array $routes ;
    public function __construct(CoreRequest $request , CoreResponse $response) {
        $this->request = $request ;
        $this->response = $response ;
       
    }
    public function get($path,$callback){
        $this->routes['get'][$path] = $callback ;
    }
    public function resolve (){
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
   
        $callback = $this->routes[$method][$path] ?? false ;
        if($callback == false){
           $this->response->setStatusCode(404);
           return $this->renderView(404);

        }
        if(is_string($callback))
        {   
            return $this->renderView($callback);
        }
        return  call_user_func($callback);
    }
    public function renderView($View)
    {
      $viewcontent = $this->changeContente($View) ; 
      $layoutcontent = $this->layoutContent();
      return str_replace("{{Content}}" ,$viewcontent ,$layoutcontent);
    }
    protected function layoutContent()
    {
        ob_start();
        include_once application::$root_dir."/views/layouts/main.php";
       return  ob_get_clean() ;
    }
    protected  function changeContente($View)
    {
            ob_start();
            include_once application::$root_dir."/views/$View.php";
           return  ob_get_clean() ;
    }
}

?>