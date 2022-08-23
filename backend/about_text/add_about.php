<?php
require_once "../header.php";
require_once "../../db.php";

?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>Add About</h3>
                </div>
                <div class="card-body">
                    <?php if(isset($_SESSION['about'])){ ?>
                        <div class="alert alert-success"><?=$_SESSION['about']?></div>
                        <?php }unset($_SESSION['about'])?>
                    

                    <form action="about_post.php" method="POST">
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
                            <input type="text" class="form-control" name="desp">
                        </div>
                       
                        <div class="form-group my-5">
                            <button type="submit" class="btn btn-primary">Add About</button>
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