<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function student()
	{
		$this->load->view('Students/Contents');
	}
	public function Course()
	{
		$this->load->view('Course/Contents');
		// $this->load->view('Script');
	}
	public function checkLogin(){
		$id  = isset($_GET['username'])?$_GET['username']:"";
		
		$pass = isset($_GET['password'])?$_GET['password']:"";
		$this->load->model('UserModel');
		$result = $this->UserModel->Login($id,$pass);
		if($result){
			// echo($_SESSION['role']);
			
			if($_SESSION['role'] == "นักศึกษา"){
				
				redirect('Welcome/student');
			}else if($_SESSION['role'] == "อาจารย์"){
				redirect('Welcome/teacher');
			}
			
			
		}
			
	}
	public function login(){
		$this->load->view("Login/Contents");
	}
	public function insert(){
		$studentname  = isset($_GET['studentname'])?$_GET['studentname']:"";
		$studentlastname  = isset($_GET['studentlastname'])?$_GET['studentlastname']:"";
		$courseid  = isset($_GET['courseid'])?$_GET['courseid']:"";
		$coursename  = isset($_GET['coursename'])?$_GET['coursename']:"";
		$term  = isset($_GET['term'])?$_GET['term']:"";
		$year  = isset($_GET['year'])?$_GET['year']:"";
		$grade  = isset($_GET['grade'])?$_GET['grade']:"";
		$status  = 2;
		// $pass = isset($_GET['password'])?$_GET['password']:"";
		$this->load->model('UserModel');
		$result = $this->UserModel->insert($studentname, $studentlastname, $courseid, $coursename, $term, $year, $grade, $status);
		if($result){
			echo "Success";
			return alert("success");
			
			
		}
			
	}

	public function delete(){
		$historyid  = isset($_GET['historyid'])?$_GET['historyid']:"";
		// $pass = isset($_GET['password'])?$_GET['password']:"";

		$this->load->model('UserModel');
		$isCheck = $this->UserModel->check($historyid);
		if($isCheck == false){
			$result = $this->UserModel->delete($historyid);
			if($result == true){
				echo "Success";
				return alert("success");
				
				
			}
		}
		
			
	}
	public function update(){
		$historyid  = isset($_GET['historyid'])?$_GET['historyid']:"";
		$studentname  = isset($_GET['historyid'])?$_GET['historyid']:"";
		$courseid  = isset($_GET['historyid'])?$_GET['historyid']:"";
		$coursname  = isset($_GET['historyid'])?$_GET['historyid']:"";
		$term  = isset($_GET['historyid'])?$_GET['historyid']:"";
		$year  = isset($_GET['historyid'])?$_GET['historyid']:"";
		$studentid  = isset($_GET['historyid'])?$_GET['historyid']:"";
		// $pass = isset($_GET['password'])?$_GET['password']:"";

		$this->load->model('UserModel');
		$isCheck = $this->UserModel->check($historyid);
		if($isCheck == false){
			$result = $this->UserModel->delete($historyid);
			if($result == true){
				echo "Success";
				return alert("success");
				
				
			}
		}
		
			
	}
	public function showdata(){
		$studentid = $_SESSION['userid'];
		$this->load->model('UserModel');
		$result = $this->UserModel->display($studentid);
		$data = [
			'result' => $result
		];
		$this->load->view("Course/Contents",$data);

	}

	
	

}
