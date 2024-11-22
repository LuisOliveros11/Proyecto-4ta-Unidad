<head>
  <?php
  if (isset($_SESSION['detallesUsuario'])) {
      $detallesUsuario = $_SESSION['detallesUsuario'];
      echo $detallesUsuario->name; 
  } else {
      echo "Detalles del usuario no disponibles.";
  }
  ?>
</head>
<!-- [ Header Topbar ] start -->
<header class="pc-header">
  <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
    <div class="me-auto pc-mob-drp">
      <ul class="list-unstyled">
        <!-- ======= Menu collapse Icon ===== -->
        <li class="pc-h-item pc-sidebar-collapse">
          <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
            <i class="ti ti-menu-2"></i>
          </a>
        </li>
        <li class="pc-h-item pc-sidebar-popup">
          <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
            <i class="ti ti-menu-2"></i>
          </a>
        </li>
        <li class="dropdown pc-h-item d-inline-flex d-md-none">
          <a class="pc-head-link dropdown-toggle arrow-none m-0" data-bs-toggle="dropdown" href="#" role="button"
            aria-haspopup="false" aria-expanded="false">
            <i class="ph-duotone ph-magnifying-glass"></i>
          </a>
          <div class="dropdown-menu pc-h-dropdown drp-search">
            <form class="px-3">
              <div class="mb-0 d-flex align-items-center">
                <input type="search" class="form-control border-0 shadow-none" placeholder="Search..." />
                <button class="btn btn-light-secondary btn-search">Search</button>
              </div>
            </form>
          </div>
        </li>
        <li class="pc-h-item d-none d-md-inline-flex">
          <form class="form-search">
            <i class="ph-duotone ph-magnifying-glass icon-search"></i>
            <input type="search" class="form-control" placeholder="Search..." />

            <button class="btn btn-search" style="padding: 0"><kbd>ctrl+k</kbd></button>
          </form>
        </li>
      </ul>
    </div>
    <!-- [Mobile Media Block end] -->
    <div class="ms-auto">
      <ul class="list-unstyled">
        <li class="dropdown pc-h-item d-none d-md-inline-flex">
          <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button"
            aria-haspopup="false" aria-expanded="false">
            <i class="ph-duotone ph-circles-four"></i>
          </a>
          <div class="dropdown-menu dropdown-qta dropdown-menu-end pc-h-dropdown">
            <div class="overflow-hidden">
              <div class="qta-links m-n1">
                <a href="<?= BASE_PATH ?>views/products/index.php" class="dropdown-item">
                  <i class="ph-duotone ph-shopping-cart"></i>
                  <span>E-commerce</span>
                </a>
                <a href="<?= BASE_PATH ?>cupon.php" class="dropdown-item">
                  <i class="ph-duotone ph-lifebuoy"></i>
                  <span>Helpdesk</span>
                </a>
                <a href="<?= BASE_PATH ?>invoicelist.php" class="dropdown-item">
                  <i class="ph-duotone ph-scroll"></i>
                  <span>Invoice</span>
                </a>
                <!-- <a href="#!" class="dropdown-item">
                  <i class="ph-duotone ph-books"></i>
                  <span>Online Courses</span>
                </a> -->
                <a href="<?php echo $detallesUsuario->email; ?> class="dropdown-item">
                  <i class="ph-duotone ph-envelope-open"></i>
                  <span>Mail</span>
                </a>
                <!-- <a href="#!" class="dropdown-item">
                  <i class="ph-duotone ph-chats-circle"></i>
                  <span>Chat</span>
                </a> -->
                <!-- <a href="#!" class="dropdown-item">
                  <i class="ph-duotone ph-currency-circle-dollar"></i>
                  <span>Plans</span>
                </a> -->
                <a href="<?= BASE_PATH ?>userlist.php" class="dropdown-item">
                  <i class="ph-duotone ph-user-circle"></i>
                  <span>Users</span>
                </a>
              </div>
            </div>
          </div>
        </li>
        <li class="dropdown pc-h-item">
          <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button"
            aria-haspopup="false" aria-expanded="false">
            <i class="ph-duotone ph-sun-dim"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
            <a href="#!" class="dropdown-item" onclick="layout_change('dark')">
              <i class="ph-duotone ph-moon"></i>
              <span>Dark</span>
            </a>
            <a href="#!" class="dropdown-item" onclick="layout_change('light')">
              <i class="ph-duotone ph-sun-dim"></i>
              <span>Light</span>
            </a>
            <a href="#!" class="dropdown-item" onclick="layout_change_default()">
              <i class="ph-duotone ph-cpu"></i>
              <span>Default</span>
            </a>
          </div>
        </li>
        <li class="pc-h-item">
          <a class="pc-head-link pct-c-btn" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_pc_layout">
            <i class="ph-duotone ph-gear-six"></i>
          </a>
        </li>
        <li class="dropdown pc-h-item">
          <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button"
            aria-haspopup="false" aria-expanded="false">
            <i class="ph-duotone ph-diamonds-four"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
            <a href="<?= BASE_PATH ?>profile.php" class="dropdown-item">
              <i class="ph-duotone ph-user"></i>
              <span>My Account</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ph-duotone ph-lifebuoy"></i>
              <span>Support</span>
            </a>
            <a href="#" class="dropdown-item" onclick="document.getElementById('logout').submit(); return false;">
              <i class="ph-duotone ph-power"></i>
              <span>Logout</span>
              <form id="logout" action="../../../../../Proyecto-4ta-Unidad/template/app/AuthController.php" method="post">
                      <input type="hidden" name="logout">
              </form>
            </a>
          </div>
        </li>
        
        <li class="dropdown pc-h-item header-user-profile">
          <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button"
            aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false">
            <img src="<?php echo $detallesUsuario->avatar; ?>" alt="user-image" class="user-avtar" />
          </a>
          <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
            <div class="dropdown-header d-flex align-items-center justify-content-between">
              <h5 class="m-0">Profile</h5>
            </div>
            <div class="dropdown-body">
              <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
                <ul class="list-group list-group-flush w-100">
                  <li class="list-group-item">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <img src="<?php echo $detallesUsuario->avatar; ?>" alt="user-image"
                          class="wid-50 rounded-circle" />
                      </div>
                      <div class="flex-grow-1 mx-3">
                        <h5 class="mb-0"><?php echo $detallesUsuario->name . " " . $detallesUsuario->lastname; ?></h5>
                        <a class="link-primary" href="<?php echo $detallesUsuario->email; ?>"><?php echo $detallesUsuario->email;?></a>
                      </div>
                      <span class="badge bg-primary">PRO</span>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <a href="#" class="dropdown-item">
                      <span class="d-flex align-items-center">
                        <i class="ph-duotone ph-envelope-simple"></i>
                        <span>Recently mail</span>
                      </span>
                      <div class="user-group">
                        <img src="<?php echo $detallesUsuario->avatar; ?>" alt="user-image" class="avtar" />
                        <img src="<?php echo $detallesUsuario->avatar; ?>" alt="user-image" class="avtar" />
                        <img src="<?php echo $detallesUsuario->avatar; ?>" alt="user-image" class="avtar" />
                      </div>
                    </a>
                  </li>
                  <li class="list-group-item">
                    
                  </li>
                  <li class="list-group-item">
                    <div class="dropdown-item">
                      <span class="d-flex align-items-center">
                        <i class="ph-duotone ph-globe-hemisphere-west"></i>
                        <span>Languages</span>
                      </span>
                      <span class="flex-shrink-0">
                        <select class="form-select bg-transparent form-select-sm border-0 shadow-none">
                          <option value="1">English</option>
                          <option value="2">Spain</option>
                          <option value="3">Arbic</option>
                        </select>
                      </span>
                    </div>
                    
                    <div class="dropdown-item">
                      <span class="d-flex align-items-center">
                        <i class="ph-duotone ph-moon"></i>
                        <span>Dark mode</span>
                      </span>
                      <div class="form-check form-switch form-check-reverse m-0">
                        <input class="form-check-input f-18" id="dark-mode" type="checkbox" onclick="dark_mode()"
                          role="switch" />
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <a href="<?= BASE_PATH ?>profile.php" class="dropdown-item">
                      <span class="d-flex align-items-center">
                        <i class="ph-duotone ph-user-circle"></i>
                        <span>Edit profile</span>
                      </span>
                    </a>
                  </li>
                  <li class="list-group-item">
                    
                    <a href="#" onclick="document.getElementById('logout').submit(); return false;"
                      class="dropdown-item">
                      <span class="d-flex align-items-center">
                        <i class="ph-duotone ph-power"></i>
                        <span>Logout</span>
                      </span>
                    </a>
                    <form id="logout" action="../../../../../Proyecto-4ta-Unidad/template/app/AuthController.php" method="post">
                      <input type="hidden" name="logout">
                    </form>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</header>
<!-- [ Header ] end -->