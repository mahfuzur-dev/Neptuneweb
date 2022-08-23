<?php
require_once "../header.php";
require_once "../../db.php";

?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>Add Work</h3>
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

                    <form action="work_post.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group my-3">
                            <label for="" class="form-label">Sub Title</label>
                            <input type="text" class="form-control" name="sub_title">
                        </div>
                        <div class="form-group my-3">
                            <label for="" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group my-3">
                            <label for="" class="form-label">Description</label>
                            <input type="text" class="form-control" name="info">
                        </div>
                        <div class="form-group my-3">
                            <label for="" class="form-label">Work Image</label>
                            <input onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" type="file" class="form-control" name="work_image">
                            <img width="50" src="" id="blah" alt="">
                        </div>
                        <div class="form-group my-5">
                            <button type="submit" class="btn btn-primary">Add Work</button>
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