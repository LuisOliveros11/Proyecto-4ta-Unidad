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
          <label>
            Navigation
          </label>
          <i class="ph-duotone ph-gauge"></i>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-gauge"></i>
            </span>
            <span class="pc-mtext">Dashboard</span>
            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
            <span class="pc-badge">2</span>
          </a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>dashboard/index.html">Analytics</a></li>
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>dashboard/affiliate.html">Affiliate</a></li>
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>dashboard/finance.html">Finance</a></li>
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>admins/helpdesk-dashboard.html">Helpdesk</a>
            </li>
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>dashboard/invoice.html">Invoice</a></li>
          </ul>
        </li>
        <li class="pc-item pc-caption">
          <label>Widget</label>
          <i class="ph-duotone ph-chart-pie"></i>
        </li>
        <li class="pc-item">
          <a href="<?= BASE_PATH ?>products/" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-projector-screen-chart"></i>
            </span>
            <span class="pc-mtext">
              Productos
            </span>
          </a>
        </li>
        <li class="pc-item">
          <a href="<?= BASE_PATH ?>widget/w_user.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-identification-card"></i>
            </span>
            <span class="pc-mtext">User</span>
          </a>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-shopping-cart"></i>
            </span>
            <span class="pc-mtext">E-commerce</span><span class="pc-arrow"><i
                data-feather="chevron-right"></i></span></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>application/ecom_product.html">Product</a></li>
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>application/ecom_product-details.html">Product
                details</a></li>
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>application/ecom_product-list.html">Product
                List</a></li>
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>application/ecom_product-add.html">Add New
                Product</a></li>
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>application/ecom_checkout.html">Checkout</a>
            </li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link"><span class="pc-micon"><i class="ph-duotone ph-lifebuoy"></i></span><span
              class="pc-mtext">Helpdesk</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../admins/helpdesk-dashboard.html">Dashboard</a></li>
            <li class="pc-item pc-hasmenu">
              <a class="pc-link" href="#!">Ticket<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link"
                    href="<?= BASE_PATH ?>admins/helpdesk-create-ticket.html">Create</a></li>
                <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>admins/helpdesk-ticket.html">List</a></li>
                <li class="pc-item"><a class="pc-link"
                    href="<?= BASE_PATH ?>admins/helpdesk-ticket-details.html">Details</a></li>
              </ul>
            </li>
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>admins/helpdesk-customer.html">Customer</a>
            </li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link"><span class="pc-micon"><i class="ph-duotone ph-newspaper"></i></span><span
              class="pc-mtext">Invoice 2</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>admins/invoice-dashboard.html">Dashboard</a>
            </li>
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
            <span class="pc-mtext">Users</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>application/account-profile.html">Account
                Profile</a></li>
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>application/social-media.html">Social media</a>
            </li>
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>application/user-card.html">User Card</a></li>
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>application/user-list.html">User List</a></li>
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>application/team.html">Team</a></li>
          </ul>
        </li>
    </div>
  </div>
</nav>