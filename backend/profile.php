<?php 
require_once("../db.php");
session_start();
if(!isset($_SESSION['id'])){
    header('location:error.php');
}
$id = $_SESSION['id'];
$select_users = "SELECT * FROM users WHERE id =$id";
$users_result = mysqli_query($db_connect,$select_users);
$users_assoc = mysqli_fetch_assoc($users_result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Title -->
    <title>Neptune - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="../assets/plugins/pace/pace.css" rel="stylesheet">

    
    <!-- Theme Styles -->
    <link href="../assets/css/main.min.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/neptune.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        <div class="app-sidebar">
            <div class="logo">
                <a href="index.html" class="logo-icon"><span class="logo-text">Neptune</span></a>
                <div class="sidebar-user-switcher user-activity-online">
                    <a href="#">
                        <img src="../uploads/profile/<?=$users_assoc['profile_photo']?>">
                        <span class="activity-indicator"></span>
                        <span class="user-info-text"><?php echo $_SESSION['name_after'];?><br><span class="user-state-info"><?php echo $_SESSION['email_after'];?></span></span>
                    </a>
                </div>
            </div>
            <div class="app-menu">
                <ul class="accordion-menu">
                    <li class="sidebar-title">
                        Apps
                    </li>
                    <li class="active-page">
                        <a href="dashboard.php" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
                    </li>
                    <li class="active-page">
                        <a href="profile.php" class="active"><i class="material-icons-two-tone">manage_accounts</i>Profile</a>
                    </li>
             
                </ul>
            </div>
        </div>
        <div class="app-container">
            <div class="search">
                <form>
                    <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
                </form>
                <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
            </div>
            <div class="app-header">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="navbar-nav" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link hide-sidebar-toggle-button" href="#"><i class="material-icons">first_page</i></a>
                                </li>
                            </ul>
                         </div>
                         <div class="d-flex">
                            <ul class="navbar-nav">
                                
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link btn btn-danger text-white" href="logut.php">Log Out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="app-content">
                <div class="content-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="page-description">
                                    <h1>Profile</h1>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                              <div class="card-body">
                               <div class="example-container">
                                
                                 <div class="example-content">
                                     <form action="profile_post.php" method="POST">
                                     <label class="form-label">Name</label>
                                     <input type="text" class="form-control" value="<?=$_SESSION['name_after']?>" name="name">
                                        <button type="submit" class="btn btn-success mt-3" name="update_name"> Change Name</button>
                                     </form>
                                   </div>
                               </div>
                             </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="card-body">
                              <?php if(isset($_SESSION['update_photo'])){ ?>
                                    <div class="alert alert-success"><?=$_SESSION['update_photo']?></div>
                                    <?php } unset($_SESSION['update_photo'])?>
                               <div class="example-container">
                                   <?php if(isset($_SESSION['allow_extension'])){ ?>
                                    <div class="alert alert-danger"><?=$_SESSION['allow_extension']?></div>
                                    <?php } unset($_SESSION['allow_extension'])?>
                                   <?php if(isset($_SESSION['size'])){ ?>
                                    <div class="alert alert-danger"><?=$_SESSION['size']?></div>
                                    <?php } unset($_SESSION['size'])?>
                                
                                 <div class="example-content">
                                     <form action="profile_photo_post.php" method="POST" enctype="multipart/form-data">
                                     <label class="form-label">Photo</label>
                                     <input onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" type="file" class="form-control" name="photo">
                                     <img width="100" id="blah" src="" alt=""><br>
                                        <button type="submit" class="btn btn-success mt-3" name="upload_photo"> Upload Photo</button>
                                     </form>
                                   </div>
                               </div>
                             </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="card-body">
                               <div class="example-container">
                               <?php if(isset($_SESSION['password'])){ ?>
                                    <div class="alert alert-success"><?=$_SESSION['password']?></div>
                                    <?php } unset($_SESSION['password'])?>
                                 <div class="example-content">
                                     <form action="password_post.php" method="POST">
                                     <label class="form-label">Password</label>
                                     <input type="hidden" class="form-control" value="<?=$_SESSION['id']?>" name="id">
                                     <input type="password" class="form-control" value="" name="password">
                                        <button type="submit" class="btn btn-success mt-3" name="update_password"> Change Password</button>
                                     </form>
                                   </div>
                               </div>
                             </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Javascripts -->
    <script src="../assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="../assets/plugins/pace/pace.min.js"></script>
    <script src="../assets/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/js/main.min.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/pages/dashboard.js"></script>
</body>
</html>