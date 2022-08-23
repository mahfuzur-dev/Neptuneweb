<?php
require_once "../header.php";
require_once "../../db.php";
$select = "SELECT * FROM contact_messages";
$select_result = mysqli_query($db_connect,$select);
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Contact Message List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                           
                            <th>Action</th>
                        </tr>
                        <?php foreach($select_result as $key=>$con_message) {?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$con_message['name']?></td>
                            <td><?=$con_message['email']?></td>
                            <td><?=$con_message['message']?></td>
                           
                            <td>
                               
                                <a href="delete_message.php?id=<?=$con_message['id']?>" class="btn btn-danger">DELETE</a>
                            </td>
                        </tr>
                      <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "../footer.php";?>