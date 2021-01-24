<?php
class Admin_model extends CI_Model{
	function adminExistance(){
		$data = $this->db->select("*")->get("administrators")->result_array();
		if(count($data) ==0){
		$this->db->query("INSERT INTO administrators SET names=?,phone=?,password=?",array('Ingabire Sandrine','0787274716',base64_encode(12345)));
		}
	}
}
?>
