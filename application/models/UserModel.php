<?php

class UserModel extends CI_Model
{

    public function create($id, $username, $password, $role)
    {
        $data = array(
            'userid' => $id,
            'username' => $username,
            'password' => $password,
            'role' => $role,
        );
        $this->db->insert('user', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    public function Login($id, $pass){
		$sql ="SELECT * FROM user where username = '".$id."' and password = '".$pass."' ";
		// var_dump($sql);
		$query = $this->db->query($sql);
		$result = false;
		if($query){
			foreach ($query->result() as $row ) {
				if($row->password == $pass){
					$_SESSION['login'] = 1;
					$_SESSION['userid'] = $row->userid;
					$_SESSION['username'] = $row->username; 
					$_SESSION['role'] = $row ->role;	
					$result = true;			
				}
			}
        }
        var_dump($result);
		return $result;
    }

    public function insert($studentname, $courseid, $coursename, $term, $year, $grade, $status){
        $data = array(
            'historyid' => null,
            'studentname' => $studentname,
            'studentid' =>$_SESSION['userid'],
            'courseid'=> $courseid,
            'coursename' => $coursename,
            'term' => $term,
            'year' => $year,
            'grade' => $grade,
            'status' => 1

        );
        $this->db->insert('historygrade', $data);
    }

    public function delete($historyid){
        return $this->db->delete('history', array('historyid' => $historyids));
    }
    public function check($historyid){
        $status = 2;
        $sql ="SELECT * FROM history where historyid = '".$historyid."' and status = '".$status."' ";
		// var_dump($sql);
        $query = $this->db->query($sql);
        return $query;
        
    }

    
}
