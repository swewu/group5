<?php
class Usermodel extends CI_Model{
  
public function getCourse(){
    $sql =  "SELECT*FORM course ";
    $query = $this -> db -> query($sql);
    return $query;
}

 public function gethistory(){
     $sql = "SELECT*FORM historygrade";
     $query = $this->db->query($sql);
     return $query;
    
 }


}

