<?php
require_once "../header.php";
require_once "../../db.php";
$select = "SELECT * FROM counters";
$select_result = mysqli_query($db_connect,$select);
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Counters List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Sl</th>
                            <th>Icon</th>
                            <th>Number</th>
                            <th>Description</th>
                            
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($select_result as $key=>$counter) {?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$counter['icon']?></td>
                            <td><?=$counter['number']?></td>
                            <td><?=$counter['desp']?></td>
                           
                            <td>
                                <a href="counter_status.php?id=<?=$counter['id']?>" class="btn <?=($counter['status']==1?'btn-success': 'btn-secondary')?>"><?=($counter['status']==1?'Active': 'Deactive')?></a>
                            </td>
                            <td width="200">
                                <a href="edit_counter.php?id=<?=$counter['id']?>" class="btn btn-info">Edit</a>
                                <a href="delete_counter.php?id=<?=$counter['id']?>" class="btn btn-danger">DELETE</a>
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