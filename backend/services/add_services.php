<?php
require_once "../header.php";
require_once "../../db.php";

?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>Add Services</h3>
                </div>
                <div class="card-body">
                    <?php if(isset($_SESSION['allow_extension'])){ ?>
                        <div class="alert alert-warning"><?=$_SESSION['allow_extension']?></div>
                        <?php }unset($_SESSION['allow_extension'])?>
                    <

                    <form action="services_post.php" method="POST">
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
                            <label for="" class="form-label">Icon</label>
                            <input type="text" class="form-control icon" name="icon" value="">

                           
                        </div>
                        <div class="form-group my-3">
                            <label for="" class="form-label">Heading</label> 
                            <input type="text" class="form-control" name="heading">
                        </div>
                        <div class="form-group my-3">
                            <label for="" class="form-label">Sub Title</label> 
                            <input type="text" class="form-control" name="sub_title">
                        </div>
                       
                        
                        <div class="form-group my-5">
                            <button type="submit" class="btn btn-primary">Add Social Icon</button>
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
<script>
    $('.fa').click(function(){
        let icon_name = $(this).attr('class');
        $('.icon').val(icon_name);
       
    });
</script>