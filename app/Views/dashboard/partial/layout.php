<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-------- CDN Link --------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-------- CDN Link --------->

    <!--------- Data Table----- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <!--------- Data Table----- -->

    <!------ Custome Css ------->
    <link rel="stylesheet" href="<?=base_url("style.css"); ?>">
    <!------ Custome Css ------->

    <title><?= $this->renderSection('title'); ?></title>

    <!-------Dashboard Css -------->
  <link rel="shortcut icon" type="image/png" href="<?=base_url("assets/images/logos/favicon.png"); ?>" />
  <link rel="stylesheet" href="<?=base_url("assets/css/styles.min.css"); ?>" />
   <!-------Dashboard Css -------->
</head>

<body id="body" >
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
        
      <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!----- Profile ------>
        
        <div class="">
            <a href="/dashboard" class="d-flex flex-column align-items-center py-2 link-body-emphasis text-decoration-none  ">
            
              <img src="<?= base_url('uploads/img/'.session()->get('image')) ?>" alt="" width="60" height="60" class="rounded-circle">
              <span class="fs-5 fw-semibold"><?= session()->get('name') ?></span>
            </a>
        </div>
        <!----- Profile End------>

        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">

            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>

            <li class="sidebar-item">
                <a href="<?= base_url()?>/dashboard" class="btn btn-toggle d-inline-flex align-items-center rounded border-0 " >
                    <i class="fa-solid fa-gauge btn-icon"></i><span> Dashboard</span>
                </a>
            </li>

            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">UI COMPONENTS</span>
            </li>

            <li class="sidebar-item">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#user-collapse" aria-expanded="false">
                    <i class="fa-solid fa-user btn-icon"></i><span> Tanents</span>
                </button>
                <div class="collapse" id="user-collapse" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ps-4 small">
                        <li><a href="<?= base_url()?>dashboard/all_user" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>All Tanents</span></a></li>
                        <li><a href="<?= base_url()?>dashboard/add_user" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>Add Tanent</span></a></li>
                       
                    </ul>
                </div>
            </li>

            <li class="sidebar-item">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#student-collapse" aria-expanded="false">
                    <i class="fa-solid fa-graduation-cap btn-icon"></i><span> Gatekeeper</span>
                </button>
                <div class="collapse" id="student-collapse" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ps-4 small">
                        <li><a href="<?= base_url()?>dashboard/all_gk" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>GateKeeper List</span></a></li>
                        <li><a href="<?= base_url()?>dashboard/add_gk" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>Add Gatekeeper</span></a></li>
                        
                    </ul>
                </div>
            </li>

            <li class="sidebar-item">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#course-collapse" aria-expanded="false">
                    <i class="fa-brands fa-discourse btn-icon"></i><span> Cleaning Service</span>
                </button>
                <div class="collapse" id="course-collapse" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ps-4 small">
                        <li><a href="<?= base_url()?>dashboard/all_course" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>All Cleaners</span></a></li>
                        <li><a href="<?= base_url()?>dashboard/add_course" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>Add Cleaners</span></a></li>
                       
                    </ul>
                </div>
            </li>

            <li class="sidebar-item">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#batch-collapse" aria-expanded="false">
                    <i class="fas fa-users btn-icon"></i><span> Maintenace</span>
                </button>
                <div class="collapse" id="batch-collapse" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ps-4 small">
                        <li><a href="<?= base_url()?>dashboard/all_batch" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>All facilities</span></a></li>
                        <li><a href="<?= base_url()?>dashboard/add_batch" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>Add Batch</span></a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>Delete Batch</span></a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-item">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#branch-collapse" aria-expanded="false">
                    <i class="fa-solid fa-code-branch btn-icon"></i></i><span> Flat Details</span>
                </button>
                <div class="collapse" id="branch-collapse" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ps-4 small">
                        <li><a href="<?= base_url()?>/dashboard/all_flat" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>Flat List</span></a></li>
                        <li><a href="<?= base_url()?>/dashboard/add_flat" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>Add Flat</span></a></li>
                       
                    </ul>
                </div>
            </li>

            <li class="sidebar-item">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#class-collapse" aria-expanded="false">
                    <i class="fa-brands fa-atlassian btn-icon"></i><span> Payment</span>
                </button>
                <div class="collapse" id="class-collapse" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ps-4 small">
                        <li><a href="<?= base_url()?>dashboard/add_pay" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>Create Payment</span></a></li>
                        <li><a href="<?= base_url()?>dashboard/all_pay" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>Add Class</span></a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>Delete Class</span></a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-item">
                
            </li>

            <li class="sidebar-item">
               
            </li>

            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Login</span>
              </a>
            </li>
            
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->

    
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header ">
        <nav class="navbar navbar-expand-lg navbar-dark">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
              <i class="fa-solid fa-bars"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
              <i class="fa-regular fa-bell"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
             
                <li class="nav-item dropdown">
                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                    aria-expanded="false">
                        <img src="<?= base_url('uploads/img/'.session()->get('image')) ?>" alt="" width="35" height="35" class="rounded-circle">
                    </a>
                </li>
                <li>
                    <a class="btn btn-secondary mx-3"  href="<?= base_url('/')?>">Log out</a>
                </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        <?= $this->renderSection('content'); ?>
        
        
        
      </div>
    </div>
  </div>

<!--------- Data Table Start ----- -->
<script src=" https://code.jquery.com/jquery-3.7.0.js "></script>
<script src=" https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js" ></script>
<script src=" https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script> 
<!--------- Data Table End ----- -->

  <!----- Js CDN Start ------>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!----- Js CDN End ------>

<!------- Custom Js Start -------->
<script src="<?=base_url("jQuery.js")?> "></script>
<!------- Custom Js End -------->

<!-----Dashboard Js Start ------>
  <script src="<?=base_url("assets/js/sidebarmenu.js")?>"></script>
  <script src="<?=base_url("assets/js/app.min.js")?>"></script>
  <script src="<?=base_url("assets/js/dashboard.js")?>"></script> 
<!-----Dashboard Js End ------>

</body>

</html>