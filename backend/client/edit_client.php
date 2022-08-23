<?php
require_once "../header.php";
require_once "../../db.php";

$id = $_GET['id'];
$select = "SELECT * FROM clients WHERE id=$id";
$select_result = mysqli_query($db_connect,$select);
$after_assoc = mysqli_fetch_assoc($select_result);

?>
 
<div class="container">
    <div class="row">
        <div class="col-lg-8 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Client</h3>
                </div>
                        <?php if(isset($_SESSION['banner_image'])){ ?>
                        <div class="alert alert-warning"><?=$_SESSION['banner_image']?></div>
                        <?php }unset($_SESSION['banner_image'])?>
                        <?php if(isset($_SESSION['size'])){ ?>
                        <div class="alert alert-warning"><?=$_SESSION['size']?></div>
                        <?php }unset($_SESSION['size'])?>
                <div class="card-body">
                    <form action="update_client.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group my-3">
                            <label for="">Description</label>
                            <input type="hidden" class="form-control" name="id" value="<?=$after_assoc['id']?>">
                            <input type="text" class="form-control" name="desp" value="<?=$after_assoc['desp']?>">
                        </div>
                        <div class="form-group my-3">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" value="<?=$after_assoc['name']?>">
                        </div>
                        <div class="form-group my-3">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="title" value="<?=$after_assoc['title']?>">
                        </div>
                        <div class="form-group my-3">
                            <label for="">Client Image</label>
                            <input onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" type="file" class="form-control" name="client_image">
                            
                        </div>
                        <div class="form-group my-3">
                            <h3>Present Image</h3>
                            <img id="blah" width="100" src="../../uploads/client/<?=$after_assoc['client_image']?>" width="100" alt="">
                        </div>
                        <div class="form-group my-5">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php require_once "../footer.php";?>