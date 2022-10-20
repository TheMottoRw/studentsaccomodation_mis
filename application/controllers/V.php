<?php
class V extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Rooms_model','rooms');
        $this->load->model('Students_model','student');
        $this->load->model('AccomodatedOutside_model','outside');
        $this->load->model('AccomodatedIncollege_model','incollege');
    }
    public function index(){
        $this->load->view('includes/header',array('title'=>'index'));
        $this->load->view('index',array('title'=>'index'));
        $this->load->view('includes/footer');
    }
    public function signup(){
        $this->load->view('includes/header',array('title'=>'Student registration'));
        $this->load->view('signup',array('title'=>'index'));
        $this->load->view('includes/footer');
    }

    public function rooms(){
        $this->load->view('includes/header',array('title'=>'index'));
        $this->load->view('menu_adheader');
        $this->load->view('rooms',array('title'=>'Accomodation rooms','data'=>$this->rooms->get_data()));
        $this->load->view('includes/footer');
    }

    public function students(){
        $this->load->view('includes/header',array('title'=>'index'));
        $this->load->view('menu_adheader');
        $this->load->view('students',array('title'=>'Accomodation students','data'=>$this->student->get_data()));
        $this->load->view('includes/footer');
    }

    public function declaration(){
        $this->load->view('includes/header',array('title'=>'index'));
        $this->load->view('menu_adheader');
        $this->load->view('declaration',array('title'=>'Accomodation declaration','data'=>$this->outside->get_data()));
        $this->load->view('includes/footer');
    }


    public function reservation(){
        $this->load->view('includes/header',array('title'=>'index'));
        $this->load->view('menu_adheader');
        $this->load->view('reservation',array('title'=>'Accomodation reservation','data'=>$this->incollege->get_data(),'rooms'=>$this->rooms->get_data()));
        $this->load->view('includes/footer');
    }
	public function dashboard(){
		$this->load->view('includes/header',array('title'=>'index'));
		$this->load->view('menu_adheader');
		$this->load->view('dashboard',array('title'=>'Accomodation dashboard','data'=>$this->outside->dashboard()));
		$this->load->view('includes/footer');
	}

	public function stddeclaration(){
		$this->load->view('includes/header',array('title'=>'index'));
		$this->load->view('menu_stdheader');
		$this->load->view('declaration',array('title'=>'Accomodation declaration','data'=>$this->outside->get_data()));
		$this->load->view('includes/footer');
	}


	public function stdreservation(){
		$this->load->view('includes/header',array('title'=>'index'));
		$this->load->view('menu_stdheader');
		$this->load->view('reservation',array('title'=>'Accomodation reservation','data'=>$this->incollege->get_data(),'rooms'=>$this->rooms->get_data()));
		$this->load->view('includes/footer');
	}
}

?>
