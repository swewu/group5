<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ShowData</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <table class="table table-bordered ">
    <tr class="Active">
        <td>รหัสนักศึกษา</td>
        <td>ชื่อนักศึกษา</td>
        <td>รหัสวิชา</td>
        <td>ชื่อวิชา</td>
        <td>เทอม</td>
        <td>ปีการศึกษา</td>
        <td>เกรด</td>
    </tr>
    <?php
    $i=1;
    foreach ($history->$result as $r) {
        echo "<tr>";
         echo "<td>".$r->studentid."</td>";
         echo "<td>".$r->studentname."</td>";
         echo "<td>".$r->courseid."</td>";
         echo "<td>".$r->coursename."</td>";
         echo "<td>".$r->term."</td>";
         echo "<td>".$r->yaer."</td>";
         echo."<td>".$r->grade."</td>";

         echo "<td><a href='".base_url()."historyid/de_form/his/".$r->studentname"' class='btn btn-warning'>Delete</a></td>";
         echo "<td><a href='".base_url()."historyid/edit_form/his/".$r->studentname"' class='btn btn-warning'>Edit</a></td>"; 

     echo "</tr>";
     $i++;
    }
    ?>
    </table>
    
</body>
</html>