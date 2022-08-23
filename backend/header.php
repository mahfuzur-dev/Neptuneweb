<?php 

session_start();
if(!isset($_SESSION['id'])){
    header('location:error.php');
}
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


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    
    <link href="/neptune/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/neptune/assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="/neptune/assets/plugins/pace/pace.css" rel="stylesheet">


    <link href="/neptune/assets/css/main.min.css" rel="stylesheet">
    <link href="/neptune/assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="/neptune/assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/neptune/assets/images/neptune.png" />

</head>
<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        <div class="app-sidebar">
            <div class="logo">
                <a href="index.html" class="logo-icon"><span class="logo-text">Neptune</span></a>
                <div class="sidebar-user-switcher user-activity-online">
                    <a href="#">
                        <img src="https://cutt.ly/hHmPLn8">
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
                        <a href="/neptune/backend/dashboard.php" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
                    </li>
                    <li class="active-page">
                        <a href="/neptune/backend/profile.php" class="active"><i class="material-icons-two-tone">manage_accounts</i>Profile</a>
                    </li>     
                    <li>
                        <a href="#" class="active"><i class="material-icons-two-tone">manage_accounts</i>Banner<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
            
                            <li>
                                <a href="/neptune/backend/banners/add_banner.php">Add Banner</a>
                            </li>
                            <li>
                                <a href="/neptune/backend/banners/view_banner.php">View Banner</a>
                            </li>
                        </ul>
                      
                    </li>     
                    <li>
                        <a href="#" class="active"><i class="material-icons-two-tone">manage_accounts</i>Logo<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
            
                            <li>
                                <a href="/neptune/backend/logos/edit_logo.php">Updat Logo</a>
                            </li>
                            
                        </ul>
                      
                    </li>     
                    <li>
                        <a href="#"><i class="material-icons-two-tone">star</i>Social Icon<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
            
                            <li>
                                <a href="/neptune/backend/socials/add_social.php">Add Social</a>
                            </li>
                            <li>
                                <a href="/neptune/backend/socials/view_socials.php">View Social</a>
                            </li>
                        </ul>
                      
                    </li>     
                    <li>
                        <a href="#"><i class="material-icons-two-tone">star</i>Address<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
            
                            <li>
                                <a href="/neptune/backend/address/add_address.php">Address</a>
                            </li>
                            <li>
                                <a href="/neptune/backend/address/view_address.php">View Address</a>
                            </li>
                        </ul>
                      
                    </li>     
                    <li>
                        <a href="#"><i class="material-icons-two-tone">star</i>About<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
            
                            <li>
                                <a href="/neptune/backend/about_text/add_about.php">Add About</a>
                            </li>
                            <li>
                                <a href="/neptune/backend/about_text/view_about.php">View about</a>
                            </li>
                        </ul>
                      
                    </li>     
                    <li>
                        <a href="#"><i class="material-icons-two-tone">star</i>Education<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
            
                            <li>
                                <a href="/neptune/backend/education/add_education.php">Add Education</a>
                            </li>
                            <li>
                                <a href="/neptune/backend/education/view_education.php">View Education</a>
                            </li>
                        </ul>
                      
                    </li>     
                    <li>
                        <a href="#"><i class="material-icons-two-tone">star</i>Services<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
            
                            <li>
                                <a href="/neptune/backend/services/add_services.php">Add Services</a>
                            </li>
                            <li>
                                <a href="/neptune/backend/services/view_services.php">View Services</a>
                            </li>
                        </ul>
                      
                    </li>     
                    <li>
                        <a href="#"><i class="material-icons-two-tone">star</i>Work<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
            
                            <li>
                                <a href="/neptune/backend/work/add_work.php">Add Work</a>
                            </li>
                            <li>
                                <a href="/neptune/backend/work/view_work.php">View Work</a>
                            </li>
                        </ul>
                      
                    </li>     
                    <li>
                        <a href="#"><i class="material-icons-two-tone">star</i>Counter<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
            
                            <li>
                                <a href="/neptune/backend/counter/add_counter.php">Add Counter</a>
                            </li>
                            <li>
                                <a href="/neptune/backend/counter/view_counter.php">View Counter</a>
                            </li>
                        </ul>
                      
                    </li>     
                    <li>
                        <a href="#"><i class="material-icons-two-tone">star</i>Client<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
            
                            <li>
                                <a href="/neptune/backend/client/add_client.php">Add Client</a>
                            </li>
                            <li>
                                <a href="/neptune/backend/client/view_client.php">View Client</a>
                            </li>
                        </ul>
                      
                    </li>     
                    <li>
                        <a href="#"><i class="material-icons-two-tone">star</i>Contact<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
            
                            <li>
                                <a href="/neptune/backend/contact/add_contact.php">Add Contact</a>
                            </li>
                            <li>
                                <a href="/neptune/backend/contact/view_contact.php">View Contact</a>
                            </li>
                        </ul>
                      
                    </li>     
                    <li>
                        <a href="#"><i class="material-icons-two-tone">star</i>Client Message<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
            
                            
                            <li>
                                <a href="/neptune/backend/contact_form/view_message.php">View Contact</a>
                            </li>
                        </ul>
                      
                    </li>     

                    
                   
                </ul>
            </div>
        </div>
        <div class="app-container">
            <div class="search">
                <form>
                    <input class="form-control" type="text" placeholder="Type here/neptune/." aria-label="Search">
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