<?php
require_once "../header.php";
require_once "../../db.php";

$id = $_GET['id'];
$select = "SELECT * FROM education WHERE id=$id";
$select_result = mysqli_query($db_connect,$select);
$after_assoc = mysqli_fetch_assoc($select_result);

?>
 
<div class="container">
    <div class="row">
        <div class="col-lg-8 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Education</h3>
                </div>
                        <?php if(isset($_SESSION['banner_image'])){ ?>
                        <div class="alert alert-warning"><?=$_SESSION['banner_image']?></div>
                        <?php }unset($_SESSION['banner_image'])?>
                        
                <div class="card-body">
                    <form action="update_education.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group my-3">
                            <label for="">Year</label>
                            <input type="hidden" class="form-control" name="id" value="<?=$after_assoc['id']?>">
                            <input type="number" class="form-control" name="year" value="<?=$after_assoc['year']?>">
                        </div>
                        <div class="form-group my-3">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="title" value="<?=$after_assoc['title']?>">
                        </div>
                        <div class="form-group my-3">
                            <label for="">Percentage</label>
                            <input type="number" class="form-control" name="percentage" value="<?=$after_assoc['percentage']?>">
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