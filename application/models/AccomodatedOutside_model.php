<?php
class AccomodatedOutside_model extends CI_Model{
    public $variable;

    public function __construct(){
        parent::__construct();
        $this->load->model('Students_model','stud');
    }
    function save(){
        //get student id from regno
        $student_id = 0;
        $studRegno = $this->input->post('regno');
        $studentInfo = $this->stud->getBy('regno',$studRegno);
//        echo json_encode($studentInfo);exit;

        if(count($studentInfo) == 0) return 'student not exist';
        else $student_id = $studentInfo[0]['id'];

        $landname = $this->input->post('landname');
        $landphone = $this->input->post('landphone');
        $landnid = $this->input->post('landnid');
        $house_no = $this->input->post('house_no');
        $district = $this->input->post('district');
        $sector = $this->input->post('sector');
        $cell = $this->input->post('cell');
        $village = $this->input->post('village');
        $level_class = $this->input->post('level_class');
        $academic_year = $this->input->post('academic_year');
        $sql = "INSERT INTO accomodated_outside SET student_id=?,landlord_name=?,landlord_phone=?,landlord_nid=?,house_no=?,district=?,sector=?,cell=?,village=?,academic_year=?,level_class=?";
        $query = $this->db->query($sql,array($student_id,$landname,$landphone,$landnid,$house_no,$district,$sector,$cell,$village,$academic_year,$level_class));
		return $this->db->insert_id();
    }
    function get_data(){
        $query = $this->db->query('select aco.*,s.names,s.phone from accomodated_outside aco inner join students s on s.id=aco.student_id');
        return $query->result_array();
    }

    function update($id){
        $roomid = $this->input->post('room_id');
        $student_id = $this->input->post('student_id');
        $landname = $this->input->post('landname');
        $landphone = $this->input->post('landphone');
        $landnid = $this->input->post('landnid');
        $house_no = $this->input->post('house_no');
        $district = $this->input->post('district');
        $sector = $this->input->post('sector');
        $cell = $this->input->post('cell');
        $village = $this->input->post('village');
        $level_class = $this->input->post('level_class');
        $academic_year = $this->input->post('academic_year');
        $sql = "UPDATE accomodated_outside SET room_id=?,student_id=?,landlord_name=?,landlord_phone=?,landlord_nid=?,house_no=?,district=?,sector=?,cell=?,village=?,academic_year=?,level_class=? WHERE id=?";
        $query = $this->db->query($sql,array($roomid,$student_id,$landname,$landphone,$landnid,$house_no,$district,$sector,$cell,$village,$academic_year,$level_class,$id));
        return 'ok';
    }
    public function status($id,$status){
		$sql = "UPDATE accomodated_outside SET status=? WHERE id=?";
		$query = $this->db->query($sql,array($status,$id));
		return "ok";
	}
    public function delete($id){
        $feed = $this->db->delete('accomodated_outside','id='.$id);
        return $feed;
    }
    public function dashboard(){
    	$students = $this->db->query("SELECT * FROM students");
    	$countStudents = count($students->result_array());
		$reservation = $this->db->query("SELECT * FROM accomodated_incollege");
		$countReservation = count($reservation->result_array());
		$declaration = $this->db->query("SELECT * FROM accomodated_outside");
		$countDeclaration = count($students->result_array());

		$declarationReview = $this->db->query("SELECT * FROM accomodated_outside WHERE status='pending'");
		$countDeclarationReview = count($declarationReview->result_array());
		$declarationApproved = $this->db->query("SELECT * FROM accomodated_outside WHERE status='approved'");
		$countDeclarationApproved = count($declarationApproved->result_array());
		$declarationRejected = $this->db->query("SELECT * FROM accomodated_outside WHERE status='rejected'");
		$countDeclarationRejected = count($declarationRejected->result_array());
		return ['students'=>$countStudents,'reservation'=>$countReservation,'declaration'=>['all'=>$countDeclaration,'inreview'=>$countDeclarationReview,'approved'=>$countDeclarationApproved,'rejected'=>$countDeclarationRejected]];
	}
}
?>
