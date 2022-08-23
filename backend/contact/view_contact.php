<?php
require_once "../header.php";
require_once "../../db.php";
$select = "SELECT * FROM contacts";
$select_result = mysqli_query($db_connect,$select);
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Contact List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Sl</th>
                            <th>Sub-Title</th>
                            <th>Office</th>
                            <th>Office_address</th>
                            <th>Office Phone</th>
                            <th>Office email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($select_result as $key=>$contact) {?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td width="30"><?=$contact['sub_title']?></td>
                            <td width="30"><?=$contact['office']?></td>
                            <td width="30"><?=$contact['office_address']?></td>
                            <td width="30"><?=$contact['office_phone']?></td>
                            <td width="30"><?=$contact['office_email']?></td>
                            
                            <td>
                                <a href="contact_status.php?id=<?=$contact['id']?>" class="btn <?=($contact['status']==1?'btn-success': 'btn-secondary')?>"><?=($contact['status']==1?'Active': 'Deactive')?></a>
                            </td>
                            <td width="300">
                                <a href="edit_contact.php?id=<?=$contact['id']?>" class="btn btn-info">Edit</a>
                                <a href="delete_contact.php?id=<?=$contact['id']?>" class="btn btn-danger">DELETE</a>
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