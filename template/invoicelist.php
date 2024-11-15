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
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Invoice</a></li>
                                <li class="breadcrumb-item" aria-current="page">List</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">List</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs invoice-tab border-bottom mb-3" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="analytics-tab-1" data-bs-toggle="tab"
                                    data-bs-target="#analytics-tab-1-pane" type="button" role="tab" aria-controls="analytics-tab-1-pane"
                                    aria-selected="true">
                                    <span class="d-flex align-items-center gap-2">All <span
                                            class="avtar rounded-circle bg-light-primary">5</span></span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="analytics-tab-2" data-bs-toggle="tab"
                                    data-bs-target="#analytics-tab-2-pane" type="button" role="tab" aria-controls="analytics-tab-2-pane"
                                    aria-selected="false">
                                    <span class="d-flex align-items-center gap-2">Paid <span
                                            class="avtar rounded-circle bg-light-success">2</span></span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="analytics-tab-3" data-bs-toggle="tab"
                                    data-bs-target="#analytics-tab-3-pane" type="button" role="tab" aria-controls="analytics-tab-3-pane"
                                    aria-selected="false">
                                    <span class="d-flex align-items-center gap-2">Unpaid <span
                                            class="avtar rounded-circle bg-light-warning">2</span></span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="analytics-tab-4" data-bs-toggle="tab"
                                    data-bs-target="#analytics-tab-4-pane" type="button" role="tab" aria-controls="analytics-tab-4-pane"
                                    aria-selected="false">
                                    <span class="d-flex align-items-center gap-2">Cancelled <span
                                            class="avtar rounded-circle bg-light-danger">1</span></span>
                                </button>
                            </li>
                        </ul>
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
                                <input class="datatable-input" placeholder="Search..." type="search" title="Search within table" aria-controls="pc-dt-simple-1">
                            </div>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="analytics-tab-1-pane" role="tabpanel"
                                aria-labelledby="analytics-tab-1" tabindex="0">
                                <div class="table-responsive">
                                    <table class="table table-hover" id="pc-dt-simple-1">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="<?= BASE_PATH ?>assets/images/user/avatar-5.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">Mickie Melmoth</span> </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>mmsht23@gmail.com</td>
                                                <td>+1 234 567 890</td>
                                                <td>3000</td>
                                                <td><span class="badge bg-light-success">Paid</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src=" <?= BASE_PATH ?>assets/images/user/avatar-9.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">Shelba Thews</span> </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>shelba23@gmail.com</td>
                                                <td>+1 234 567 890</td>
                                                <td>3000</td>
                                                <td><span class="badge bg-light-danger">Cancelled</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="<?= BASE_PATH ?>assets/images/user/avatar-10.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100"> Taila Ween </span> </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>tass23@gmail.com</td>
                                                <td>+1 234 567 890</td>
                                                <td>1000</td>
                                                <td><span class="badge bg-light-info">Unpaid</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="<?= BASE_PATH ?>assets/images/user/avatar-1.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">Mickie Melmoth</span> </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>mmsht23@gmail.com</td>
                                                <td>+1 234 567 890</td>
                                                <td>3000</td>
                                                <td><span class="badge bg-light-success">Paid</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="<?= BASE_PATH ?>assets/images/user/avatar-2.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">Shelba Thews</span> </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>sht23@gmail.com</td>
                                                <td>+1 234 567 890</td>
                                                <td>3000</td>
                                                <td><span class="badge bg-light-danger">Cancelled</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="<?= BASE_PATH ?>assets/images/user/avatar-3.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100"> CLara Devlin</span> </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>tass23@gmail.com</td>
                                                <td>+1 234 567 890</td>
                                                <td>1000</td>
                                                <td><span class="badge bg-light-info">Unpaid</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="<?= BASE_PATH ?>assets/images/user/avatar-4.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">Mickie Melmoth</span> </h6>
                                                            <p class="f-12 mb-0"><a href="#!" class="text-muted"><span
                                                                        class="text-truncate w-100">mmsht23@gmail.com</span></a></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>5/5/2022</td>
                                                <td>7/11/2022</td>
                                                <td>3000</td>
                                                <td><span class="badge bg-light-success">Paid</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="<?= BASE_PATH ?>assets/images/user/avatar-7.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">Shelba Thews</span> </h6>
                                                            <p class="f-12 mb-0"><a href="#!" class="text-muted"><span
                                                                        class="text-truncate w-100">Shelba Thews</span></a></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>7/6/2022</td>
                                                <td>7/8/2022</td>
                                                <td>3000</td>
                                                <td><span class="badge bg-light-danger">Cancelled</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="<?= BASE_PATH ?>assets/images/user/avatar-8.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">tass23@gmail.com</span> </h6>
                                                            <p class="f-12 mb-0"><a href="#!" class="text-muted"><span
                                                                        class="text-truncate w-100">Shelba Thews</span></a></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>05/01/2022</td>
                                                <td>06/02/2022</td>
                                                <td>1000</td>
                                                <td><span class="badge bg-light-info">Unpaid</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="analytics-tab-2-pane" role="tabpanel" aria-labelledby="analytics-tab-2"
                                tabindex="0">
                                <div class="table-responsive">
                                    <table class="table table-hover" id="pc-dt-simple-2">
                                        <thead>
                                            <tr>
                                                <th>Invoice Id</th>
                                                <th>User Name</th>
                                                <th>Create Date</th>
                                                <th>Due Date</th>
                                                <th>Quantity</th>
                                                <th>Status</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>5</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="../assets/images/user/avatar-2.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">Shelba Thews</span> </h6>
                                                            <p class="f-12 mb-0"><a href="#!" class="text-muted"><span
                                                                        class="text-truncate w-100">Shelba Thews</span></a></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>7/6/2022</td>
                                                <td>7/8/2022</td>
                                                <td>3000</td>
                                                <td><span class="badge bg-light-danger">Cancelled</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="../assets/images/user/avatar-3.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">tass23@gmail.com</span> </h6>
                                                            <p class="f-12 mb-0"><a href="#!" class="text-muted"><span
                                                                        class="text-truncate w-100">Shelba Thews</span></a></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>05/01/2022</td>
                                                <td>06/02/2022</td>
                                                <td>1000</td>
                                                <td><span class="badge bg-light-info">Unpaid</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="../assets/images/user/avatar-5.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">Mickie Melmoth</span> </h6>
                                                            <p class="f-12 mb-0"><a href="#!" class="text-muted"><span
                                                                        class="text-truncate w-100">mmsht23@gmail.com</span></a></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>5/5/2022</td>
                                                <td>7/11/2022</td>
                                                <td>3000</td>
                                                <td><span class="badge bg-light-success">Paid</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="../assets/images/user/avatar-9.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">Shelba Thews</span> </h6>
                                                            <p class="f-12 mb-0"><a href="#!" class="text-muted"><span
                                                                        class="text-truncate w-100">Shelba Thews</span></a></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>7/6/2022</td>
                                                <td>7/8/2022</td>
                                                <td>3000</td>
                                                <td><span class="badge bg-light-danger">Cancelled</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="../assets/images/user/avatar-10.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">tass23@gmail.com</span> </h6>
                                                            <p class="f-12 mb-0"><a href="#!" class="text-muted"><span
                                                                        class="text-truncate w-100">Shelba Thews</span></a></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>05/01/2022</td>
                                                <td>06/02/2022</td>
                                                <td>1000</td>
                                                <td><span class="badge bg-light-info">Unpaid</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="../assets/images/user/avatar-1.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">Mickie Melmoth</span> </h6>
                                                            <p class="f-12 mb-0"><a href="#!" class="text-muted"><span
                                                                        class="text-truncate w-100">mmsht23@gmail.com</span></a></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>5/5/2022</td>
                                                <td>7/11/2022</td>
                                                <td>3000</td>
                                                <td><span class="badge bg-light-success">Paid</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="../assets/images/user/avatar-4.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">Mickie Melmoth</span> </h6>
                                                            <p class="f-12 mb-0"><a href="#!" class="text-muted"><span
                                                                        class="text-truncate w-100">mmsht23@gmail.com</span></a></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>5/5/2022</td>
                                                <td>7/11/2022</td>
                                                <td>3000</td>
                                                <td><span class="badge bg-light-success">Paid</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="../assets/images/user/avatar-7.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">Shelba Thews</span> </h6>
                                                            <p class="f-12 mb-0"><a href="#!" class="text-muted"><span
                                                                        class="text-truncate w-100">Shelba Thews</span></a></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>7/6/2022</td>
                                                <td>7/8/2022</td>
                                                <td>3000</td>
                                                <td><span class="badge bg-light-danger">Cancelled</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="../assets/images/user/avatar-8.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">tass23@gmail.com</span> </h6>
                                                            <p class="f-12 mb-0"><a href="#!" class="text-muted"><span
                                                                        class="text-truncate w-100">Shelba Thews</span></a></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>05/01/2022</td>
                                                <td>06/02/2022</td>
                                                <td>1000</td>
                                                <td><span class="badge bg-light-info">Unpaid</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="analytics-tab-3-pane" role="tabpanel" aria-labelledby="analytics-tab-3"
                                tabindex="0">
                                <div class="table-responsive">
                                    <table class="table table-hover" id="pc-dt-simple-3">
                                        <thead>
                                            <tr>
                                                <th>Invoice Id</th>
                                                <th>User Name</th>
                                                <th>Create Date</th>
                                                <th>Due Date</th>
                                                <th>Quantity</th>
                                                <th>Status</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="../assets/images/user/avatar-5.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">Mickie Melmoth</span> </h6>
                                                            <p class="f-12 mb-0"><a href="#!" class="text-muted"><span
                                                                        class="text-truncate w-100">mmsht23@gmail.com</span></a></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>5/5/2022</td>
                                                <td>7/11/2022</td>
                                                <td>3000</td>
                                                <td><span class="badge bg-light-success">Paid</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="../assets/images/user/avatar-9.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">Shelba Thews</span> </h6>
                                                            <p class="f-12 mb-0"><a href="#!" class="text-muted"><span
                                                                        class="text-truncate w-100">Shelba Thews</span></a></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>7/6/2022</td>
                                                <td>7/8/2022</td>
                                                <td>3000</td>
                                                <td><span class="badge bg-light-danger">Cancelled</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="../assets/images/user/avatar-10.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">tass23@gmail.com</span> </h6>
                                                            <p class="f-12 mb-0"><a href="#!" class="text-muted"><span
                                                                        class="text-truncate w-100">Shelba Thews</span></a></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>05/01/2022</td>
                                                <td>06/02/2022</td>
                                                <td>1000</td>
                                                <td><span class="badge bg-light-info">Unpaid</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="../assets/images/user/avatar-1.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">Mickie Melmoth</span> </h6>
                                                            <p class="f-12 mb-0"><a href="#!" class="text-muted"><span
                                                                        class="text-truncate w-100">mmsht23@gmail.com</span></a></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>5/5/2022</td>
                                                <td>7/11/2022</td>
                                                <td>3000</td>
                                                <td><span class="badge bg-light-success">Paid</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="../assets/images/user/avatar-2.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">Shelba Thews</span> </h6>
                                                            <p class="f-12 mb-0"><a href="#!" class="text-muted"><span
                                                                        class="text-truncate w-100">Shelba Thews</span></a></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>7/6/2022</td>
                                                <td>7/8/2022</td>
                                                <td>3000</td>
                                                <td><span class="badge bg-light-danger">Cancelled</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="../assets/images/user/avatar-3.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">tass23@gmail.com</span> </h6>
                                                            <p class="f-12 mb-0"><a href="#!" class="text-muted"><span
                                                                        class="text-truncate w-100">Shelba Thews</span></a></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>05/01/2022</td>
                                                <td>06/02/2022</td>
                                                <td>1000</td>
                                                <td><span class="badge bg-light-info">Unpaid</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="../assets/images/user/avatar-4.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">Mickie Melmoth</span> </h6>
                                                            <p class="f-12 mb-0"><a href="#!" class="text-muted"><span
                                                                        class="text-truncate w-100">mmsht23@gmail.com</span></a></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>5/5/2022</td>
                                                <td>7/11/2022</td>
                                                <td>3000</td>
                                                <td><span class="badge bg-light-success">Paid</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="../assets/images/user/avatar-7.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">Shelba Thews</span> </h6>
                                                            <p class="f-12 mb-0"><a href="#!" class="text-muted"><span
                                                                        class="text-truncate w-100">Shelba Thews</span></a></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>7/6/2022</td>
                                                <td>7/8/2022</td>
                                                <td>3000</td>
                                                <td><span class="badge bg-light-danger">Cancelled</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="../assets/images/user/avatar-8.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">tass23@gmail.com</span> </h6>
                                                            <p class="f-12 mb-0"><a href="#!" class="text-muted"><span
                                                                        class="text-truncate w-100">Shelba Thews</span></a></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>05/01/2022</td>
                                                <td>06/02/2022</td>
                                                <td>1000</td>
                                                <td><span class="badge bg-light-info">Unpaid</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="analytics-tab-4-pane" role="tabpanel" aria-labelledby="analytics-tab-4"
                                tabindex="0">
                                <div class="table-responsive">
                                    <table class="table table-hover" id="pc-dt-simple-4">
                                        <thead>
                                            <tr>
                                                <th>Invoice Id</th>
                                                <th>User Name</th>
                                                <th>Create Date</th>
                                                <th>Due Date</th>
                                                <th>Quantity</th>
                                                <th>Status</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>5</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="../assets/images/user/avatar-2.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">Shelba Thews</span> </h6>
                                                            <p class="f-12 mb-0"><a href="#!" class="text-muted"><span
                                                                        class="text-truncate w-100">Shelba Thews</span></a></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>7/6/2022</td>
                                                <td>7/8/2022</td>
                                                <td>3000</td>
                                                <td><span class="badge bg-light-danger">Cancelled</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="../assets/images/user/avatar-3.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">tass23@gmail.com</span> </h6>
                                                            <p class="f-12 mb-0"><a href="#!" class="text-muted"><span
                                                                        class="text-truncate w-100">Shelba Thews</span></a></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>05/01/2022</td>
                                                <td>06/02/2022</td>
                                                <td>1000</td>
                                                <td><span class="badge bg-light-info">Unpaid</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="../assets/images/user/avatar-5.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">Mickie Melmoth</span> </h6>
                                                            <p class="f-12 mb-0"><a href="#!" class="text-muted"><span
                                                                        class="text-truncate w-100">mmsht23@gmail.com</span></a></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>5/5/2022</td>
                                                <td>7/11/2022</td>
                                                <td>3000</td>
                                                <td><span class="badge bg-light-success">Paid</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="../assets/images/user/avatar-9.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">Shelba Thews</span> </h6>
                                                            <p class="f-12 mb-0"><a href="#!" class="text-muted"><span
                                                                        class="text-truncate w-100">Shelba Thews</span></a></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>7/6/2022</td>
                                                <td>7/8/2022</td>
                                                <td>3000</td>
                                                <td><span class="badge bg-light-danger">Cancelled</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="../assets/images/user/avatar-10.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">tass23@gmail.com</span> </h6>
                                                            <p class="f-12 mb-0"><a href="#!" class="text-muted"><span
                                                                        class="text-truncate w-100">Shelba Thews</span></a></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>05/01/2022</td>
                                                <td>06/02/2022</td>
                                                <td>1000</td>
                                                <td><span class="badge bg-light-info">Unpaid</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="../assets/images/user/avatar-1.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">Mickie Melmoth</span> </h6>
                                                            <p class="f-12 mb-0"><a href="#!" class="text-muted"><span
                                                                        class="text-truncate w-100">mmsht23@gmail.com</span></a></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>5/5/2022</td>
                                                <td>7/11/2022</td>
                                                <td>3000</td>
                                                <td><span class="badge bg-light-success">Paid</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="../assets/images/user/avatar-4.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">Mickie Melmoth</span> </h6>
                                                            <p class="f-12 mb-0"><a href="#!" class="text-muted"><span
                                                                        class="text-truncate w-100">mmsht23@gmail.com</span></a></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>5/5/2022</td>
                                                <td>7/11/2022</td>
                                                <td>3000</td>
                                                <td><span class="badge bg-light-success">Paid</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="../assets/images/user/avatar-7.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">Shelba Thews</span> </h6>
                                                            <p class="f-12 mb-0"><a href="#!" class="text-muted"><span
                                                                        class="text-truncate w-100">Shelba Thews</span></a></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>7/6/2022</td>
                                                <td>7/8/2022</td>
                                                <td>3000</td>
                                                <td><span class="badge bg-light-danger">Cancelled</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto pe-0">
                                                            <img src="../assets/images/user/avatar-8.jpg" alt="user-image"
                                                                class="wid-40 hei-40 rounded-circle" />
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1"><span class="text-truncate w-100">tass23@gmail.com</span> </h6>
                                                            <p class="f-12 mb-0"><a href="#!" class="text-muted"><span
                                                                        class="text-truncate w-100">Shelba Thews</span></a></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>05/01/2022</td>
                                                <td>06/02/2022</td>
                                                <td>1000</td>
                                                <td><span class="badge bg-light-info">Unpaid</span></td>
                                                <td class="text-end">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-info btn-pc-default"><i class="ti ti-eye f-20"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                    class="ti ti-edit f-20"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"
                                                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                    class="ti ti-trash f-20"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
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


    <!-- [Page Specific JS] start -->
    <script src="../assets/js/plugins/apexcharts.min.js"></script>
    <script src="../assets/js/plugins/simple-datatables.js"></script>
    <script src="../assets/js/pages/invoice-list.js"></script>

</body>

</html>