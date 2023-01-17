<?php

Class signupController extends Controller{

    public function __construct(){
        $this->model = modelBuild("signup");
        $this->view = viewBuild("signup");
        // $signupModel = New signupModel($parentsName,$parentsPhone,$studentName,$studentGrade,$email,$case,$course,$payment,$promotion);
    }
    public function index(){
        $this->layoutPag('signup');
    }

    public function postSignup(){
        //call models postSignup
        
        //call signup 
    
    }
    public function signup(){
        //call models getsignupList
        
        //call view paymentstate
        
    }
}