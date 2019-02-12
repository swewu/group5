<?php
public function getCourse(){
    $sql =  "SELECT*FORM course ";
    $query = $this -> db -> query($sql);
    return $query;
}
?>