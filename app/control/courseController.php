<?php

require_once("Controller.php");

class courseController extends Controller{
    public $case;
    public $course;
    public $caselist = array(
        "APCS" => "APCS專案班",
        "adult" => "高中/成人",
        "junior" => "國小",
        "middle" => "國中",
        "winter" => "寒令營"
    );
    public $courselist = array(
       "APCSAdvanced" => "APCS菁英考照班",
        "APCSBasic" => "APCS零基礎先修班",
        "APCSBasicExam" => "APCS零基礎考照班",
        "AE" =>"AE特效創作班",
        "AI" => "AI平面設計班",
        "CPS" => "C++基礎入門",
        "C" => "C語言基礎入門",
        "DATABASE" => "DATABASE",
        "EXCEL" => "EXCEL基礎班",
        "EXCELAdvanced" => "EXCEL檢定班",
        "HTML+CSS" => "HTML+CSS基礎入門",
        "nodejs" => "node.js",
        "PPT" => "PPT基礎班",
        "PPTAdvanced" => "PPT檢定班",
        "PR" => "PR導演養成班",
        "PS" => "PS影像合成班",
        "python-pygame" => "python-pygame",
        "python-server" => "python-server",
        "python" => "python基礎入門",
        "pythonScreen" => "python視窗應用設計",
        "WORD" => "WORD基礎班",
        "WORDAdvanced" => "WORD檢定班",
        "XAMARIN" => "XAMARIN基礎入門",
        "WD" => "威導影音剪輯班",
        "counseling" => "高中程式暨課業輔導專班",
        "computer" => "電腦技能專修班",
        "APP" =>"APP基礎入門班",
        "EXCEL" =>"EXCEL基礎班",
        "EXCELAdvanced" =>"EXCEL檢定班",
        "Line" =>"Line貼圖設計班",
        "PPT" =>"PPT基礎班",
        "PPTAdvanced" =>"PPT檢定班",
        "PS" =>"PS影像合成班",
        "Python" =>"Python基礎入門班",
        "ROBLOX" =>"ROBLOX遊戲設計班",
        "SCRATCH" =>"SCRATCH積木程式班",
        "WORD" =>"WORD基礎班",
        "WORDAdvanced" =>"WORD檢定班",
        "computer" =>"電腦操作基礎特訓班",
        "APP" =>"APP基礎入門班",
        "PS" =>"PS影像合成班",
        "python" =>"python程式設計",
        "ROBLOX" =>"ROBLOX遊戲設計班",
        "WD" => "威導影音剪輯班",
        "computer" => "電腦技能全修班",
        "HTML-CSS" => "網頁設計班",
        "appinventor2" => "appinventor2"
    );

    public function __construct($case,$course){
        $this->case = $case;
        $this->course = $course;
    }
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
