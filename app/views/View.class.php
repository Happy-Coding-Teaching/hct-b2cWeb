<?php

class View{
    public function setTemplate($page){
        require 'app/template/header.php';
        require 'app/template/'.$view.'.php';
        require 'app/template/footer.php';
    } 
}
