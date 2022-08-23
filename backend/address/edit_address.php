<?php
require_once "../header.php";
require_once "../../db.php";

$id = $_GET['id'];
$select = "SELECT * FROM address WHERE id=$id";
$select_result = mysqli_query($db_connect,$select);
$after_assoc = mysqli_fetch_assoc($select_result);

?>
 
<div class="container">
    <div class="row">
        <div class="col-lg-8 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Banner</h3>
                </div>
                        <?php if(isset($_SESSION['banner_image'])){ ?>
                        <div class="alert alert-warning"><?=$_SESSION['banner_image']?></div>
                        <?php }unset($_SESSION['banner_image'])?>
                        
                <div class="card-body">
                    <form action="update_address.php" method="POST">
                        <div class="form-group my-3">
                            <label for="">Office</label>
                            <input type="hidden" class="form-control" name="id" value="<?=$after_assoc['id']?>">
                            <input type="text" class="form-control" name="office_address" value="<?=$after_assoc['office_address']?>">
                        </div>
                        <div class="form-group my-3">
                            <label for="">Phone</label>
                            <input type="number" class="form-control" name="phone" value="<?=$after_assoc['phone']?>">
                        </div>
                        <div class="form-group my-3">
                            <label for="">Email Address</label>
                            <input type="email" class="form-control" name="email_address" value="<?=$after_assoc['email_address']?>">
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