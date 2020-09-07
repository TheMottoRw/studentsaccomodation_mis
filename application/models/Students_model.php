<?php
class Students_model extends CI_Model{
    public $variable;

    public function __construct(){
        parent::__construct();
    }
    
    function login(){
        // echo base64_encode('12345');exit;
        $phone = $this->input->post('phone');
        $password = $this->input->post('password');
        $sql = "SELECT * FROM administrators WHERE phone=? and password=?";
        $query = $this->db->query($sql,array($phone,base64_encode($password)));
        return $query->result_array();
    }

    function save(){
        $name = $this->input->post('names');
        $phone = $this->input->post('phone');
        $regno = $this->input->post('regno');
        $nid = $this->input->post('nid');
        $gender = $this->input->post('gender');
        $department = $this->input->post('department');
        $password = $this->input->post('password');
        $sql = "INSERT INTO students SET names=?,phone=?,regno=?,nid=?,gender=?,department=?,password=?";
        $query = $this->db->query($sql,array($name,$phone,$regno,$nid,$gender,$department,base64_encode($password)));
        return $this->db->insert_id();
    }
    function get_data(){
        $query = $this->db->get('students',5);
        return $query->result_array();
    }
    function getBy($field,$val){
        $query = $this->db->select('*')
                          ->where($field,$val)
                          ->get('students');
        return $query->result_array();
    }

    function update($id){
        // $id = $this->input->post('id');
        $name = $this->input->post('names');
        $phone = $this->input->post('phone');
        $regno = $this->input->post('regno');
        $nid = $this->input->post('nid');
        $gender = $this->input->post('gender');
        $department = $this->input->post('department');
        $password = $this->input->post('password');
        $sql = "UPDATE students SET names=?,phone=?,regno=?,nid=?,gender=?,department=?,password=? WHERE id=?";
        $query = $this->db->query($sql,array($name,$phone,$regno,$nid,$gender,$department,base64_encode($password),$id));
        return $query;
    }
    public function delete($id){
        $this->db->delete('students','id='.$id);
        return 'ok';
    }
}
?>