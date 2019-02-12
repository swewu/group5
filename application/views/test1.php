<?php foreach($result as $row) { ?>
        <?php if ($row->status == "W") { ?>
        <tr>
            <td><?=$row->courseName ?></td>
            <td><?=$row->status?></td>
            <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
        </tr>
        <?php }else if ($row->status == "F") { ?>
        <tr>
            <td><?=$row->courseName ?></td>
            <td><?=$row->status?></td>
            <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
        </tr>
        <?php }else if ($row->status == "D") { ?>
        <tr>
            <td><?=$row->courseName ?></td>
            <td><?=$row->status?></td>
            <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
        </tr>
        <?php }else { ?>
        <tr>
            <td><?=$row->courseName ?></td>
            <td><?=$row->status?></td>
            <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
        </tr>
        <?php } ?>
    <?php } ?>
    </table>
    </div>