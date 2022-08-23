<?php
require_once "../header.php";
require_once "../../db.php";

?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>Add Address</h3>
                </div>
                <div class="card-body">
                    <?php if(isset($_SESSION['address'])){ ?>
                        <div class="alert alert-warning"><?=$_SESSION['address']?></div>
                        <?php }unset($_SESSION['address'])?>
                    

                    <form action="address_post.php" method="POST">
                        <div class="form-group my-3">
                            <label for="" class="form-label">Office Address</label>
                            <input type="text" class="form-control" name="office_address">
                        </div>
                        <div class="form-group my-3">
                            <label for="" class="form-label">Phone Number</label>
                            <input type="number" class="form-control" name="phone">
                        </div>
                        <div class="form-group my-3">
                            <label for="" class="form-label">Email_address</label>
                            <input type="email" class="form-control" name="email_address">
                        </div>
                        
                        <div class="form-group my-5">
                            <button type="submit" class="btn btn-primary">Add Address</button>
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