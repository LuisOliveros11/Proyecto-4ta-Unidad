<!doctype html>
<html lang="en">

<head>
  <?php
  include "app/config.php";
  include "views/layouts/sidebar.php";
  include "views/layouts/head.php";
  include "views/layouts/navbar.php";
  ?>
</head>
  

<body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr"
  data-pc-theme="light">

  <div class="pc-container">
    <div class="pc-content">
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">Account Profile</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-lg-5 col-xxl-3">
              <div class="card overflow-hidden">
                <div class="card-body position-relative">
                  <div class="text-center mt-3">
                    <div class="chat-avtar d-inline-flex mx-auto">
                    <img class="rounded-circle img-fluid wid-90 img-thumbnail"
                        src="<?php echo $detallesUsuario->avatar; ?>" alt="User image" />
                      <i class="chat-badge bg-success me-2 mb-2"></i>
                    </div>
                    <h5 class="mb-0"><?php echo $detallesUsuario->name . " " . $detallesUsuario->lastname; ?></h5>
                    <div class="row g-3">
                      <div class="col-4">
                        <h5 class="mb-0">86</h5>
                        <small class="text-muted">Post</small>
                      </div>
                      <div class="col-4 border border-top-0 border-bottom-0">
                        <h5 class="mb-0">40</h5>
                        <small class="text-muted">Project</small>
                      </div>
                      <div class="col-4">
                        <h5 class="mb-0">4.5K</h5>
                        <small class="text-muted">Members</small>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="nav flex-column nav-pills list-group list-group-flush account-pills mb-0" id="user-set-tab"
                  role="tablist" aria-orientation="vertical">
                  <a class="nav-link list-group-item list-group-item-action active" id="user-set-profile-tab"
                    data-bs-toggle="pill" href="#user-set-profile" role="tab" aria-controls="user-set-profile"
                    aria-selected="true">
                    <span class="f-w-500"><i class="ph-duotone ph-user-circle m-r-10"></i>Profile Overview</span>
                  </a>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <h5>Personal information</h5>
                </div>
                <div class="card-body position-relative">
                  <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                    <p class="mb-0 text-muted me-1">Email</p>
                    <h5 class="mb-0"><?php echo $detallesUsuario->email?></h5>
                  </div>
                  <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                    <p class="mb-0 text-muted me-1">Role</p>
                    <h5 class="mb-0"><?php echo $detallesUsuario->role?></h5>
                  </div>
                  <div class="d-inline-flex align-items-center justify-content-between w-100">
                    <p class="mb-0 text-muted me-1">Phone</p>
                    <h5 class="mb-0"><?php echo $detallesUsuario->phone_number?></h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-xxl-9">
              <div class="tab-content" id="user-set-tabContent">
                <div class="tab-pane fade show active" id="user-set-profile" role="tabpanel"
                  aria-labelledby="user-set-profile-tab">
                </div>
                <div class="card">
                  <div class="card-header">
                    <h5>Personal Details</h5>
                  </div>
                  <div class=" card-body">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item px-0 pt-0">
                        <div class="row">
                          <div class="col-md-6">
                            <p class="mb-1 text-muted">Name</p>
                            <h5 class="mb-0"><?php echo $detallesUsuario->name?></h5>
                          </div>
                          <div class="col-md-6">
                            <p class="mb-1 text-muted">Last Name</p>
                            <h5 class="mb-0"><?php echo $detallesUsuario->lastname?></h5>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item px-0">
                        <div class="row">
                          <div class="col-md-6">
                            <p class="mb-1 text-muted">Email</p>
                            <h5 class="mb-0"><?php echo $detallesUsuario->email?></h5>
                          </div>
                          <div class="col-md-6">
                            <p class="mb-1 text-muted">Role</p>
                            <h5 class="mb-0"><?php echo $detallesUsuario->role?></h5>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item px-0 pb-0">
                        <div class="row">
                          <div class="col-md-6">
                            <p class="mb-1 text-muted">Created At</p>
                            <h5 class="mb-0"><?php echo $detallesUsuario->created_at?></h5>
                          </div>
                          <div class="col-md-6">
                            <p class="mb-1 text-muted">Updated At</p>
                            <h5 class="mb-0"><?php echo $detallesUsuario->updated_at?></h5>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h5>Active Sessions</h5>
                  </div>
                  <div class="card-body">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item px-0 pt-0">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="me-2">
                            <div class="d-flex align-items-center">
                              <div class="avtar bg-light-primary">
                                <i class="ph-duotone ph-desktop f-24"></i>
                              </div>
                              <div class="ms-2">
                                <p class="mb-1">Celt Desktop</p>
                                <p class="mb-0 text-muted">4351 Deans Lane</p>
                              </div>
                            </div>
                          </div>
                          <button class="btn btn-link-danger">Logout</button>
                        </div>
                      </li>
                      <li class="list-group-item px-0 pb-0">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="me-2">
                            <div class="d-flex align-items-center">
                              <div class="avtar bg-light-primary">
                                <i class="ph-duotone ph-device-tablet-camera f-24"></i>
                              </div>
                              <div class="ms-2">
                                <p class="mb-1">Moon Tablet</p>
                                <p class="mb-0 text-muted">4185 Michigan Avenue</p>
                              </div>
                            </div>
                          </div>
                          <button class="btn btn-link-danger">Logout</button>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body text-end">
                    <button class="btn btn-primary">Update Profile</button>
                    <button class="btn btn-danger" style="margin-right: 10px;">Delete Account</button>
                    <!-- APONER UN MODAL DE "SEGURO QUE" -->
                  </div>
                </div>
              </div>
              <script src="../assets/js/plugins/popper.min.js"></script>
              <script src="../assets/js/plugins/simplebar.min.js"></script>
              <script src="../assets/js/plugins/bootstrap.min.js"></script>
              <script src="../assets/js/fonts/custom-font.js"></script>
              <script src="../assets/js/pcoded.js"></script>
              <script src="../assets/js/plugins/feather.min.js"></script>


              <script>
                layout_change('light');
              </script>

              <script>
                layout_sidebar_change('light');
              </script>

              <script>
                change_box_container('false');
              </script>

              <script>
                layout_caption_change('true');
              </script>

              <script>
                layout_rtl_change('false');
              </script>

              <script>
                preset_change('preset-1');
              </script>

</body>

</html>