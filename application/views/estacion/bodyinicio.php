<?php
    function Conectarse() {
                  $host="localhost";
                  $user="root"; 
                  $pass="";
                  $database="intranet";

                  $link = new mysqli($host, $user, $pass, $database);
                  $acentos= $link->query("SET NAMES 'utf8'");

                  if($link->connect_errno > 0){
                    echo "ERROR AL CONECTARSE A LA BASE DE DATOS";
                  }else{
                    return $link;
                    
                  }
                }

                $con = Conectarse();
?>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="inicio">
        <!-- <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div> -->
        <img src="<?php echo base_url();?>assets/img/logo.png" style="height: 6em;" alt="">
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="inicio">
          <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
          <span>Panel Inicial</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading"> </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="estaciones" data-toggle="" data-target="" aria-expanded="true" aria-controls="collapseTwo">
          <!-- <i class="fas fa-fw fa-cog"></i> -->
          <span>Estaciones</span>
        </a>
        <!-- <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div> -->
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="estaciones" data-toggle="" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <!-- <i class="fas fa-fw fa-wrench"></i> -->
          <span>Proyectos</span>
        </a>
        <!-- <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div> -->
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading"> </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <!-- <i class="fas fa-fw fa-folder"></i> -->
          <span>Configuración</span>
        </a>
        <!-- <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div> -->
      </li>

      <!-- Nav Item - Charts -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li> -->

      <!-- Nav Item - Tables -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li> -->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <!-- <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                Counter - Alerts
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              Dropdown - Alerts
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li> -->

            <!-- Nav Item - Messages -->
            <!-- <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                Counter - Messages
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              Dropdown - Messages
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li> -->

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?php echo "Valerie Luna"; ?> </span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
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
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div id="regreso" style="display: none !important;" class="d-sm-flex align-items-center justify-content-between mb-4"> <h1 class="h3 mb-0 text-gray-800"> < </h1> </div>

          <!-- Page Heading -->
          <!-- Content Row -->
          <!-- CHIHUAHUA -->
          <div class="row" id="est8" style="display: none;">
            <?php 
                  $sqlestacion8 = "SELECT razonSocial as nombre, rfc as clave FROM cliente WHERE idEstado = 8 GROUP BY razonSocial ORDER BY razonSocial ASC";
                  $resultado8 = mysqli_query($con, $sqlestacion8);
                  while ($row = $resultado8->fetch_object()) { ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                      <a class="nav-link" href="estaciones/<?php echo ($row->clave); ?>" data-toggle="" data-target="" aria-expanded="true" aria-controls="collapseTwo"> <div class="card border-left-primary shadow h-100 py-2" id="<?php echo ($row->clave); ?>" >
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"></div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo ($row->nombre); ?></div>
                            </div>
                            <!-- <div class="col-auto"> <i class="fas fa-calendar fa-2x text-gray-300"></i> </div> -->
                          </div>
                        </div>
                      </div> </a>
                    </div>
            <?php }
            ?>
          </div>

          <div class="row" id="est5" style="display: none;">
            <?php 
                  $sqlestacion5 = "SELECT razonSocial as nombre FROM cliente WHERE idEstado = 5 GROUP BY razonSocial ORDER BY razonSocial ASC";
                  $resultado5 = mysqli_query($con, $sqlestacion5);
                  while ($row = $resultado5->fetch_object()) { ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                      <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"></div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo ($row->nombre); ?></div>
                            </div>
                            <!-- <div class="col-auto"> <i class="fas fa-calendar fa-2x text-gray-300"></i> </div> -->
                          </div>
                        </div>
                      </div>
                    </div>
            <?php }
            ?>
          </div>

          <div class="row" id="est10" style="display: none;">
            <?php 
                  $sqlestacion10 = "SELECT razonSocial as nombre FROM cliente WHERE idEstado = 10 GROUP BY razonSocial ORDER BY razonSocial ASC";
                  $resultado10 = mysqli_query($con, $sqlestacion10);
                  while ($row = $resultado10->fetch_object()) { ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                      <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"></div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo ($row->nombre); ?></div>
                            </div>
                            <!-- <div class="col-auto"> <i class="fas fa-calendar fa-2x text-gray-300"></i> </div> -->
                          </div>
                        </div>
                      </div>
                    </div>
            <?php }
            ?>
          </div>

          <div class="row" id="est11" style="display: none;">
            <?php 
                  $sqlestacion11 = "SELECT razonSocial as nombre FROM cliente WHERE idEstado = 11 GROUP BY razonSocial ORDER BY razonSocial ASC";
                  $resultado11 = mysqli_query($con, $sqlestacion11);
                  while ($row = $resultado11->fetch_object()) { ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                      <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"></div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo ($row->nombre); ?></div>
                            </div>
                            <!-- <div class="col-auto"> <i class="fas fa-calendar fa-2x text-gray-300"></i> </div> -->
                          </div>
                        </div>
                      </div>
                    </div>
            <?php }
            ?>
          </div>

          <div class="row" id="est12" style="display: none;">
            <?php 
                  $sqlestacion12 = "SELECT razonSocial as nombre FROM cliente WHERE idEstado = 12 GROUP BY razonSocial ORDER BY razonSocial ASC";
                  $resultado12 = mysqli_query($con, $sqlestacion12);
                  while ($row = $resultado12->fetch_object()) { ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                      <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"></div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo ($row->nombre); ?></div>
                            </div>
                            <!-- <div class="col-auto"> <i class="fas fa-calendar fa-2x text-gray-300"></i> </div> -->
                          </div>
                        </div>
                      </div>
                    </div>
            <?php }
            ?>
          </div>

          <div class="row" id="est13" style="display: none;">
            <?php 
                  $sqlestacion13 = "SELECT razonSocial as nombre FROM cliente WHERE idEstado = 13 GROUP BY razonSocial ORDER BY razonSocial ASC";
                  $resultado13 = mysqli_query($con, $sqlestacion13);
                  while ($row = $resultado13->fetch_object()) { ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                      <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"></div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo ($row->nombre); ?></div>
                            </div>
                            <!-- <div class="col-auto"> <i class="fas fa-calendar fa-2x text-gray-300"></i> </div> -->
                          </div>
                        </div>
                      </div>
                    </div>
            <?php }
            ?>
          </div>

          <div class="row" id="est14" style="display: none;">
            <?php 
                  $sqlestacion14 = "SELECT razonSocial as nombre FROM cliente WHERE idEstado = 14 GROUP BY razonSocial ORDER BY razonSocial ASC";
                  $resultado14 = mysqli_query($con, $sqlestacion14);
                  while ($row = $resultado14->fetch_object()) { ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                      <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"></div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo ($row->nombre); ?></div>
                            </div>
                            <!-- <div class="col-auto"> <i class="fas fa-calendar fa-2x text-gray-300"></i> </div> -->
                          </div>
                        </div>
                      </div>
                    </div>
            <?php }
            ?>
          </div>

          <div class="row" id="est15" style="display: none;">
            <?php 
                  $sqlestacion15 = "SELECT razonSocial as nombre FROM cliente WHERE idEstado = 15 GROUP BY razonSocial ORDER BY razonSocial ASC";
                  $resultado15 = mysqli_query($con, $sqlestacion14);
                  while ($row = $resultado15->fetch_object()) { ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                      <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"></div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo ($row->nombre); ?></div>
                            </div>
                            <!-- <div class="col-auto"> <i class="fas fa-calendar fa-2x text-gray-300"></i> </div> -->
                          </div>
                        </div>
                      </div>
                    </div>
            <?php }
            ?>
          </div>

          <div class="row" id="est16" style="display: none;">
            <?php 
                  $sqlestacion16 = "SELECT razonSocial as nombre FROM cliente WHERE idEstado = 16 GROUP BY razonSocial ORDER BY razonSocial ASC";
                  $resultado16 = mysqli_query($con, $sqlestacion16);
                  while ($row = $resultado16->fetch_object()) { ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                      <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"></div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo ($row->nombre); ?></div>
                            </div>
                            <!-- <div class="col-auto"> <i class="fas fa-calendar fa-2x text-gray-300"></i> </div> -->
                          </div>
                        </div>
                      </div>
                    </div>
            <?php }
            ?>
          </div>

          <div class="row" id="est17" style="display: none;">
            <?php 
                  $sqlestacion17 = "SELECT razonSocial as nombre FROM cliente WHERE idEstado = 17 GROUP BY razonSocial ORDER BY razonSocial ASC";
                  $resultado17 = mysqli_query($con, $sqlestacion17);
                  while ($row = $resultado17->fetch_object()) { ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                      <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"></div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo ($row->nombre); ?></div>
                            </div>
                            <!-- <div class="col-auto"> <i class="fas fa-calendar fa-2x text-gray-300"></i> </div> -->
                          </div>
                        </div>
                      </div>
                    </div>
            <?php }
            ?>
          </div>

          <div class="row" id="est19" style="display: none;">
            <?php 
                  $sqlestacion19 = "SELECT razonSocial as nombre FROM cliente WHERE idEstado = 19 GROUP BY razonSocial ORDER BY razonSocial ASC";
                  $resultado19 = mysqli_query($con, $sqlestacion19);
                  while ($row = $resultado19->fetch_object()) { ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                      <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"></div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo ($row->nombre); ?></div>
                            </div>
                            <!-- <div class="col-auto"> <i class="fas fa-calendar fa-2x text-gray-300"></i> </div> -->
                          </div>
                        </div>
                      </div>
                    </div>
            <?php }
            ?>
          </div>

          <div class="row" id="est22" style="display: none;">
            <?php 
                  $sqlestacion22 = "SELECT razonSocial as nombre FROM cliente WHERE idEstado = 22 GROUP BY razonSocial ORDER BY razonSocial ASC";
                  $resultado22 = mysqli_query($con, $sqlestacion22);
                  while ($row = $resultado22->fetch_object()) { ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                      <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"></div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo ($row->nombre); ?></div>
                            </div>
                            <!-- <div class="col-auto"> <i class="fas fa-calendar fa-2x text-gray-300"></i> </div> -->
                          </div>
                        </div>
                      </div>
                    </div>
            <?php }
            ?>
          </div>

          <div class="row" id="est24" style="display: none;">
            <?php 
                  $sqlestacion24 = "SELECT razonSocial as nombre FROM cliente WHERE idEstado = 24 GROUP BY razonSocial ORDER BY razonSocial ASC";
                  $resultado24 = mysqli_query($con, $sqlestacion24);
                  while ($row = $resultado24->fetch_object()) { ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                      <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"></div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo ($row->nombre); ?></div>
                            </div>
                            <!-- <div class="col-auto"> <i class="fas fa-calendar fa-2x text-gray-300"></i> </div> -->
                          </div>
                        </div>
                      </div>
                    </div>
            <?php }
            ?>
          </div>

          <div class="row" id="est28" style="display: none;">
            <?php 
                  $sqlestacion28 = "SELECT razonSocial as nombre FROM cliente WHERE idEstado = 28 GROUP BY razonSocial ORDER BY razonSocial ASC";
                  $resultado28 = mysqli_query($con, $sqlestacion28);
                  while ($row = $resultado28->fetch_object()) { ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                      <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"></div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo ($row->nombre); ?></div>
                            </div>
                            <!-- <div class="col-auto"> <i class="fas fa-calendar fa-2x text-gray-300"></i> </div> -->
                          </div>
                        </div>
                      </div>
                    </div>
            <?php }
            ?>
          </div>

          <div class="row" id="est30" style="display: none;">
            <?php 
                  $sqlestacion30 = "SELECT razonSocial as nombre FROM cliente WHERE idEstado = 30 GROUP BY razonSocial ORDER BY razonSocial ASC";
                  $resultado30 = mysqli_query($con, $sqlestacion30);
                  while ($row = $resultado30->fetch_object()) { ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                      <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"></div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo ($row->nombre); ?></div>
                            </div>
                            <!-- <div class="col-auto"> <i class="fas fa-calendar fa-2x text-gray-300"></i> </div> -->
                          </div>
                        </div>
                      </div>
                    </div>
            <?php }
            ?>
          </div>

          <div class="row" id="est32" style="display: none;">
            <?php 
                  $sqlestacion32 = "SELECT razonSocial as nombre FROM cliente WHERE idEstado = 32 GROUP BY razonSocial ORDER BY razonSocial ASC";
                  $resultado32 = mysqli_query($con, $sqlestacion32);
                  while ($row = $resultado32->fetch_object()) { ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                      <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"></div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo ($row->nombre); ?></div>
                            </div>
                            <!-- <div class="col-auto"> <i class="fas fa-calendar fa-2x text-gray-300"></i> </div> -->
                          </div>
                        </div>
                      </div>
                    </div>
            <?php }
            ?>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
                <!-- Card Header - Dropdown -->
                <!-- Card Body -->
                

            <!-- Pie Chart -->
                <!-- Card Header - Dropdown -->                
                <!-- Card Body -->
          </div>

          <!-- Content Row -->
          <div class="row" id="estadosE">
            <?php 
                  $sqlestados = "SELECT estado.idEstado as p, estado.nombre as nombrestado FROM cliente INNER JOIN estado ON cliente.idEstado = estado.idEstado GROUP BY estado.nombre ORDER BY estado.nombre ASC";
                  $resultado = mysqli_query($con, $sqlestados);
                  while ($row = $resultado->fetch_object()) { ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                      <div class="card border-left-primary shadow h-100 py-2" id="estado<?php echo ($row->p); ?>">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Estado de</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo ($row->nombrestado); ?></div>
                            </div>
                            <!-- <div class="col-auto"> <i class="fas fa-calendar fa-2x text-gray-300"></i> </div> -->
                          </div>
                        </div>
                      </div>
                    </div>
            <?php }
            ?>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->