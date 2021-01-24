<?php
class Students extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Students_model','student');
    }
    public function register(){
        $studId = $this->student->save();
        if($studId!=0) header("location:../v/students");
        else echo "Failed to register student";
    }
    public function load(){
        $this->output->set_content_type('application/json');
        $data = $this->student->get_data();
        $this->output->set_output(json_encode($data));
    }

    public function loadby($field,$value){
        $this->output->set_content_type('application/json');
        $data = $this->student->getBy($field,$value);
        $this->output->set_output(json_encode($data));
    }

    public function update($id){
        $feed = $this->student->update($id);
        if($feed!=0) header("location:../../v/students");
        else echo "Failed to update student";
    }

    public function delete($id){
        $feed = $this->student->delete($id);
        if($feed!=1) header("location:../../v/students");
        else echo "Failed to delete student";
    }
}
?>
