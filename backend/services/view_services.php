<?php
require_once "../header.php";
require_once "../../db.php";
$select = "SELECT * FROM services";
$select_result = mysqli_query($db_connect,$select);
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Services List</h3>
                </div>
                         <?php if(isset($_SESSION['limit'])){ ?>
                        <div class="alert alert-warning"><?=$_SESSION['limit']?></div>
                        <?php }unset($_SESSION['limit'])?>
                         <?php if(isset($_SESSION['services'])){ ?>
                        <div class="alert alert-success"><?=$_SESSION['services']?></div>
                        <?php }unset($_SESSION['services'])?>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Sl</th>
                            <th>Icon</th>
                            <th>Heading</th>
                            <th>Sub Title</th>
                           
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($select_result as $key=>$services) {?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$services['icon']?></td>
                            <td><?=$services['heading']?></td>
                            <td><?=$services['title']?></td>
                            <td>
                                <a href="services_status.php?id=<?=$services['id']?>" class="btn <?=($services['status']==1?'btn-success': 'btn-secondary')?>"><?=($services['status']==1?'Active': 'Deactive')?></a>
                            </td>
                            <td width="200">
                                <a href="edit_services.php?id=<?=$services['id']?>" class="btn btn-info">Edit</a>
                                <a href="delete_services.php?id=<?=$services['id']?>" class="btn btn-danger">DELETE</a>
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