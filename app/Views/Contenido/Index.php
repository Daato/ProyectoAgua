<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Inicio</title>

    <!-- Fontfaces CSS-->
    <link href="../../assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../../assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../../assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../../assets/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="<?php echo base_url(); ?>/">
                            <img src="../../assets/images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="../assets/images/icon/lorem.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="<?php echo base_url(); ?>/index">
                                <i class="fas fa-desktop"></i>Inicio</a>
                        </li>
                        <li class=" has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>CRUD</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?php echo base_url(); ?>/tablasdom">Usuarios</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>/tablasdom2">Juegos</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>/tablasdom3">Proveedores</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>/contacto">
                                <i class="far fa-check-square"></i>Contacto</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>/perfil">
                                <i class="zmdi zmdi-account"></i>Cuenta</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>/">
                            <i class="zmdi zmdi-power"></i>Cerrar sesion</a>
                        </li>
                        
     
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Buscar..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">



                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img class="profile-image" src="usuarios/<?= session("nombre");?>.png" alt="">
                                        </div>
                                        <div class="content">
                                            <a href="#"><?php 
            if(session('nombre') > 0):?>
                <a>&nbsp <?= session("nombre");?></a>
            <?php else:?>
                <a>No session</span></a>
            <?php endif;?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img class="profile-image" src="usuarios/<?= session("nombre");?>.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php 
            if(session('nombre') > 0):?>
                <a> <?= session("nombre");?></a>
            <?php else:?>
                <a>No session</span></a>
            <?php endif;?></a>
                                                    </h5>
                                                    <span class="email"><?php 
            if(session('nombre') > 0):?>
                <a>Correo <?= session("correo");?></a>
            <?php else:?>
                <a>No session</span></a>
            <?php endif;?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="<?php echo base_url(); ?>/contacto">
                                                        <i class="zmdi zmdi-account"></i>Cuenta</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="<?php echo base_url(); ?>/">
                                                    <i class="zmdi zmdi-power"></i>Cerrar sesion</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            
            

            <div class="main-content">
            <div id="bannerimage"><img src="../assets/images/icon/banner.png"; alt="Cool Admin" /></div>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <a href="<?php echo base_url(); ?>/tablasdom">
                                        <i class="zmdi zmdi-account-o"></i></a>
                                                
                                            </div>
                                            <div class="text">
                                                <h2>Usuarios</h2>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart6"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <a href="<?php echo base_url(); ?>/tablasdom2">
                                        <i class="zmdi zmdi-shopping-cart"></i></a>
                                                
                                            </div>
                                            <div class="text">
                                                <h2>Juegos</h2>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart6"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <a href="<?php echo base_url(); ?>/tablasdom3">
                                        <i class="zmdi zmdi-calendar-note"></i></a>
                                                
                                            </div>
                                            <div class="text">
                                                <h2>Proveedores</h2>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart6"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <a href="<?php echo base_url(); ?>/contacto">
                                <i class="far fa-check-square"></i></a>
                                            </div>
                                            <div class="text">
                                                <h2>Contacto</h2>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart6"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        



                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright ?? 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="../../assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../../assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../../assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../../assets/vendor/slick/slick.min.js">
    </script>
    <script src="../../assets/vendor/wow/wow.min.js"></script>
    <script src="../../assets/vendor/animsition/animsition.min.js"></script>
    <script src="../../assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../../assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../../assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../../assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../../assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../../assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../../assets/js/main.js"></script>

</body>

</html>
<!-- end document-->
