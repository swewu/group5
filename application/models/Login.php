<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Model {

    public function login($username , $password){
        $sql = "SELECT * FROM user WHERE username = ".$username."AND"."password".$password;
        $query = $this->db->query($sql);
        foreach ($query->result() as $row ){
            $_SESSION['username'] = $row->username;
            $_SESSION['password'] = $row->password;
            $_SESSION['login'] = true;
        }
    }
    
}