<?php
class Incollege extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('AccomodatedIncollege_model','incollege');
    }
    public function register(){
        $feed = $this->incollege->save();
        if($feed!=0) $this->session->set_flashdata("response","<div class='alert alert-success'>Room reserved successful</div>");
        else $this->session->set_flashdata("response","<div class='alert alert-danger'>Failed to reserve room</div>");
		header("location:../v/reservation");
    }
    public function load(){
        $this->output->set_content_type('application/json');
        $data = $this->incollege->get_data();
        $this->output->set_output(json_encode($data));
    }

    public function available(){
        $this->output->set_content_type('application/json');
        $data = $this->incollege->available($this->input->get('acyear'));
        $this->output->set_output(json_encode($data));
    }

    public function update($id){
        $feed = $this->incollege->update($id);

		if($feed!=0) $this->session->set_flashdata("response","<div class='alert alert-success'>Room reservation updated successful</div>");
		else $this->session->set_flashdata("response","<div class='alert alert-danger'>Failed to update room reservation</div>");
		header("location:../v/reservation");

    }

    public function delete($id){
        $feed = $this->incollege->delete($id);
        if($feed ==1) header("location:../../v/reservation");
        else echo "Failed to delete room reservation";
    }
}
?>
