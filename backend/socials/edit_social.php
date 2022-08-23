<?php
require_once "../header.php";
require_once "../../db.php";

$id = $_GET['id'];
$select = "SELECT * FROM icons WHERE id=$id";
$select_result = mysqli_query($db_connect,$select);
$after_assoc = mysqli_fetch_assoc($select_result);

?>
 
<div class="container">
    <div class="row">
        <div class="col-lg-8 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Social</h3>
                </div>
                        <?php if(isset($_SESSION['banner_image'])){ ?>
                        <div class="alert alert-warning"><?=$_SESSION['banner_image']?></div>
                        <?php }unset($_SESSION['banner_image'])?>
                        
                <div class="card-body">
                    <form action="update_socials.php" method="POST">
                    <?php $fonts = array (
                            'fa-behance',
                            'fa-behance-square',
                            'fa-facebook',
                          
                            'fa-facebook-official',
                           
                            'fa-twitch',
                            'fa-twitter',
                            'fa-twitter-square',
                            'fa-instagram',
                            'fa-linkedin',
                            'fa-linkedin-square',
                            'fa-youtube',
                            'fa-youtube-play',
                            'fa-youtube-square',
                            'fa-pinterest',
                            'fa-pinterest-p',
                            'fa-pinterest-square',
                        );?>
                        <div class="form-group my-3">
                            <?php foreach($fonts as $icon){?>
                                <i style="font-size:26px; margin:10px; cursor:pointer;" class="fa <?=$icon?>"></i>
                            <?php }?>
                            
                        </div>
                        <div class="form-group my-3">
                            <label for="">Sub Title</label>
                            <input type="hidden" class="form-control" name="id" value="<?=$after_assoc['id']?>">
                            <input type="text" class="form-control icon" name="icon" value="<?=$after_assoc['icon']?>">
                        </div>
                        <div class="form-group my-3">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="icon_link" value="<?=$after_assoc['icon_link']?>">
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
<script>
    $('.fa').click(function(){
        let icon_name = $(this).attr('class');
        $('.icon').val(icon_name);
        
    });
</script>