<?php
class Helper extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Students_model','student');
    }

    public function login(){
        $logData = $this->student->login();
        if(count($logData) == 1){
            $this->session->set_userdata(array(
                'userid'=>1,
                'category'=>'Administrator',
            ));
            header("location:../v/students");
        } else echo "Wrong username or password";
    }

    public function logout(){
        session_destroy();
        header("location:../v");
    }
}
?>