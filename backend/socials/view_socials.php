<?php
require_once "../header.php";
require_once "../../db.php";
$select = "SELECT * FROM icons";
$select_result = mysqli_query($db_connect,$select);
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Social List</h3>
                </div>
                <?php if(isset($_SESSION['limit'])){ ?>
                        <div class="alert alert-warning"><?=$_SESSION['limit']?></div>
                        <?php }unset($_SESSION['limit'])?>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Sl</th>
                            <th>Icon</th>
                            <th>Social Link</th>
                           
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($select_result as $key=>$icon) {?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$icon['icon']?></td>
                            <td><?=$icon['icon_link']?></td>
                            <td>
                                <a href="social_status.php?id=<?=$icon['id']?>" class="btn <?=($icon['status']==1?'btn-success': 'btn-secondary')?>"><?=($icon['status']==1?'Active': 'Deactive')?></a>
                            </td>
                            <td width="200">
                                <a href="edit_social.php?id=<?=$icon['id']?>" class="btn btn-info">Edit</a>
                                <a href="delete_social.php?id=<?=$icon['id']?>" class="btn btn-danger">DELETE</a>
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