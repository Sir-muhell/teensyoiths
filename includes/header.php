<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Let the revolution begin...">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>TeensYouth</title>

    <!-- Favicon -->
    <link rel="icon" href="img/2.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <!-- Line -->
        <div class="line-preloader"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">


        <!-- ***** Navbar Area ***** -->
        <div class="crose-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="croseNav">

                        <!-- Nav brand -->
                        <a href="./" class="nav-brand"><img src="img/2.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
<?php
if(!isset($_SESSION['user']) && !isset($_SESSION['Username'])) {          
?>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="./">Home</a></li>                                  
                                    <li><a href="./about">About Us</a></li>
                                    <li><a href="./articles">Articles</a></li>
                                    <li><a href="./authors">Authors</a></li>
                                    <li><a href="./write">Write an Article</a></li>
                                    
                                    <li><a href="./signin">Sign in</a></li>
                                </ul>

                                <!-- Search Button -->
                                <div id="header-search"><i class="fa fa-search" aria-hidden="true"></i></div>

                                <!-- Donate Button -->
                                <a href="./signup" class="btn crose-btn header-btn">Sign up</a>
                               
                            </div>
                            <!-- Nav End -->
                             <?php
                            } else {
                            ?>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="./">Home</a></li>                                  
                                    <li><a href="./about">About Us</a></li>
                                    <li><a href="./articles">Articles</a></li>
                                    <li><a href="./write">Write an Article</a></li>
                                     <li><a href="./myarticles">My Articles</a></li>
                                    <li><a href="./logout">Logout</a></li>
                                    <li><a style="color: red;" href="#">Welcome <?php echo $_SESSION['Username'] ?> </a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                            <?php
                        }
                        ?>
                        </div>
                    </nav>
                </div>
            </div>

            <!-- ***** Search Form Area ***** -->
            <div class="search-form-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="searchForm">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Enter keywords &amp; hit enter...">
                                    <button type="submit" class="d-none"></button>
                                </form>
                                <div class="close-icon" id="searchCloseIcon"><i class="fa fa-close" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Navbar Area ***** -->
    </header>
    <!-- ##### Header Area End ##### -->