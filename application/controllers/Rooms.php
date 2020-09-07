<?php
class Rooms extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Rooms_model','room');
    }
    public function register(){
        $studId = $this->room->save();
        if($studId!=0) header("location:../v/rooms");
        else echo "Failed to register room";
    }
    public function load(){
        $this->output->set_content_type('application/json');
        $data = $this->room->get_data();
        $this->output->set_output(json_encode($data));
    }
    public function update($id){
        $feed = $this->room->update($id);
        if($feed!=0) header("location:../../v/rooms");
        else echo "Failed to update rooms";
    }

    public function delete($id){
        $feed = $this->room->delete($id);
        if($feed!=0) header("location:../../v/rooms");
        else echo "Failed to delete room";
    }
}
?>