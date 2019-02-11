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
		$this->load->view('Course');
		$this->load->view('Script');
	}
	public function checkLogin(){
		$id  = isset($_GET['username'])?$_GET['username']:"";
		$pass = isset($_GET['password'])?$_GET['password']:"";
		$this->load->model('UserModel');
		$result = $this->UserModel->checkLogin($id,$pass);
		if($result){
			if($_SESSION['role'] == 1){
				redirect('Welcome/student');
			}else if($_SESSION['role'] == 2){
				redirect('Welcome/teacher');
			}
			
			
		}
			
	}
	public function login(){
		$this->load->view("Login/Contents");
	}
	

}
