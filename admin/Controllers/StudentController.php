<?php

namespace Controllers;

use Models\StudentModel;

class StudentController extends BaseController
{
    public function __construct()
    {
        $this->loadModel('StudentModel');
        $this->StudentModel = new StudentModel();
    }
    public function index(){
        $infoStudents = $this->StudentModel->getAllStudent();
        return $this->view('student.SinhVien', ['infoStudents'=> $infoStudents]);
    }
}