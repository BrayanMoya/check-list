<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <title>Check list</title>
    <!-- Bootstrap Core CSS -->
    <?php // use_javascript('')
    ?>
    <?php use_stylesheet('plugins/bootstrap/css/bootstrap.min.css') ?>
    <?php use_stylesheet('plugins/perfect-scrollbar/css/perfect-scrollbar.css') ?>
    <?php use_stylesheet('plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') ?>
    <?php use_stylesheet('style.css') ?>
    <?php use_stylesheet('pages/dashboard1.css') ?>
    <?php use_stylesheet('pages/floating-label.css') ?>
    <?php use_stylesheet('colors/default-dark.css') ?>

    <?php include_stylesheets(true) ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Check list</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div style="height: 40px;" class="navbar-header">
                    <a class="navbar-brand">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="/images/logo-daruma.png" width="40px" height="40px" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                            <!-- dark Logo text -->
                            <img src="/images/logo-tiqal.jpg" alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->
                            <img src="/images/logo-tiqal.jpg" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>

                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">

                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuario</a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-text">
                                                <h4><?php echo ($sf_user->getGuardUser()->getName()) . ' - ' . ($sf_user->getGuardUser()->getUsername()) ?></h4>
                                                <p class="text-muted"><?php echo ($sf_user->getGuardUser()->getEmail()) ?></p><a href="<?php echo url_for('/logout') ?>" class="btn btn-rounded btn-danger btn-sm">Cerrar Sesion</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <?php if ($sf_user->hasCredential('admin')) : ?>

                            <li>
                                <a class="waves-effect waves-dark" href="<?php echo url_for('sfGuardUser/index') ?>" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Usuarios</span></a>
                            </li>
                            <li>
                                <a class="waves-effect waves-dark" href="<?php echo url_for('sfGuardGroup/index') ?>" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Grupos</span></a>
                            </li>

                            <li style="position: relative; display: inline-block;">
                            <a class="waves-effect waves-dark" aria-expanded="false"><i class="fa fa-list-alt"></i><span class="hide-menu">Plantillas</span></a>

                                <ul >
                                    <li>
                                        <a class="waves-effect waves-dark" href="<?php echo url_for('template/index') ?>" aria-expanded="false"><i class="fa fa-clipboard"></i>  <span class="hide-menu">Gestionar plantillas</span></a>
                                    </li>
                                    <li>
                                        <a class="waves-effect waves-dark" href="<?php echo url_for('template/newCriterion') ?>" aria-expanded="false"><i class="fa fa-edit"></i>  <span class="hide-menu">Gestionar Criterios</span></a>
                                    </li>
                                </ul>
                            </li>

                        <?php endif; ?>
                        <?php if ($sf_user->hasCredential('admin') || $sf_user->hasCredential('staff') || $sf_user->hasCredential('guest')) : ?>
                            <li>
                                <a class="waves-effect waves-dark" href="<?php echo url_for('checkList/index') ?>" aria-expanded="false"><i class="fa fa-check"></i><span class="hide-menu">Listas de chequeo</span></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Listas de chequeo</h3>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Sales overview chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <div class="ml-auto">
                                            <?php echo $sf_content ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer style="position:fixed; text-align:center;" class="footer"> Tiqal / Antonio José Camacho </footer>
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->


        <!-- All Jquery -->
        <!-- ============================================================== -->
        <?php use_javascript('plugins/jquery/jquery.min.js') ?>
        <!-- Bootstrap popper Core JavaScript -->
        <?php use_javascript('plugins/bootstrap/js/popper.min.js') ?>
        <?php use_javascript('plugins/bootstrap/js/bootstrap.min.js') ?>

        <!-- slimscrollbar scrollbar JavaScript -->
        <?php use_javascript('perfect-scrollbar.jquery.min.js') ?>

        <!--Wave Effects -->
        <?php use_javascript('waves.js') ?>
        <!--Menu sidebar -->
        <?php use_javascript('sidebarmenu.js') ?>
        <!--Custom JavaScript -->
        <?php use_javascript('custom.min.js') ?>
        <!-- ============================================================== -->
        <!-- This page plugins -->
        <!-- ============================================================== -->
        <?php use_javascript('plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') ?>
        <?php use_javascript('plugins/toast-master/js/jquery.toast.js') ?>
        <?php use_javascript('dashboard1.js') ?>

        <?php include_javascripts(true) ?>
</body>

</html>