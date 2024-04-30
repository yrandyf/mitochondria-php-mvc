<?php

/*
 * Base Controller
 * Loads Models and Views
 */

class Controller {
    // Loads model
    public function model($model)
    {
        require_once '../app/models/'.$model.'.php';
        // Instantiation
        return new $model();
    }

    public function view($view, $data = [])
    {
        if (file_exists('../app/views/'.$view.'.php')){
            require_once '../app/views/'.$view.'.php';
        } else {
            die('View does not exist');
        }
    }
}