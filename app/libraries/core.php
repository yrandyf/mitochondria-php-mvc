<?php
/* 
 * Main Core Class of the app
 * Creates URL & Loads Core Controller
 * URL FORMAT - /controller/method.params
 */
 
class Core {
    protected $currentController = "Pages";
    protected $currentMethod = "index";
    protected $parameters = [];

    public function __construct()
    {
        // print_r($this->getUrl());
        $url = $this->getUrl();

        // Look inside controllers for first values
        if (isset($url[0]) && file_exists('../app/controllers/'.ucwords($url[0]).'.php')) {
            // If exists set it as current controller
            $this->currentController = ucwords($url[0]);
            unset($url[0]);
        }
        // Require the controller
        require_once '../app/controllers/'.$this->currentController.'.php';

        // Instantiations of the controller
        $this->currentController = new $this->currentController;

        // Check for second part of URL
        if (isset($url[1])) {
            // Check to see if method exists in controller
            if (method_exists($this->currentController, $url[1])){
                $this->currentMethod = $url[1];
                unset($url[1]);
            }
        }

        // get params
        $this->parameters = isset($url) ? array_values($url) : [];

        // Call a callback with array of params
        call_user_func_array([$this->currentController, $this->currentMethod], $this->parameters);
    }

    public function getUrl(){
        if(isset($_GET["url"])){
            $url = rtrim($_GET["url"],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/',$url);
            return $url;
        }
    }
}