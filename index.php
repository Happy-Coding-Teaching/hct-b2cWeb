<?php
// define
const PATH = __DIR__.'/';
require PATH."app/control/controller.class.php";
require PATH."app/models/model.class.php";

//route
$controller_get = "about";
$controller_action = "index";
if(isset($_POST["current"])&&isset($_POST["action"])){
    $controller_get = $_POST["current"];
    $controller_str = $_POST["current"]."Controller";
    $controller_act = $_POST["action"];
    require "app/control/".$controller_str.".class.php";
    $create_controller = New $controller_str();
    if($_POST["data"]){
        $catch_data = $_POST["data"];
        $create_controller->$controller_act($catch_data);
    }
    else{
        $create_controller->$controller_act();
    }
}
if(isset($_GET["current"])){
    $controller_get = $_GET["current"];
    //create extends controller
    $controller_str = $_GET["current"]."Controller";
    require "app/control/".$controller_str.".class.php";
    $create_controller = New $controller_str();
    if(isset($_GET["action"]) && $_GET["action"]!="layoutpage"){
        $controller_action = $_GET["action"];
        $create_controller->$controller_action();
    }
    //layoutpage
    else{
        $create_controller->layoutpage($controller_get);
    }
}
else if(isset($_GET["page"])){
    $getpage = $_GET["page"];
    $create_controller = New controller();
    $create_controller->layoutpage($getpage);
}
//layout index
else{
    $create_controller = New controller();
    $create_controller->layoutpage("about");
}

