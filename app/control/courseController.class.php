<?php

require_once("Controller.php");

class courseController extends Controller{
    private $mode;
    private $view;

    public function __construct(){
        $this->model = $this->modelBuild("course");
        $this->view = $this->viewBuild("course");
    }
    public function index(){
        $this->view->setTemplate('course');
    }
    public function showCourseList(){
        echo'<option value="'.$_GET["course"].'"selected >'.$this->courselist["$this->course"].'</option>';
    }
    public function (){
        echo'<img style="width:100%;max-width:1320px" src=assets/img/DM/'.$this->case.'/'.$this->course.".jpg>";   
    }
    public function showCaseName(){
        echo'<option value="'.$this->case.'"selected >'.$this->caselist["$this->case"].'</option>';
    } 

    
}
