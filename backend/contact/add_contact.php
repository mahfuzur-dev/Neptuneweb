<?php
require_once "../header.php";
require_once "../../db.php";

?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>Add Contact</h3>
                </div>
                <div class="card-body">
                    <?php if(isset($_SESSION['allow_extension'])){ ?>
                        <div class="alert alert-warning"><?=$_SESSION['allow_extension']?></div>
                        <?php }unset($_SESSION['allow_extension'])?>
                    <?php if(isset($_SESSION['size'])){ ?>
                        <div class="alert alert-warning"><?=$_SESSION['size']?></div>
                        <?php }unset($_SESSION['size'])?>
                    <?php if(isset($_SESSION['banner_image'])){ ?>
                        <div class="alert alert-success"><?=$_SESSION['banner_image']?></div>
                        <?php }unset($_SESSION['banner_image'])?>

                    <form action="contact_post.php" method="POST">
                        <div class="form-group my-3">
                            <label for="" class="form-label">Sub Title</label>
                            <input type="text" class="form-control" name="sub_title">
                        </div>
                        <div class="form-group my-3">
                            <label for="" class="form-label">Office</label>
                            <input type="text" class="form-control" name="office">
                        </div>
                        <div class="form-group my-3">
                            <label for="" class="form-label">Office Address</label>
                            <input type="text" class="form-control" name="office_address">
                        </div>
                        <div class="form-group my-3">
                            <label for="" class="form-label">Office phone</label>
                            <input type="number" class="form-control" name="office_phone">
                        </div>
                        <div class="form-group my-3">
                            <label for="" class="form-label">Office Email</label>
                            <input type="email" class="form-control" name="office_email">
                        </div>
                       
                        <div class="form-group my-5">
                            <button type="submit" class="btn btn-primary">Add Contact</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once "../footer.php";
?>