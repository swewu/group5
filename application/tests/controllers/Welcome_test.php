<?php
/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */

class Welcome_test extends TestCase
{
	public function test_index()
	{
		$output = $this->request('GET', 'welcome/index');
		$this->assertContains('<title>Welcome to CodeIgniter</title>', $output);
	}
	public function getData(){
		$course = $this-> getCourse();
		$data['course'] = $course;
	    $this->load->view('Course',$data);
	}
	public function getCourse(){
		$this->load->model('User_model');
		$result = $this->User_model->getCourse();
		return $result;
	}

}
