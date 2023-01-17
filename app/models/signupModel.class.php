<?php 
include("dbconfig.php");

class signupModel{
    private $db; 

    public function __construct($parentsName,$parentsPhone,$studentName,$studentGrade,$email,$case,$course,$payment,$promotion){
        $this->parentsName = $parentsName;
        $this->parentsPhone = $parentsPhone;
        $this->studentName = $studentName;
        $this->studentGrade = $studentGrade;
        $this->email = $email;
        $this->case = $case;
        $this->course = $course;
        $this->payment = $payment;
        $this->promotion =$promotion;

        $this->db = new dbconfig;
    }
   
    public function sendNewSignup(){
        $query = 'insert into biz_signup() values("'.$this->parentsName.'","'.$this->parentsPhone.'","'.$this->studentName.'","'.$this->studentGrade.'","'.$this->case.'","'.$this->course.'","'.$this->payment.'")';
        return $query;
        // $this->db->sendQuery($query);
        // if($query){
        //     return true;
        // }
        // else{
        //     return false;
    }
    public function checkPromotion(){
        $query = 'select'.$this->promotion.' from biz_promotionlist where promotion_key="'.$this->promotion.'" and used!=1';
        // if($query){
        //     return true;
        // }
        // else{
        //     return false;
        // }
        // $this->db->getAllData("biz_sighup");
    }

    
    public function getAllSignup(){
        // $this->db->getAllData("biz_sighup");
    }
}

