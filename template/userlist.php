<!doctype html>
<html lang="en">
<!-- [Head] start -->

<head>
    <?php
    include "app/config.php";
    session_start();
    include "views/layouts/sidebar.php";
    include "views/layouts/head.php";
    include "views/layouts/navbar.php";
    include "app/UserController.php";
    $userController = new UserController();
    $usuarios = $userController->obtenerUsuarios();
    ?>

</head>

<body>
    <div class="pc-container">
        <div class="pc-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Profile</a></li>
                                <li class="breadcrumb-item" aria-current="page">User List</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">User List</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- [ sample-page ] start -->
                <div class="col-sm-12">
                    <div class="card border-0 table-card user-profile-list">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover" id="pc-dt-simple">
                                    <thead>
                                        <tr>
                                            <th>ID User</th>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Start date</th>
                                            <th>Actions</th> <!-- Columna para botones -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="d-inline-block align-middle">
                                                    <img src="<?= BASE_PATH ?>assets/images/user/avatar-1.jpg" alt="user image" class="img-radius align-top m-r-15" style="width: 40px" />
                                                    <div class="d-inline-block">
                                                        <h6 class="m-b-0">Henry Wolleans</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Android developer</td>
                                            <td>supportlead@example.com</td>
                                            <td>(123) 456-7890</td>
                                            <td>2011/04/25</td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item m-0"><a href="#" class="avtar avtar-s btn btn-primary"><i class="ti ti-pencil f-18"></i></a></li>
                                                    <li class="list-inline-item m-0"><a href="#" class="avtar avtar-s btn bg-white btn-link-danger"><i class="ti ti-trash f-18"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <div class="d-inline-block align-middle">
                                                    <img src="<?= BASE_PATH ?>assets/images/user/avatar-2.jpg" alt="user image" class="img-radius align-top m-r-15" style="width: 40px" />
                                                    <div class="d-inline-block">
                                                        <h6 class="m-b-0">Garrett Winters</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Accountant</td>
                                            <td>garrettwinters@example.com</td>
                                            <td>(234) 567-8901</td>
                                            <td>2011/07/25</td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item m-0"><a href="#" class="avtar avtar-s btn btn-primary"><i class="ti ti-pencil f-18"></i></a></li>
                                                    <li class="list-inline-item m-0"><a href="#" class="avtar avtar-s btn bg-white btn-link-danger"><i class="ti ti-trash f-18"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <div class="d-inline-block align-middle">
                                                    <img src="<?= BASE_PATH ?>assets/images/user/avatar-3.jpg" alt="user image" class="img-radius align-top m-r-15" style="width: 40px" />
                                                    <div class="d-inline-block">
                                                        <h6 class="m-b-0">Ashton Cox</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Junior Technical Author</td>
                                            <td>ashtoncox@example.com</td>
                                            <td>(345) 678-9012</td>
                                            <td>2009/01/12</td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item m-0"><a href="#" class="avtar avtar-s btn btn-primary"><i class="ti ti-pencil f-18"></i></a></li>
                                                    <li class="list-inline-item m-0"><a href="#" class="avtar avtar-s btn bg-white btn-link-danger"><i class="ti ti-trash f-18"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>
                                                <div class="d-inline-block align-middle">
                                                    <img src="<?= BASE_PATH ?>assets/images/user/avatar-4.jpg" alt="user image" class="img-radius align-top m-r-15" style="width: 40px" />
                                                    <div class="d-inline-block">
                                                        <h6 class="m-b-0">Cedric Kelly</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Senior Javascript Developer</td>
                                            <td>cedrickelly@example.com</td>
                                            <td>(456) 789-0123</td>
                                            <td>2012/03/29</td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item m-0"><a href="#" class="avtar avtar-s btn btn-primary"><i class="ti ti-pencil f-18"></i></a></li>
                                                    <li class="list-inline-item m-0"><a href="#" class="avtar avtar-s btn bg-white btn-link-danger"><i class="ti ti-trash f-18"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>
                                                <div class="d-inline-block align-middle">
                                                    <img src="<?= BASE_PATH ?>assets/images/user/avatar-5.jpg" alt="user image" class="img-radius align-top m-r-15" style="width: 40px" />
                                                    <div class="d-inline-block">
                                                        <h6 class="m-b-0">Airi Satou</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Accountant</td>
                                            <td>airisatou@example.com</td>
                                            <td>(567) 890-1234</td>
                                            <td>2008/11/28</td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item m-0"><a href="#" class="avtar avtar-s btn btn-primary"><i class="ti ti-pencil f-18"></i></a></li>
                                                    <li class="list-inline-item m-0"><a href="#" class="avtar avtar-s btn bg-white btn-link-danger"><i class="ti ti-trash f-18"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>
                                                <div class="d-inline-block align-middle">
                                                    <img src="<?= BASE_PATH ?>assets/images/user/avatar-6.jpg" alt="user image" class="img-radius align-top m-r-15" style="width: 40px" />
                                                    <div class="d-inline-block">
                                                        <h6 class="m-b-0">Brielle Williamson</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Integration Specialist</td>
                                            <td>briellewilliamson@example.com</td>
                                            <td>(678) 901-2345</td>
                                            <td>2012/12/02</td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item m-0"><a href="#" class="avtar avtar-s btn btn-primary"><i class="ti ti-pencil f-18"></i></a></li>
                                                    <li class="list-inline-item m-0"><a href="#" class="avtar avtar-s btn bg-white btn-link-danger"><i class="ti ti-trash f-18"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ sample-page ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>


    <!-- Required Js -->
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


    <!-- [Page Specific JS] start -->
    <script src="../assets/js/plugins/simple-datatables.js"></script>
    <script>
        const dataTable = new simpleDatatables.DataTable('#pc-dt-simple', {
            sortable: false,
            perPage: 5
        });
    </script>


</body>
<!-- [Body] end -->

</html>