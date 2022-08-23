<?php
require_once "../header.php";
require_once "../../db.php";
$select = "SELECT * FROM address";
$select_result = mysqli_query($db_connect,$select);
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Banner List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Sl</th>
                            <th>Office</th>
                            <th>Phone</th>
                            <th>Email</th>
                           
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($select_result as $key=>$address) {?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$address['office_address']?></td>
                            <td><?=$address['phone']?></td>
                            <td><?=$address['email_address']?></td>
                            >
                            <td>
                                <a href="banner_status.php?id=<?=$address['id']?>" class="btn <?=($address['status']==1?'btn-success': 'btn-secondary')?>"><?=($address['status']==1?'Active': 'Deactive')?></a>
                            </td>
                            <td width="200">
                                <a href="edit_address.php?id=<?=$address['id']?>" class="btn btn-info">Edit</a>
                                <a href="delete_address.php?id=<?=$address['id']?>" class="btn btn-danger">DELETE</a>
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