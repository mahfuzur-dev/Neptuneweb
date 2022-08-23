<?php
require_once "../header.php";
require_once "../../db.php";

?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>Add Education</h3>
                </div>
                <div class="card-body">
                    <?php if(isset($_SESSION['edu_success'])){ ?>
                        <div class="alert alert-success"><?=$_SESSION['edu_success']?></div>
                        <?php }unset($_SESSION['edu_success'])?>
            

                    <form action="education_post.php" method="POST">
                        <div class="form-group my-3">
                            <label for="" class="form-label">Year</label>
                            <input type="number" class="form-control" name="year">
                        </div>
                        <div class="form-group my-3">
                            <label for="" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group my-3">
                            <label for="" class="form-label">Percentage</label>
                            <input type="number" class="form-control" name="percentage">
                        </div>
                        
                        <div class="form-group my-5">
                            <button type="submit" class="btn btn-primary">Add Education</button>
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