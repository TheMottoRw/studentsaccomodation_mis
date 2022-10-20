<?php
class Outside extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('AccomodatedOutside_model','outside');
    }
    public function register(){
        $feed = $this->outside->save();

		if($feed=="student not exist") $this->session->set_flashdata("response","<div class='alert alert-danger'>Student not exist</div>");
		elseif($feed!=0) $this->session->set_flashdata("response","<div class='alert alert-success'>Your accomodation declaration registered successful</div>");
		else $this->session->set_flashdata("response","<div class='alert alert-danger'>Failed to save declaration of your accomodation</div>");
		if($_SESSION['category']=='Administrator'){
			header("location:../v/declaration");
		}else{
			header("location:../v/stddeclaration");
		}

	}
    public function load(){
        $this->output->set_content_type('application/json');
        $data = $this->outside->get_data();
        $this->output->set_output(json_encode($data));
    }

	public function dashboard(){
		$this->output->set_content_type('application/json');
		$data = $this->outside->dashboard();
		$this->output->set_output(json_encode($data));
	}

    public function update($id){
        $feed = $this->outside->update($id);

		if($feed!=0) $this->session->set_flashdata("response","<div class='alert alert-success'>Your declaration updated successful</div>");
		else $this->session->set_flashdata("response","<div class='alert alert-danger'>Failed to update declaration of your accomodation</div>");
		header("location:../v/declaration");

	}

	public function status($id,$status){
		$feed = $this->outside->status($id,$status);

		if($feed=="ok") $this->session->set_flashdata("response","<div class='alert alert-success'>Declaration status changed successful</div>");
		else $this->session->set_flashdata("response","<div class='alert alert-danger'>Failed to update declaration status</div>");
		header("location:../../../v/declaration");
	}

    public function delete($id){
        $feed = $this->outside->delete($id);
        if($feed!=0) header("location:../../v/declaration");
        else echo "Failed to delete your accomodation";
    }
}
?>
