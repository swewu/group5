<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends BD_Controller {
    function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }
    public function login_post()
    {
        $username = $this->post('username'); //Username Posted
        $password = $this->post('password'); //Pasword Posted
        $isCheck = $this->Login->login($username, $password);

        if($isCheck == true){
            echo "1";
        }
        else{
            echo"2";
        }
    }
}