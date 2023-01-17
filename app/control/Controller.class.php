<?php
class Controller{
    //load model
    public function modelBuild($model){
        require_once 'app/models/'.$model.'Model.class.php';
        return new $model();
    }

    public function viewBuild($view, array $data = []){
        // if(file_exists('app/views/'.$view.'View.class.php')){
        require 'app/views/'.$view.'View.class.php';

        // }
        // else{
        //     die('View does not exist app/views/'.$view .'View.class.php');
        // }
    }
}