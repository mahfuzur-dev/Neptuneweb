<?php
require_once "../header.php";
require_once "../../db.php";


$select = "SELECT * FROM logos";
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
                        <?php if(isset($_SESSION['logo_image'])){ ?>
                        <div class="alert alert-success"><?=$_SESSION['logo_image']?></div>
                        <?php }unset($_SESSION['logo_image'])?>

                        <?php if(isset($_SESSION['size'])){ ?>
                        <div class="alert alert-warning"><?=$_SESSION['size']?></div>
                        <?php }unset($_SESSION['size'])?>
                        <?php if(isset($_SESSION['extension'])){ ?>
                        <div class="alert alert-warning"><?=$_SESSION['extension']?></div>
                        <?php }unset($_SESSION['extension'])?>
                        
                <div class="card-body">
                    <form action="update_logo.php" method="POST" enctype="multipart/form-data">
                       <div class="form-group my-3">
                            <input type="hidden" class="form-control" name="id" value="<?=$after_assoc['id']?>">
                            <input onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" type="file" class="form-control" name="logo_image">
                            
                        </div>
                        <div class="form-group my-3">
                            <h3>Present Logo</h3>
                            <img id="blah" width="100" src="../../uploads/logo/<?=$after_assoc['logo_image']?>" width="100" alt="">
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