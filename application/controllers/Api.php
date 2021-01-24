<?php

class Api extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Rooms_model', 'rooms');
		$this->load->model('Students_model', 'stud');
		$this->load->model('AccomodatedIncollege_model', 'incollege');
		$this->load->model('AccomodatedOutside_model', 'outcollege');
	}

	function login()
	{
		$user = $this->stud->studentLogin();
		if (count($user) == 0) {
			$feed = array('status' => 'fail', 'message' => 'Wrong username or password', 'user_info' => array());
		} else $feed = array("status" => "ok", "user_info" => $user[0]);
		$this->output->set_content_type('application/json');
		$this->output->set_output(json_encode($feed));
	}
	function signup()
	{
		$user = $this->stud->save();
		if ($user == 0) {
			$feed = array('status' => 'fail', 'message' => 'Failed to create account', 'user_info' => array());
		} else $feed = array("status" => "ok", "user_info" => $this->stud->getBy("id",$user)[0]);

		$this->output->set_content_type('application/json');
		$this->output->set_output(json_encode($feed));
	}

	public function student_reservation($student)
	{
		$this->output->set_content_type('application/json');
		$query = $this->db->query('select acin.*,s.phone,s.names,s.regno,r.names as room from accomodated_incollege acin inner join students s on s.id=acin.student_id inner join rooms r on r.id=acin.room_id WHERE s.id=?', array($student));
		$data = $query->result_array();

		$this->output->set_output(json_encode($data));
	}

	public function student_declaration($student)
	{
		$this->output->set_content_type('application/json');
		$query = $this->db->query('select aco.*,s.names,s.phone from accomodated_outside aco inner join students s on s.id=aco.student_id WHERE s.id=?', array($student));
		$data = $query->result_array();
		$this->output->set_output(json_encode($data));
	}

	public function reserve()
	{
		$res = array("status" => 'ok', 'message' => "successful registered", "id" => 0);
		$feed = $this->incollege->save();
		if ($feed != 0) {
			$res['message'] = "Room reserved successful";
			$res['id'] = $feed;
		} else
			$res['message'] = "Failed to reserve room";

		$this->output->set_content_type('application/json');
		$this->output->set_output(json_encode($res));
	}

	public function declaration()
	{
		$res = array("status" => 'ok', 'message' => "successful registered", "id" => 0);
		$feed = $this->outcollege->save();
		if($feed = "student not exist"){
			$res['status'] = 'fail';
			$res['message'] = "Student does not exist";
		}
		elseif ($feed != 0) {
			$res['message'] = "Accomodation declaration successful registered";
			$res['id'] = $feed;
		} else{
			$res['status'] = 'fail';
			$res['message'] = "Failed to declare accomodation";
		}
		$this->output->set_content_type('application/json');
		$this->output->set_output(json_encode($res));
	}
}

?>
