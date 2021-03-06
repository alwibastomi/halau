<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Brand <sup>Web</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <?php if ($level == 1) { ?>
        <li class="nav-item <?php if($this->uri->segment(1)=="Dashboard"){echo "active";}?>" >
            <a class="nav-link" href="<?= base_url('Dashboard') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                manager user
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item <?php if($this->uri->segment(1)=="Penulis"){echo "active";}?>">
                <a class="nav-link " href="<?= base_url('Penulis') ?>">
                    <i class="fas fa-fw fa-pen-alt"></i>
                    <span>Tambah Penulis</span></a>
                </li>

                <!-- Nav Item - Tables -->
                <li class="nav-item <?php if($this->uri->segment(1)=="Activity"){echo "active";}?>">
                    <a class="nav-link" href="<?= base_url('Activity') ?>">
                        <i class="fas fa-fw fa-user-clock"></i>
                        <span>Activity Log</span></a>
                    </li>

                    <!-- Divider -->
                    <hr class="sidebar-divider d-none d-md-block">
                    <!-- Heading -->
                    <div class="sidebar-heading">
                        landing page
                    </div>

                    <!-- Nav Item - Charts -->
                    <li class="nav-item <?php if($this->uri->segment(1)=="Menu"){echo "active";}?>">
                        <a class="nav-link" href="<?= base_url('Menu') ?>">
                            <i class="fas fa-fw fa-folder-plus"></i>
                            <span>Menu & Href</span></a>
                        </li>

                        <!-- Nav Item - Tables -->
                        <li class="nav-item <?php if($this->uri->segment(1)=="Artikel"){echo "active";}?>">
                            <a class="nav-link" href="<?= base_url('Artikel') ?>">
                                <i class="fas fa-fw fa-file-alt"></i>
                                <span>Artikel</span></a>
                            </li>
                            <li class="nav-item <?php if($this->uri->segment(1)=="Iklan"){echo "active";}?>">
                                <a class="nav-link" href="<?= base_url('Iklan') ?>">
                                    <i class="fas fa-fw fa-ad"></i>
                                    <span>Iklan</span></a>
                                </li>
                                <li class="nav-item <?php if($this->uri->segment(1)=="Matpel"){echo "active";}?>">
                                <a class="nav-link" href="<?= base_url('Matpel') ?>">
                                    <i class="fas fa-fw fa-ad"></i>
                                    <span>Matpel</span></a>
                                </li>
                                <!-- Nav Item - Dashboard -->
                                

                                <!-- Divider -->
                                <hr class="sidebar-divider">

                                <!-- Heading -->
                                <div class="sidebar-heading">
                                    RPP ONLINE
                                </div>
                            <?php } ?>
                            

                            <!-- Nav Item - Charts -->
                            <li class="nav-item <?php if($this->uri->segment(1)=="Datarpp"){echo "active";}?>">
                                <a class="nav-link" href="<?= site_url('Datarpp') ?>">
                                    <i class="fas fa-fw fa-table"></i>
                                    <span>Data RPP</span></a>
                                </li>


                                <!-- Sidebar Toggler (Sidebar) -->
                                <div class="text-center d-none d-md-inline">
                                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                                </div>

                            </ul>