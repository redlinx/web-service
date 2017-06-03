<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class student extends CI_Controller {
	
	
	public function index(){
		$this->load->model('Ws_client');
		$student_list['student'] = $this->Ws_client->getStudentInfo();
		$this->load->view('student_info',$student_list);

	}

	public function insertStudentInfo(){

		if(isset($_POST['fname']) AND isset($_POST['lname'])){
			$studentInfo[0] = $_POST['fname'];
			$studentInfo[1] = $_POST['lname'];
			$studentInfo[2] = $_POST['bday'];
			$studentInfo[3] = $_POST['mobile'];
			$studentInfo[4] = $_POST['home_address'];

			$this->load->model('Ws_client');
			$this->Ws_client->inStudentInfo($studentInfo);		
		}
		$this->load->helper('url');
		redirect('/student/','auto',301);
	}

}
?>