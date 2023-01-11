<?php

Class signupController extends Controller{

    public function __construct(){
        $parentsName = $_POST["parentsName"];
        $parentsPhone = $_POST["parentsPhone"];
        $studentName = $_POST["studentName"];
        $studentGrade = $_POST["studentGrade"];
        $case = $_POST["case"];
        $course = $_POST["course"];
        $payment = $_POST["payment"];

        $signupModel = New signupModel($parentsName,$parentsPhone,$studentName,$studentGrade,$case,$course,$payment);
    }

}



