<?php

require_once("Controller.php");

class courseView extends View {

    public function layoutCourse(){
        echo'<img style="width:100%;max-width:1320px" src=assets/img/DM/'.$this->case.'/'.$this->course.".jpg>";   
    }
    public function showCaseName(){
        echo'<option value="'.$this->case.'"selected >'.$this->caselist["$this->case"].'</option>';
    } 
    public function showCourseName(){
        echo'<option value="'.$_GET["course"].'"selected >'.$this->courselist["$this->course"].'</option>';
    }
    
}
