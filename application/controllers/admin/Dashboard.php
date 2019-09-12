<?php

class Dashboard extends MY_Controller
{
    public function index()
    {

            $this->load->model('model_student');
            $this->load->model('model_teacher');
            $this->load->model('model_classes');
            $this->load->model('model_marksheet');
            $this->load->model('model_accounting');

            $data['countTotalStudent'] = $this->model_student->countTotalStudent();
            $data['countTotalTeacher'] = $this->model_teacher->countTotalTeacher();
            $data['countTotalClasses'] = $this->model_classes->countTotalClass();
            $data['countTotalMarksheet'] = $this->model_marksheet->countTotalMarksheet();

            $data['totalIncome'] = $this->model_accounting->totalIncome();
            $data['totalExpenses'] = $this->model_accounting->totalExpenses();
            $data['totalBudget'] = $this->model_accounting->totalBudget();
            $data['title'] ="Dashboard";

//        if($page == 'admin/login') {
//            $this->isLoggedIn();
//            $this->load->view($page, $data);
//        }
//        else{
            $this->isNotLoggedIn();
           // var_dump($page, $data);die;
            $this->load->view('admin/templates/header', $data);
            $this->load->view("admin/dashboard", $data);
            $this->load->view('admin/templates/footer', $data);
//        }
    }

}