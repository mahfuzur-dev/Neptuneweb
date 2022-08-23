<?php
require_once "../header.php";
require_once "../../db.php";
$select = "SELECT * FROM education";
$select_result = mysqli_query($db_connect,$select);
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Education List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Sl</th>
                            <th>Year</th>
                            <th>Title</th>
                            <th>Percentage</th>
                      
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($select_result as $key=>$education) {?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$education['year']?></td>
                            <td><?=$education['title']?></td>
                            <td><?=$education['percentage']?></td>
                            
                            <td>
                                <a href="education_status.php?id=<?=$education['id']?>" class="btn <?=($education['status']==1?'btn-success': 'btn-secondary')?>"><?=($education['status']==1?'Active': 'Deactive')?></a>
                            </td>
                            <td width="200">
                                <a href="edit_education.php?id=<?=$education['id']?>" class="btn btn-info">Edit</a>
                                <a href="delete_education.php?id=<?=$education['id']?>" class="btn btn-danger">DELETE</a>
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