<?php
    $i=1;
      foreach($Course->result() as $row){
          echo '<tr>';
          echo '<td>'.$row->courseid.'</td>';
          echo '<td>'.$row->coursename.'</td>';
          echo '</tr>';
          $i++;

      }
    ?>