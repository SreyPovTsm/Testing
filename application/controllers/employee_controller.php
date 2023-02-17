<?php
    // system/application/controllers/hello.php

    class Employee_controller extends CI_Controller {

        // public function __construct()
        // {
        //      parent::__construct();
        //      $this->load->model('model_employee');
        // }
    //    function world() {
    //         echo "Hello CodeIgniter!";
    //     }

    //     function user_test() {

            

    //         $this->tbl_employee->save_Employee('Employ_Name','Employ_Passwd','Created_date');

    //    }
       public function index(){
            // $this->load->view('view_employee');
            $this->load->model('model_employee');
            // echo 'hello';
       }
}

?>