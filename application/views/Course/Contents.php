<div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
    <!-- <a href="http://localhost/group4/index.php/Subject/add" class="btn btn-primary btn-xs pull-right"><b>+</b> เพิ่มรายวิชา</a> -->
        <tr>
            <!-- <th>รหัสนักศึกษา</th> -->
            <!-- <th>ลำดับ</th> -->
            <th>ชื่อวิชา</th>
            <th>สถานะ</th>
            <th class="text-center">แก้ไขข้อมูล</th>
        </tr>
    </thead>
    <?php foreach($result as $row) { ?>
        <?php if ($row->status == "W") { ?>
        <tr>
            <td><?=$row->coursename ?></td>
            <td><?=$row->status?></td>
            <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
        </tr>
        <?php }else if ($row->status == "F") { ?>
        <tr>
            <td><?=$row->coursename ?></td>
            <td><?=$row->status?></td>
            <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
        </tr>
        <?php }else if ($row->status == "D") { ?>
        <tr>
            <td><?=$row->coursename ?></td>
            <td><?=$row->status?></td>
            <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
        </tr>
        <?php }else { ?>
        <tr>
            <td><?=$row->coursename ?></td>
            <td><?=$row->status?></td>
            <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
        </tr>
        <?php } ?>
    <?php } ?>
    </table>
    </div>
</div>