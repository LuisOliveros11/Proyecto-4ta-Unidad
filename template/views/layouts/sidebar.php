<script>
  const logoutSpan = document.getElementById('logout-span');
  logoutSpan.addEventListener('click', function() {
    window.location.href = 'https://www.google.com';
  });
</script>
<!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="<?= BASE_PATH ?>views/home.php" class="b-brand text-primary">
        <!-- ========   Change your logo from here   ============ -->
        <img src="<?= BASE_PATH ?>assets/images/logo-dark.svg" alt="logo image" class="logo-lg" />
      </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">

        <li class="pc-item pc-caption">
          <label>Widget</label>
          <i class="ph-duotone ph-chart-pie"></i>
        </li>

        <li class="pc-item">
          <a href="<?= BASE_PATH ?>profile.php" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-identification-card"></i>
            </span>
            <span class="pc-mtext">User</span>
          </a>
        </li>

        <li class="pc-item pc-hasmenu">
          <a href="<?= BASE_PATH ?>views/products/index.php" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-shopping-cart"></i>
            </span>
            <span class="pc-mtext">E-commerce</span>
            <span class="pc-arrow">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </span>
          </a>
          <ul class="pc-submenu">
            <li class="pc-item">
              <a class="pc-link" href="<?= BASE_PATH ?>views/products/index.php">Product</a>
            </li>
            <li class="pc-item">
              <a class="pc-link" href="<?= BASE_PATH ?>views/products/details.php">Product details</a>
            </li>
            <li class="pc-item">
              <a class="pc-link" href="<?= BASE_PATH ?>views/products/index.php">Product List</a>
            </li>
            <li class="pc-item">
              <a class="pc-link" href="<?= BASE_PATH ?>views/products/create.php">Add New Product</a>
            </li>
          </ul>
        </li>


        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon"><i class="ph-duotone ph-lifebuoy"></i></span>
            <span class="pc-mtext">Helpdesk</span>
            <span class="pc-arrow">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </span>
          </a>
          <ul class="pc-submenu">
            <li class="pc-item">
              <a class="pc-link" href="<?= BASE_PATH ?>views/home.php">Dashboard</a>
            </li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link">
                Ticket
                <span class="pc-arrow">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                    <polyline points="9 18 15 12 9 6"></polyline>
                  </svg>
                </span>
              </a>
              <ul class="pc-submenu">
                <li class="pc-item">
                  <a class="pc-link" href="<?= BASE_PATH ?>cupon.php">Create</a>
                </li>
                <li class="pc-item">
                  <a class="pc-link" href="<?= BASE_PATH ?>ordenes.php">List</a>
                </li>
                <li class="pc-item">
                  <a class="pc-link" href="<?= BASE_PATH ?>cupon.php">Details</a>
                </li>
              </ul>
            </li>
            <li class="pc-item">
              <a class="pc-link" href="<?= BASE_PATH ?>clienteview.php">Customer</a>
            </li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon"><i class="ph-duotone ph-newspaper"></i></span>
            <span class="pc-mtext">Invoice</span>
            <span class="pc-arrow">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </span>
          </a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>invoicelist.php">List</a></li>
          </ul>
        </li>


        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-user-circle"></i>
            </span>
            <span class="pc-mtext">Users</span>
            <span class="pc-arrow">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </span>
          </a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>profile.php">Account Profile</a></li>
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>clienteview.php">Social Media</a></li>
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>clientcreate.php">Add client</a></li>
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>userlist.php">User List</a></li>
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>invoicelist.php">Team</a></li>
          </ul>
        </li>

    </div>
  </div>
</nav>