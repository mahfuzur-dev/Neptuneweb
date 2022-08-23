<?php
require_once "../header.php";
require_once "../../db.php";
$select = "SELECT * FROM about";
$select_result = mysqli_query($db_connect,$select);
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>About List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Sl</th>
                            <th>Sub-Title</th>
                            <th>Title</th>
                            <th>Description</th>
                            
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($select_result as $key=>$about) {?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$about['sub_title']?></td>
                            <td><?=$about['title']?></td>
                            <td><?=$about['desp']?></td>
                            
                            <td>
                                <a href="about_status.php?id=<?=$about['id']?>" class="btn <?=($about['status']==1?'btn-success': 'btn-secondary')?>"><?=($about['status']==1?'Active': 'Deactive')?></a>
                            </td>
                            <td width="200">
                                <a href="edit_about.php?id=<?=$about['id']?>" class="btn btn-info">Edit</a>
                                <a href="delete_about.php?id=<?=$about['id']?>" class="btn btn-danger">DELETE</a>
                            </td>
                        </tr>
                      <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "../footer.php";?>