<?php

class AccomodatedIncollege_model extends CI_Model
{
	public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Rooms_model', 'rooms');
		$this->load->model('Students_model', 'stud');
	}

	function save()
	{
		$roomid = $this->input->post('room_id');
		$academic_year = $this->input->post('academic_year');
		$level_class = $this->input->post('level_class');
		//get student id from regno
		$student_id = 0;
		$studRegno = $this->input->post('regno');
		$studentInfo = $this->stud->getBy('regno', $studRegno);

		if (count($studentInfo) == 0) return 'student not exist';
		else {
			$student_id = $studentInfo[0]['id'];
			//get room available
			$totalHost = $this->rooms->getBy('id', $roomid)[0]['host'];
			if ($totalHost <= $this->bedReserved($roomid, $academic_year)) {
				$this->session->set_flashdata("response", "<div class='alert alert-danger'>No bed available for selected room</div>");
				return 0;
			}

			$sql = "INSERT INTO accomodated_incollege SET room_id=?,student_id=?,academic_year=?,level_class=?";
			$query = $this->db->query($sql, array($roomid, $student_id, $academic_year, $level_class));

		}
		return $this->db->insert_id();
	}

	function get_data()
	{
		// $query = $this->db->get("accomodated_incollege',50);
		if ($_SESSION['category'] == 'Student') {
			$query = $this->db->query('select acin.*,s.phone,s.names as student,s.regno,r.names as room from accomodated_incollege acin inner join students s on s.id=acin.student_id inner join rooms r on r.id=acin.room_id WHERE acin.student_id="'.$_SESSION['userid'].'" limit 50');
		}else{
			$query = $this->db->query('select acin.*,s.phone,s.names as student,s.regno,r.names as room from accomodated_incollege acin inner join students s on s.id=acin.student_id inner join rooms r on r.id=acin.room_id limit 50');
		}
		return $query->result_array();
	}

	function bedReserved($roomid, $acYear)
	{
		$query = $this->db->select('*')
			->where('room_id', $roomid)
			->where('academic_year', $acYear)
			->get('accomodated_incollege');
		return count($query->result_array());
		//  return 9;
	}

	function available($acYear)
	{

		$query = $this->db->query('select * from ( select r.id,r.names,r.host,count(acin.id) as reserved,(r.host-count(acin.id)) as available from rooms r 
                                    left join accomodated_incollege acin on acin.room_id=r.id and academic_year=?
                                     group by r.id) al where available>0', array($acYear));
		// return array('total_host'=>$totalHost,'reserved'=>$reserved,'remaining'=>$totalHost-$reserved);
		return $query->result_array();
	}

	function update($id)
	{
		$roomid = $this->input->post('room_id');
		//get student id from regno
		$student_id = 0;
		$studRegno = $this->input->post('regno');
		$studentInfo = $this->stud->getBy('regno', $studRegno);

		if (count($studentInfo) == 0) return 'student not exist';
		else $student_id = $studentInfo[0]['id'];

		$academic_year = $this->input->post('academic_year');
		$level_class = $this->input->post('level_class');
		$sql = "UPDATE accomodated_incollege SET room_id=?,student_id=?,academic_year=?,level_class=? WHERE id=?";
		$query = $this->db->query($sql, array($roomid, $student_id, $academic_year, $level_class, $id));
		return $query;
	}

	public function delete($id)
	{
		$feed = $this->db->delete('accomodated_incollege', 'id=' . $id);
		return $feed;
	}
}

?>
