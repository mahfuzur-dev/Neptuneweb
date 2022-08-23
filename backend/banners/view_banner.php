<?php
require_once "../header.php";
require_once "../../db.php";
$select = "SELECT * FROM banners";
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
                            <th>Sub-Title</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Banner Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($select_result as $key=>$banner) {?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$banner['sub_title']?></td>
                            <td><?=$banner['title']?></td>
                            <td><?=$banner['desp']?></td>
                            <td><img width="50" src="../../uploads/banner/<?=$banner['banner_image']?>" alt=""></td>
                            <td>
                                <a href="banner_status.php?id=<?=$banner['id']?>" class="btn <?=($banner['status']==1?'btn-success': 'btn-secondary')?>"><?=($banner['status']==1?'Active': 'Deactive')?></a>
                            </td>
                            <td width="200">
                                <a href="edit_banner.php?id=<?=$banner['id']?>" class="btn btn-info">Edit</a>
                                <a href="delete.php?id=<?=$banner['id']?>" class="btn btn-danger">DELETE</a>
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