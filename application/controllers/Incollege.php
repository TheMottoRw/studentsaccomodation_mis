<?php
class Incollege extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('AccomodatedIncollege_model','incollege');
    }
    public function register(){
        $feed = $this->incollege->save();
        if($feed!=0) header("location:../v/reservation");
        else echo "Failed to reserve room";
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
        
        if($feed!=0) header("location:../../v/reservation");
        else echo "Failed to update room reservation";
    }

    public function delete($id){
        $feed = $this->incollege->delete($id);
        if($feed ==1) header("location:../../v/reservation");
        else echo "Failed to delete room reservation";
    }
}
?>