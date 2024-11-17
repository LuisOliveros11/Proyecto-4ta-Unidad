<!doctype html>
<html lang="en">

<head>
    <?php
    include "app/config.php";
    session_start();
    include "views/layouts/sidebar.php";
    include "views/layouts/head.php";
    include "views/layouts/navbar.php";
    include "app/ClientController.php";
    $clientController = new ClientController();
    $clientes = $clientController->obtenerClientes();
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
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Membership</a></li>
                                <li class="breadcrumb-item" aria-current="page">Client List</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Client List</h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card table-card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Client List</h5>
                            <button class="btn btn-primary">Add Client</button>
                        </div>
                        <div class="datatable-top">
                            <div class="datatable-dropdown">
                                <label>
                                    <select class="datatable-selector">
                                        <option value="5">5</option>
                                        <option value="10" selected="">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                        <option value="25">25</option>
                                    </select> entries per page
                                </label>
                            </div>
                            <div class="datatable-search">
                                <input class="datatable-input" placeholder="Search..." type="search" title="Search within table" aria-controls="pc-dt-simple">
                            </div>
                        </div>
                        <div class="card-body pt-3">
                            <div class="table-responsive">
                                <table class="table table-hover" id="pc-dt-simple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>Start Date</th>
                                            <th>Status</th>
                                            <th>Plan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img src="<?= BASE_PATH ?>assets/images/user/avatar-1.jpg" alt="user image" class="img-radius wid-40" />
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-0">Airi Satou</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>(123) 4567 890</td>
                                            <td>2023/02/07 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                                            <td class="text-success"><i class="fas fa-circle f-10 m-r-10"></i> Active</td>
                                            <td><span class="badge text-bg-success">Casual</span></td>
                                            <td>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-eye f-20"></i>
                                                </a>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-edit f-20"></i>
                                                </a>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-trash f-20"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img src="<?= BASE_PATH ?>assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40" />
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-0">Ashton Cox</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>(123) 4567 890</td>
                                            <td>2023/02/01 <span class="text-muted text-sm d-block">02:14 PM</span></td>
                                            <td class="text-secondary"><i class="fas fa-circle f-10 m-r-10"></i> Inactive</td>
                                            <td><span class="badge text-bg-primary">Addicted</span></td>
                                            <td>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-eye f-20"></i>
                                                </a>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-edit f-20"></i>
                                                </a>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-trash f-20"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img src="<?= BASE_PATH ?>assets/images/user/avatar-3.jpg" alt="user image" class="img-radius wid-40" />
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-0">Bradley Greer</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>(123) 4567 890</td>
                                            <td>2023/01/22 <span class="text-muted text-sm d-block">10:32 AM</span></td>
                                            <td class="text-success"><i class="fas fa-circle f-10 m-r-10"></i> Active</td>
                                            <td><span class="badge text-bg-warning">Diehard</span></td>
                                            <td>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-eye f-20"></i>
                                                </a>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-edit f-20"></i>
                                                </a>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-trash f-20"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img src="<?= BASE_PATH ?>assets/images/user/avatar-4.jpg" alt="user image" class="img-radius wid-40" />
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-0">Brielle Williamson</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>(123) 4567 890</td>
                                            <td>2023/02/07 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                                            <td class="text-success"><i class="fas fa-circle f-10 m-r-10"></i> Active</td>
                                            <td><span class="badge text-bg-success">Casual</span></td>
                                            <td>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-eye f-20"></i>
                                                </a>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-edit f-20"></i>
                                                </a>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-trash f-20"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img src="<?= BASE_PATH ?>assets/images/user/avatar-5.jpg" alt="user image" class="img-radius wid-40" />
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-0">Airi Satou</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>(123) 4567 890</td>
                                            <td>2023/02/07 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                                            <td class="text-success"><i class="fas fa-circle f-10 m-r-10"></i> Active</td>
                                            <td><span class="badge text-bg-success">Casual</span></td>
                                            <td>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-eye f-20"></i>
                                                </a>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-edit f-20"></i>
                                                </a>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-trash f-20"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img src="<?= BASE_PATH ?>assets/images/user/avatar-6.jpg" alt="user image" class="img-radius wid-40" />
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-0">Ashton Cox</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>(123) 4567 890</td>
                                            <td>2023/02/01 <span class="text-muted text-sm d-block">02:14 PM</span></td>
                                            <td class="text-secondary"><i class="fas fa-circle f-10 m-r-10"></i> Inactive</td>
                                            <td><span class="badge text-bg-primary">Addicted</span></td>
                                            <td>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-eye f-20"></i>
                                                </a>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-edit f-20"></i>
                                                </a>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-trash f-20"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img src="<?= BASE_PATH ?>assets/images/user/avatar-7.jpg" alt="user image" class="img-radius wid-40" />
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-0">Bradley Greer</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>(123) 4567 890</td>
                                            <td>2023/01/22 <span class="text-muted text-sm d-block">10:32 AM</span></td>
                                            <td class="text-success"><i class="fas fa-circle f-10 m-r-10"></i> Active</td>
                                            <td><span class="badge text-bg-warning">Diehard</span></td>
                                            <td>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-eye f-20"></i>
                                                </a>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-edit f-20"></i>
                                                </a>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-trash f-20"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img src="<?= BASE_PATH ?>assets/images/user/avatar-8.jpg" alt="user image" class="img-radius wid-40" />
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-0">Brielle Williamson</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>(123) 4567 890</td>
                                            <td>2023/02/07 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                                            <td class="text-success"><i class="fas fa-circle f-10 m-r-10"></i> Active</td>
                                            <td><span class="badge text-bg-success">Casual</span></td>
                                            <td>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-eye f-20"></i>
                                                </a>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-edit f-20"></i>
                                                </a>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-trash f-20"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img src="<?= BASE_PATH ?>assets/images/user/avatar-9.jpg" alt="user image" class="img-radius wid-40" />
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-0">Airi Satou</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>(123) 4567 890</td>
                                            <td>2023/02/07 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                                            <td class="text-success"><i class="fas fa-circle f-10 m-r-10"></i> Active</td>
                                            <td><span class="badge text-bg-success">Casual</span></td>
                                            <td>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-eye f-20"></i>
                                                </a>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-edit f-20"></i>
                                                </a>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-trash f-20"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img src="<?= BASE_PATH ?>assets/images/user/avatar-10.jpg" alt="user image" class="img-radius wid-40" />
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-0">Ashton Cox</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>(123) 4567 890</td>
                                            <td>2023/02/01 <span class="text-muted text-sm d-block">02:14 PM</span></td>
                                            <td class="text-secondary"><i class="fas fa-circle f-10 m-r-10"></i> Inactive</td>
                                            <td><span class="badge text-bg-primary">Addicted</span></td>
                                            <td>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-eye f-20"></i>
                                                </a>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-edit f-20"></i>
                                                </a>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-trash f-20"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img src="<?= BASE_PATH ?>assets/images/user/avatar-4.jpg" alt="user image" class="img-radius wid-40" />
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-0">Bradley Greer</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>(123) 4567 890</td>
                                            <td>2023/01/22 <span class="text-muted text-sm d-block">10:32 AM</span></td>
                                            <td class="text-success"><i class="fas fa-circle f-10 m-r-10"></i> Active</td>
                                            <td><span class="badge text-bg-warning">Diehard</span></td>
                                            <td>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-eye f-20"></i>
                                                </a>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-edit f-20"></i>
                                                </a>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-trash f-20"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img src="<?= BASE_PATH ?>assets/images/user/avatar-6.jpg" alt="user image" class="img-radius wid-40" />
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-0">Brielle Williamson</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>(123) 4567 890</td>
                                            <td>2023/02/07 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                                            <td class="text-success"><i class="fas fa-circle f-10 m-r-10"></i> Active</td>
                                            <td><span class="badge text-bg-success">Casual</span></td>
                                            <td>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-eye f-20"></i>
                                                </a>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-edit f-20"></i>
                                                </a>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-trash f-20"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="datatable-bottom">
                                <div class="datatable-info">Showing 11 to 12 of 12 entries</div>
                                <nav class="datatable-pagination">
                                    <ul class="datatable-pagination-list">
                                        <li class="datatable-pagination-list-item"><button data-page="1" class="datatable-pagination-list-item-link" aria-label="Page 1">‹</button></li>
                                        <li class="datatable-pagination-list-item"><button data-page="1" class="datatable-pagination-list-item-link" aria-label="Page 1">1</button></li>
                                        <li class="datatable-pagination-list-item datatable-active"><button data-page="2" class="datatable-pagination-list-item-link" aria-label="Page 2">2</button></li>
                                        <li class="datatable-pagination-list-item datatable-hidden datatable-disabled"><button data-page="2" class="datatable-pagination-list-item-link" aria-label="Page 2">›</button></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
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


    <script type="module">
        import {
            DataTable
        } from '../assets/js/plugins/module.js';
        window.dt = new DataTable('#pc-dt-simple');
    </script>
</body>

</html>