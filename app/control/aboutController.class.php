<?php

Class aboutController extends Controller{

    public function __construct(){
        
    }
    public function index(){
        $view = new aboutView;
        $this->$view = setTemplate('about');
    }

}
