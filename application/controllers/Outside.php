<?php
class Outside extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('AccomodatedOutside_model','outside');
    }
    public function register(){
        $feed = $this->outside->save();
        if($feed!=0) header("location:../v/declaration");
        else echo "Failed to save declaration of your accomodation";
    }
    public function load(){
        $this->output->set_content_type('application/json');
        $data = $this->outside->get_data();
        $this->output->set_output(json_encode($data));
    }

    public function update($id){
        $feed = $this->outside->update($id);
        echo $feed;
    }

    public function delete($id){
        $feed = $this->outside->delete($id);
        if($feed!=0) header("location:../../v/declaration");
        else echo "Failed to delete your accomodation";
    }
}
?>