<?php
class Helper extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Students_model','student');
        $this->load->model('Admin_model','admin');
    }

    public function login(){
    	$this->admin->adminExistance();
        $logData = $this->student->login();
        if(count($logData) == 1){
            $this->session->set_userdata(array(
                'userid'=>1,
                'category'=>'Administrator',
            ));
            header("location:../v/students");
        } else {
        	$this->session->set_flashdata("response","<div class='alert alert-danger'>Wrong username or password</div>");
			header("location:".$_SERVER['HTTP_REFERER']);
        }
    }

    public function logout(){
        session_destroy();
        header("location:../v");
    }
    public function adminExistance(){

	}

}
?>
