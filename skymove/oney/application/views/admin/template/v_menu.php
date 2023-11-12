<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url();?>admin/admin">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-cubes"></i>
    </div>
    <div class="sidebar-brand-text mx-3">STOCK CHIN</div>
</a>

<hr class="sidebar-divider my-0">

<li class="nav-item active">
    <a class="nav-link" href="<?php echo base_url();?>admin/admin">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span style="font-size: 1rem;">Dashboard</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?php echo base_url();?>admin/page">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span style="font-size: 1rem;">All Social</span></a>
</li>
<hr class="sidebar-divider">

<div class="sidebar-heading">
    SOCiaL
</div>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#FACEBOOK"
        aria-expanded="true" aria-controls="FACEBOOK">
        <i class="fas fa-fw fa-heart"></i>
        <span>FACEBOOK</span>
    </a>
    <div id="FACEBOOK" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url();?>admin/page/facebook/1">C-CHIN</a>
            <a class="collapse-item" href="<?php echo base_url();?>admin/page/facebook/2">E-CHIN</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#LINE"
        aria-expanded="true" aria-controls="LINE">
        <i class="fas fa-fw fa-heart"></i>
        <span>LINE</span>
    </a>
    <div id="LINE" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url();?>admin/page/line/1">C-CHIN</a>
            <a class="collapse-item" href="<?php echo base_url();?>admin/page/line/2">E-CHIN</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#SHOPEE"
        aria-expanded="true" aria-controls="SHOPEE">
        <i class="fas fa-fw fa-heart"></i>
        <span>SHOPEE</span>
    </a>
    <div id="SHOPEE" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url();?>admin/page/shopee/1">C-CHIN</a>
            <a class="collapse-item" href="<?php echo base_url();?>admin/page/shopee/2">E-CHIN</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#LAZADA"
        aria-expanded="true" aria-controls="LAZADA">
        <i class="fas fa-fw fa-heart"></i>
        <span>LAZADA</span>
    </a>
    <div id="LAZADA" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url();?>admin/page/lazada/1">C-CHIN</a>
            <a class="collapse-item" href="<?php echo base_url();?>admin/page/lazada/2">E-CHIN</a>
        </div>
    </div>
</li>

<hr class="sidebar-divider">

<div class="sidebar-heading">
MANAGE
</div>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#PRODUCT"
        aria-expanded="true" aria-controls="PRODUCT">
        <i class="fas fa-fw fa-bookmark"></i>
        <span>PRODUCT</span>
    </a>
    <div id="PRODUCT" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url();?>admin/page/product">PRODUCT</a>
        </div>
    </div>
</li>

<hr class="sidebar-divider d-none d-md-block">


<div class="sidebar-heading">
REPORT
</div>

<li class="nav-item">
    <a class="nav-link collapsed" href="<?php echo base_url();?>admin/page/report"
        aria-expanded="true" aria-controls="REPORT">
        <i class="fas fa-fw fa-flag"></i>
        <span>REPORT</span>
    </a>
    <!-- <div id="REPORT" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="">REPORT</a>
        </div>
    </div> -->
</li>

<hr class="sidebar-divider d-none d-md-block">

<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>


</ul>
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                    aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search"
                                aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>                        



            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Employee Gunner</span>
                    <img class="img-profile rounded-circle"
                        src="<?php echo base_url();?>adminassets/img/undraw_profile.svg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Settings
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>

        </ul>

    </nav>