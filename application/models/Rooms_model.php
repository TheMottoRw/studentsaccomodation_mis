<?php
class Rooms_model extends CI_Model{
    public $variable;

    public function __construct(){
        parent::__construct();
    }
    function save(){
        $name = $this->input->post('names');
        $description = $this->input->post('description');
        $gender = $this->input->post('gender');
        $host = $this->input->post('host');
        $gender = $this->input->post('gender');
        $sql = "INSERT INTO rooms SET names=?,description=?,gender=?,host=?";
        $query = $this->db->query($sql,array($name,$description,$gender,$host));
        return $this->db->insert_id();
    }
    public function get_data(){
        $query = $this->db->get('rooms',50);
        return $query->result_array();
    }
    public function getBy($field,$value){
        $query = $this->db->select("*")
                         ->where($field,$value)
                         ->get('rooms');
        return $query->result_array();
    }

    function update($id){
        $name = $this->input->post('names');
        $description = $this->input->post('description');
        $gender = $this->input->post('gender');
        $host = $this->input->post('host');
        $gender = $this->input->post('gender');
        $sql = "UPDATE rooms SET names=?,description=?,gender=?,host=? WHERE id=?";
        $query = $this->db->query($sql,array($name,$description,$gender,$host,$id));
        return $query;
    }
    public function delete($id){
        $affId = $this->db->delete('rooms','id='.$id);
        return $affId;
    }
}
?>