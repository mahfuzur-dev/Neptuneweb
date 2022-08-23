<?php
require_once "../header.php";
require_once "../../db.php";
$select = "SELECT * FROM works";
$select_result = mysqli_query($db_connect,$select);
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Work List</h3>
                </div>
                       <?php if(isset($_SESSION['limit'])){ ?>
                        <div class="alert alert-warning"><?=$_SESSION['limit']?></div>
                        <?php }unset($_SESSION['limit'])?>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Sl</th>
                            <th>Sub-Title</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Logo Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($select_result as $key=>$work) {?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$work['sub_title']?></td>
                            <td><?=$work['title']?></td>
                            <td><?=$work['info']?></td>
                            <td><img width="50" src="../../uploads/work/<?=$work['work_image']?>" alt=""></td>
                            <td>
                                <a href="work_status.php?id=<?=$work['id']?>" class="btn <?=($work['status']==1?'btn-success': 'btn-secondary')?>"><?=($work['status']==1?'Active': 'Deactive')?></a>
                            </td>
                            <td width="200">
                                <a href="edit_work.php?id=<?=$work['id']?>" class="btn btn-info">Edit</a>
                                <a href="delete_work.php?id=<?=$work['id']?>" class="btn btn-danger">DELETE</a>
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