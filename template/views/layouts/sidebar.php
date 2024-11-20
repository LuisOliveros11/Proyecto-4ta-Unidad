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
              <a class="pc-link" href="<?= BASE_PATH ?>application/ecom_product-details.html">Product details</a>
            </li>
            <li class="pc-item">
              <a class="pc-link" href="<?= BASE_PATH ?>application/ecom_product-list.html">Product List</a>
            </li>
            <li class="pc-item">
              <a class="pc-link" href="<?= BASE_PATH ?>application/ecom_product-add.html">Add New Product</a>
            </li>
            <li class="pc-item">
              <a class="pc-link" href="<?= BASE_PATH ?>application/ecom_checkout.html">Checkout</a>
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
              <a class="pc-link" href="../admins/helpdesk-dashboard.html">Dashboard</a>
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
                  <a class="pc-link" href="<?= BASE_PATH ?>admins/helpdesk-create-ticket.html">Create</a>
                </li>
                <li class="pc-item">
                  <a class="pc-link" href="<?= BASE_PATH ?>admins/helpdesk-ticket.html">List</a>
                </li>
                <li class="pc-item">
                  <a class="pc-link" href="<?= BASE_PATH ?>admins/helpdesk-ticket-details.html">Details</a>
                </li>
              </ul>
            </li>
            <li class="pc-item">
              <a class="pc-link" href="<?= BASE_PATH ?>admins/helpdesk-customer.html">Customer</a>
            </li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon"><i class="ph-duotone ph-newspaper"></i></span>
            <span class="pc-mtext">Invoice 2</span>
            <span class="pc-arrow">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </span>
          </a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>admins/invoice-create.html">Create</a></li>
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>admins/invoice-view.html">Details</a></li>
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>admins/invoice-list.html">List</a></li>
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>admins/invoice-edit.html">Edit</a></li>
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