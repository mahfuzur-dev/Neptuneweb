<?php
require_once "../header.php";
require_once "../../db.php";
$select = "SELECT * FROM clients";
$select_result = mysqli_query($db_connect,$select);
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Client List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Sl</th>
                            <th>Description</th>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Client Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($select_result as $key=>$client) {?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$client['desp']?></td>
                            <td><?=$client['name']?></td>
                            <td><?=$client['title']?></td>
                            <td><img width="50" src="../../uploads/client/<?=$client['client_image']?>" alt=""></td>
                            <td>
                                <a href="client_status.php?id=<?=$client['id']?>" class="btn <?=($client['status']==1?'btn-success': 'btn-secondary')?>"><?=($client['status']==1?'Active': 'Deactive')?></a>
                            </td>
                            <td width="200">
                                <a href="edit_client.php?id=<?=$client['id']?>" class="btn btn-info">Edit</a>
                                <a href="delete_client.php?id=<?=$client['id']?>" class="btn btn-danger">DELETE</a>
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