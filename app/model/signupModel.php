<?php 
include("dbconfig.php")

class signupModel{
    private $db; 

    public function __construct($parentsName,$parentsPhone,$studentName,$studentGrade,$case,$course,$payment){
        $this->$parentsName = $parentsName;
        $this->$parentsPhone = $parentsPhone;
        $this->$studentName = $studentName;
        $this->$studentGrade = $studentGrade;
        $this->$case = $case;
        $this->$course = $course;
        $this->$payment = $payment;

        $this->db = new Database;
    }
   
    public function addNewSignup(){
        $query = "insert into biz_signup() values('$parentsName','$parentsPhone','$studentName','$studentGrade','$case','$course','$payment',)"
        $this->db->sendQuery($query);
    }
    public function getAllSignup(){
        // $this->db->getAllData("biz_sighup");
    }
}

