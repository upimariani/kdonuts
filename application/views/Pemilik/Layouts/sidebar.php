<body class="dashboard dashboard_1">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar_blog_1">
                    <div class="sidebar-header">
                        <div class="logo_section">
                        </div>
                    </div>
                    <div class="sidebar_user_info">
                        <div class="icon_setting"></div>
                        <div class="user_profle_side">
                            <div class="user_img"><img class="img-responsive" src="<?= base_url('asset/pluto-1.0.0/') ?>images/layout_img/user_img.jpg" alt="#" /></div>
                            <div class="user_info">
                                <h6>Pemilik KDONUTS</h6>
                                <p><span class="online_animation"></span> Online</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar_blog_2">
                    <h4>General</h4>
                    <ul class="list-unstyled components">
                        <li class="active">
                            <a href="<?= base_url('pemilik/cdashboard') ?>"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>

                        </li>
                        <li>
                            <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Laporan</span></a>
                            <ul class="collapse list-unstyled" id="element">
                                <li><a href="<?= base_url('Pemilik/claporan/transaksi') ?>">> <span>Laporan Transaksi</span></a></li>
                                <li><a href="<?= base_url('Pemilik/claporan/produk') ?>">> <span>Laporan Produk Terjual</span></a></li>
                            </ul>
                        </li>
                        <li><a href="<?= base_url('clogin_user/logout') ?>"><i class="fa fa-sign-out"></i> <span>LogOut</span></a></li>

                    </ul>
                </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <div class="topbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="full">
                            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                            <div class="logo_section">
                            </div>
                        </div>
                    </nav>
                </div>