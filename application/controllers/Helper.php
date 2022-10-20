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
                'userid'=>$logData[0]['id'],
                'category'=>'Administrator',
				'names'=>$logData[0]['names'],
            ));
            header("location:../v/students");
        } else {
			$logData = $this->student->studentLogin();
			if (count($logData) == 1) {
				$this->session->set_userdata(array(
					'userid' => $logData[0]['id'],
					'category' => 'Student',
					'names' => $logData[0]['names'],
				));
				header("location:../v/stdreservation");
			} else {
				$this->session->set_flashdata("response", "<div class='alert alert-danger'>Wrong username or password</div>");
				header("location:" . $_SERVER['HTTP_REFERER']);
			}
		}
    }

    public function logout(){
        session_destroy();
        header("location:".base_url()."index.php/v");
    }
    public function adminExistance(){

	}

}
?>
