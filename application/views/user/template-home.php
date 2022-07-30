<!DOCTYPE html>

<head>
    <title><?= $title ?> | Pustaka Novel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="<?= base_url('assets/layout/styles/layout.css') ?>">
</head>

<body id="top">
    <!-- Top Background Image Wrapper -->
    <div class="bgded overlay padtop" style="background-image:url(<?= base_url('assets/img/background/baca1.jpg') ?>">
        <header id="header" class="hoc clear">
            <div id="logo" class="fl_left">
                <!-- ################################################################################################ -->
                <h1><a href="index.html">Pustaka Novel</a></h1>
                <!-- ################################################################################################ -->
            </div>
            <nav id="mainav" class="fl_right">
                <!-- ################################################################################################ -->
                <ul class="clear">

                    <li class="<?= ($title == 'Home') ? 'active' : '' ?>"><a href="<?= base_url('/') ?>">Home</a></li>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <?php if (isset($_SESSION['isLogin'])) : ?>
                                <!-- User Account Menu -->
                                <li class="dropdown user user-menu">
                                    <!-- Menu Toggle Button -->
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="<?= base_url('assets/img/avatar.jpg') ?>" class="user-image" alt="User Image">
                                        <span class="hidden-xs"><?= $this->session->userdata('nama') ?></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!-- The user image in the menu -->
                                        <li class="user-header">
                                            <img src="<?= base_url('assets/img/avatar.jpg ') ?>" class="img-circle" alt="User Image">
                                            <p><?= $this->session->userdata('nama') ?></p>
                                        </li>
                                        <!-- Menu Footer-->
                                        <li class="user-footer">
                                            <div class="pull-left">
                                                <a href="<?= base_url('user/profile') ?>" class="btn btn-default btn-flat">Profile</a>
                                            </div>
                                            <div class="pull-right">
                                                <a href="<?= base_url('auth/logout') ?>" onclick="return confirm('apakah anda yakin?')" class="btn btn-default btn-flat">Sign out</a>
                                            </div>
                                        </li>

                                    </ul>
                                </li>
                            <?php else : ?>
                                <li class="<?= ($title == 'Login') ? 'active' : '' ?>"><a href="<?= base_url('page/login') ?>">Login</a></li>
                                <li class="<?= ($title == 'Register') ? 'active' : '' ?>"><a href="<?= base_url('page/register') ?>">Register</a></li>
                            <?php endif; ?>

                        </ul>
                    </div>
                    <!-- /.navbar-custom-menu -->

            </nav>
        </header>
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <div id="pageintro" class="hoc clear">
            <!-- ################################################################################################ -->
            <article>
                <h3 class="heading">Jendela Dunia?</h3>
                <p> "Membaca semua buku yang bagus layaknya sebuah percakapan</p>
                <p>dengan pemikiran terbaik di abad-abad sebelumnya." - Rene Descartes</p>
                <footer>
                    <ul class="nospace inline pushright">
                        <li><a class="btn" href="<?= base_url('page/buku') ?>">Lihat Daftar Buku</a></li>
                        <li><a class="btn inverse" href="<?= base_url('page/tentang') ?>">Tentang</a></li>
                    </ul>
                </footer>
            </article>
            <!-- ################################################################################################ -->
        </div>
        <!-- ################################################################################################ -->
    </div>
    <!-- End Top Background Image Wrapper -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row1">
        <section id="ctdetails" class="hoc clear">
            <!-- ################################################################################################ -->
            <ul class="nospace clear">
                <li class="one_quarter first">
                    <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Telepon :</strong>
                            +62 8589 5147 369</span></div>
                </li>
                <li class="one_quarter">
                    <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Email :</strong> pustaka_novel@gmail.com</span></div>
                </li>
                <li class="one_quarter">
                    <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> Senin - Sabtu </strong>
                            08.00 - 18.00pm</span></div>
                </li>
                <li class="one_quarter">
                    <div class="block clear"><a href="#"><i class="fas fa-map-marker-alt"></i></a> <span><strong>Lokasi kami:</strong> Directions to <a href="#">our location</a></span></div>
                </li>
            </ul>
            <!-- ################################################################################################ -->
        </section>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->

    <!-- JAVASCRIPTS -->
    <script src="layout/scripts/jquery.min.js"></script>
    <script src="layout/scripts/jquery.backtotop.js"></script>
    <script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>

</html>