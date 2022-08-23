<?php
require_once "../header.php";
require_once "../../db.php";

$id = $_GET['id'];
$select = "SELECT * FROM contacts WHERE id=$id";
$select_result = mysqli_query($db_connect,$select);
$after_assoc = mysqli_fetch_assoc($select_result);

?>
 
<div class="container">
    <div class="row">
        <div class="col-lg-8 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Contact</h3>
                </div>
                        <?php if(isset($_SESSION['banner_image'])){ ?>
                        <div class="alert alert-warning"><?=$_SESSION['banner_image']?></div>
                        <?php }unset($_SESSION['banner_image'])?>
                        <?php if(isset($_SESSION['size'])){ ?>
                        <div class="alert alert-warning"><?=$_SESSION['size']?></div>
                        <?php }unset($_SESSION['size'])?>
                        
                <div class="card-body">
                    <form action="update_contact.php" method="POST">
                        <div class="form-group my-3">
                            <label for="">Sub Title</label>
                            <input type="hidden" class="form-control" name="id" value="<?=$after_assoc['id']?>">
                            <input type="text" class="form-control" name="sub_title" value="<?=$after_assoc['sub_title']?>">
                        </div>
                        <div class="form-group my-3">
                            <label for="">Office</label>
                            <input type="text" class="form-control" name="office" value="<?=$after_assoc['office']?>">
                        </div>
                        <div class="form-group my-3">
                            <label for="">Office Address</label>
                            <input type="text" class="form-control" name="office_address" value="<?=$after_assoc['office_address']?>">
                        </div>
                        <div class="form-group my-3">
                            <label for="">Office Phone</label>
                            <input type="text" class="form-control" name="office_phone" value="<?=$after_assoc['office_phone']?>">
                        </div>
                        <div class="form-group my-3">
                            <label for="">Office Email</label>
                            <input type="text" class="form-control" name="office_email" value="<?=$after_assoc['office_email']?>">
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