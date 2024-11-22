<!doctype html>
<html lang="en">

<head>
    <?php
    include "app/config.php";
    session_start();
    include "views/layouts/sidebar.php";
    include "views/layouts/head.php";
    include "views/layouts/navbar.php";
    ?>

</head>

<body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">

    <div class="pc-container">
        <div class="pc-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">E-commerce</a></li>
                                <li class="breadcrumb-item" aria-current="page">Products</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Products</h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-sm-12">
                    <div class="ecom-wrapper">
                        <div class="ecom-content">
                            <div class="d-sm-flex align-items-center mb-4">
                                <ul class="list-inline me-auto my-1">
                                    <li class="list-inline-item">
                                        <form class="form-search">
                                            <i class="ph-duotone ph-magnifying-glass icon-search"></i>
                                            <input type="search" class="form-control" placeholder="Search Products" />
                                        </form>
                                    </li>
                                </ul>
                                <ul class="list-inline ms-auto my-1">
                                    <label class="btn btn-secondary active">
                                        Add Products
                                    </label>

                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xl-4">
                                    <div class="card product-card">
                                        <div class="card-img-top">
                                            <a href="ecom_product-details.html">
                                                <img src="<?= BASE_PATH ?>assets/images/application/img-prod-1.jpg" alt="image" class="img-prod img-fluid" />
                                            </a>
                                            <div class="card-body position-absolute end-0 top-0">
                                                <div class="form-check prod-likes">
                                                    <input type="checkbox" class="form-check-input" />
                                                    <i data-feather="heart" class="prod-likes-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <a href="ecom_product-details.html">
                                                <p class="prod-content mb-0 text-muted">Apple watch -4</p>
                                            </a>
                                            <div class="d-flex align-items-center justify-content-between mt-2 mb-3 flex-wrap gap-1">
                                                <h4 class="mb-0 text-truncate"><b>$299.00</b> <span class="text-sm text-muted f-w-400 text-decoration-line-through">$399.00</span></h4>
                                                <div class="d-inline-flex align-items-center">
                                                    <i class="ph-duotone ph-star text-warning me-1"></i>
                                                    4.5 <small class="text-muted">/ 5</small>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <a
                                                        href="#"
                                                        class="avtar avtar-s btn-link-secondary btn-prod-card"
                                                        data-bs-toggle="offcanvas"
                                                        data-bs-target="#productOffcanvas">
                                                        <i class="ph-duotone ph-eye f-18"></i>
                                                    </a>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="d-grid">
                                                        <button class="btn btn-link-secondary btn-prod-card">Add to cart</button>
                                                    </div>
                                                </div>
                                                <li class="list-inline-item"><a href="#"
                                                        class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                            class="ti ti-trash f-20">
                                                        </i>
                                                    </a>
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="card product-card">
                                        <div class="card-img-top">
                                            <a href="ecom_product-details.html">
                                                <img src="<?= BASE_PATH ?>assets/images/application/img-prod-2.jpg" alt="image" class="img-prod img-fluid" />
                                            </a>
                                            <div class="card-body position-absolute end-0 top-0">
                                                <div class="form-check prod-likes">
                                                    <input type="checkbox" class="form-check-input" />
                                                    <i data-feather="heart" class="prod-likes-icon"></i>
                                                </div>
                                            </div>
                                            <div class="card-body position-absolute start-0 top-0">
                                                <span class="badge bg-danger badge-prod-card">30%</span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <a href="ecom_product-details.html">
                                                <p class="prod-content mb-0 text-muted">Apple watch -4</p>
                                            </a>
                                            <div class="d-flex align-items-center justify-content-between mt-2 mb-3 flex-wrap gap-1">
                                                <h4 class="mb-0 text-truncate"><b>$299.00</b> <span class="text-sm text-muted f-w-400 text-decoration-line-through">$399.00</span></h4>
                                                <div class="d-inline-flex align-items-center">
                                                    <i class="ph-duotone ph-star text-warning me-1"></i>
                                                    4.5 <small class="text-muted">/ 5</small>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <a
                                                        href="#"
                                                        class="avtar avtar-s btn-link-secondary btn-prod-card"
                                                        data-bs-toggle="offcanvas"
                                                        data-bs-target="#productOffcanvas">
                                                        <i class="ph-duotone ph-eye f-18"></i>
                                                    </a>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="d-grid">
                                                        <button class="btn btn-link-secondary btn-prod-card">Add to cart</button>
                                                    </div>
                                                </div>
                                                <li class="list-inline-item"><a href="#"
                                                        class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                            class="ti ti-trash f-20">
                                                        </i>
                                                    </a>
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="card product-card">
                                        <div class="card-img-top">
                                            <a href="ecom_product-details.html">
                                                <img src="<?= BASE_PATH ?>assets/images/application/img-prod-3.jpg" alt="image" class="img-prod img-fluid" />
                                            </a>
                                            <div class="card-body position-absolute end-0 top-0">
                                                <div class="form-check prod-likes">
                                                    <input type="checkbox" class="form-check-input" />
                                                    <i data-feather="heart" class="prod-likes-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <a href="ecom_product-details.html">
                                                <p class="prod-content mb-0 text-muted">Apple watch -4</p>
                                            </a>
                                            <div class="d-flex align-items-center justify-content-between mt-2 mb-3 flex-wrap gap-1">
                                                <h4 class="mb-0 text-truncate"><b>$299.00</b> <span class="text-sm text-muted f-w-400 text-decoration-line-through">$399.00</span></h4>
                                                <div class="d-inline-flex align-items-center">
                                                    <i class="ph-duotone ph-star text-warning me-1"></i>
                                                    4.5 <small class="text-muted">/ 5</small>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <a
                                                        href="#"
                                                        class="avtar avtar-s btn-link-secondary btn-prod-card"
                                                        data-bs-toggle="offcanvas"
                                                        data-bs-target="#productOffcanvas">
                                                        <i class="ph-duotone ph-eye f-18"></i>
                                                    </a>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="d-grid">
                                                        <button class="btn btn-link-secondary btn-prod-card">Add to cart</button>
                                                    </div>
                                                </div>
                                                <li class="list-inline-item"><a href="#"
                                                        class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                            class="ti ti-trash f-20">
                                                        </i>
                                                    </a>
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="card product-card">
                                        <div class="card-img-top">
                                            <a href="ecom_product-details.html">
                                                <img src="<?= BASE_PATH ?>assets/images/application/img-prod-4.jpg" alt="image" class="img-prod img-fluid" />
                                            </a>
                                            <div class="card-body position-absolute end-0 top-0">
                                                <div class="form-check prod-likes">
                                                    <input type="checkbox" class="form-check-input" />
                                                    <i data-feather="heart" class="prod-likes-icon"></i>
                                                </div>
                                            </div>
                                            <div class="card-body position-absolute start-0 top-0">
                                                <span class="badge bg-danger badge-prod-card">30%</span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <a href="ecom_product-details.html">
                                                <p class="prod-content mb-0 text-muted">Apple watch -4</p>
                                            </a>
                                            <div class="d-flex align-items-center justify-content-between mt-2 mb-3 flex-wrap gap-1">
                                                <h4 class="mb-0 text-truncate"><b>$299.00</b> <span class="text-sm text-muted f-w-400 text-decoration-line-through">$399.00</span></h4>
                                                <div class="d-inline-flex align-items-center">
                                                    <i class="ph-duotone ph-star text-warning me-1"></i>
                                                    4.5 <small class="text-muted">/ 5</small>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <a
                                                        href="#"
                                                        class="avtar avtar-s btn-link-secondary btn-prod-card"
                                                        data-bs-toggle="offcanvas"
                                                        data-bs-target="#productOffcanvas">
                                                        <i class="ph-duotone ph-eye f-18"></i>
                                                    </a>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="d-grid">
                                                        <button class="btn btn-link-secondary btn-prod-card">Add to cart</button>
                                                    </div>
                                                </div>
                                                <li class="list-inline-item"><a href="#"
                                                        class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                            class="ti ti-trash f-20">
                                                        </i>
                                                    </a>
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="card product-card">
                                        <div class="card-img-top">
                                            <a href="ecom_product-details.html">
                                                <img src="<?= BASE_PATH ?>assets/images/application/img-prod-5.jpg" alt="image" class="img-prod img-fluid" />
                                            </a>
                                            <div class="card-body position-absolute end-0 top-0">
                                                <div class="form-check prod-likes">
                                                    <input type="checkbox" class="form-check-input" />
                                                    <i data-feather="heart" class="prod-likes-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <a href="ecom_product-details.html">
                                                <p class="prod-content mb-0 text-muted">Apple watch -4</p>
                                            </a>
                                            <div class="d-flex align-items-center justify-content-between mt-2 mb-3 flex-wrap gap-1">
                                                <h4 class="mb-0 text-truncate"><b>$299.00</b> <span class="text-sm text-muted f-w-400 text-decoration-line-through">$399.00</span></h4>
                                                <div class="d-inline-flex align-items-center">
                                                    <i class="ph-duotone ph-star text-warning me-1"></i>
                                                    4.5 <small class="text-muted">/ 5</small>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <a
                                                        href="#"
                                                        class="avtar avtar-s btn-link-secondary btn-prod-card"
                                                        data-bs-toggle="offcanvas"
                                                        data-bs-target="#productOffcanvas">
                                                        <i class="ph-duotone ph-eye f-18"></i>
                                                    </a>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="d-grid">
                                                        <button class="btn btn-link-secondary btn-prod-card">Add to cart</button>
                                                    </div>
                                                </div>
                                                <li class="list-inline-item"><a href="#"
                                                        class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                            class="ti ti-trash f-20">
                                                        </i>
                                                    </a>
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="card product-card">
                                        <div class="card-img-top">
                                            <a href="ecom_product-details.html">
                                                <img src="<?= BASE_PATH ?>assets/images/application/img-prod-6.jpg" alt="image" class="img-prod img-fluid" />
                                            </a>
                                            <div class="card-body position-absolute end-0 top-0">
                                                <div class="form-check prod-likes">
                                                    <input type="checkbox" class="form-check-input" />
                                                    <i data-feather="heart" class="prod-likes-icon"></i>
                                                </div>
                                            </div>
                                            <div class="card-body position-absolute start-0 top-0">
                                                <span class="badge bg-danger badge-prod-card">30%</span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <a href="ecom_product-details.html">
                                                <p class="prod-content mb-0 text-muted">Apple watch -4</p>
                                            </a>
                                            <div class="d-flex align-items-center justify-content-between mt-2 mb-3 flex-wrap gap-1">
                                                <h4 class="mb-0 text-truncate"><b>$299.00</b> <span class="text-sm text-muted f-w-400 text-decoration-line-through">$399.00</span></h4>
                                                <div class="d-inline-flex align-items-center">
                                                    <i class="ph-duotone ph-star text-warning me-1"></i>
                                                    4.5 <small class="text-muted">/ 5</small>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <a
                                                        href="#"
                                                        class="avtar avtar-s btn-link-secondary btn-prod-card"
                                                        data-bs-toggle="offcanvas"
                                                        data-bs-target="#productOffcanvas">
                                                        <i class="ph-duotone ph-eye f-18"></i>
                                                    </a>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="d-grid">
                                                        <button class="btn btn-link-secondary btn-prod-card">Add to cart</button>
                                                    </div>
                                                </div>
                                                <li class="list-inline-item"><a href="#"
                                                        class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                            class="ti ti-trash f-20">
                                                        </i>
                                                    </a>
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="card product-card">
                                        <div class="card-img-top">
                                            <a href="ecom_product-details.html">
                                                <img src="<?= BASE_PATH ?>assets/images/application/img-prod-7.jpg" alt="image" class="img-prod img-fluid" />
                                            </a>
                                            <div class="card-body position-absolute end-0 top-0">
                                                <div class="form-check prod-likes">
                                                    <input type="checkbox" class="form-check-input" />
                                                    <i data-feather="heart" class="prod-likes-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <a href="ecom_product-details.html">
                                                <p class="prod-content mb-0 text-muted">Apple watch -4</p>
                                            </a>
                                            <div class="d-flex align-items-center justify-content-between mt-2 mb-3 flex-wrap gap-1">
                                                <h4 class="mb-0 text-truncate"><b>$299.00</b> <span class="text-sm text-muted f-w-400 text-decoration-line-through">$399.00</span></h4>
                                                <div class="d-inline-flex align-items-center">
                                                    <i class="ph-duotone ph-star text-warning me-1"></i>
                                                    4.5 <small class="text-muted">/ 5</small>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <a
                                                        href="#"
                                                        class="avtar avtar-s btn-link-secondary btn-prod-card"
                                                        data-bs-toggle="offcanvas"
                                                        data-bs-target="#productOffcanvas">
                                                        <i class="ph-duotone ph-eye f-18"></i>
                                                    </a>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="d-grid">
                                                        <button class="btn btn-link-secondary btn-prod-card">Add to cart</button>
                                                    </div>
                                                </div>
                                                <li class="list-inline-item"><a href="#"
                                                        class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                            class="ti ti-trash f-20">
                                                        </i>
                                                    </a>
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="card product-card">
                                        <div class="card-img-top">
                                            <a href="ecom_product-details.html">
                                                <img src="<?= BASE_PATH ?>assets/images/application/img-prod-8.jpg" alt="image" class="img-prod img-fluid" />
                                            </a>
                                            <div class="card-body position-absolute end-0 top-0">
                                                <div class="form-check prod-likes">
                                                    <input type="checkbox" class="form-check-input" />
                                                    <i data-feather="heart" class="prod-likes-icon"></i>
                                                </div>
                                            </div>
                                            <div class="card-body position-absolute start-0 top-0">
                                                <span class="badge bg-danger badge-prod-card">30%</span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <a href="ecom_product-details.html">
                                                <p class="prod-content mb-0 text-muted">Apple watch -4</p>
                                            </a>
                                            <div class="d-flex align-items-center justify-content-between mt-2 mb-3 flex-wrap gap-1">
                                                <h4 class="mb-0 text-truncate"><b>$299.00</b> <span class="text-sm text-muted f-w-400 text-decoration-line-through">$399.00</span></h4>
                                                <div class="d-inline-flex align-items-center">
                                                    <i class="ph-duotone ph-star text-warning me-1"></i>
                                                    4.5 <small class="text-muted">/ 5</small>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <a
                                                        href="#"
                                                        class="avtar avtar-s btn-link-secondary btn-prod-card"
                                                        data-bs-toggle="offcanvas"
                                                        data-bs-target="#productOffcanvas">
                                                        <i class="ph-duotone ph-eye f-18"></i>
                                                    </a>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="d-grid">
                                                        <button class="btn btn-link-secondary btn-prod-card">Add to cart</button>
                                                    </div>
                                                </div>
                                                <li class="list-inline-item"><a href="#"
                                                        class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                            class="ti ti-trash f-20">
                                                        </i>
                                                    </a>
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="card product-card">
                                        <div class="card-img-top">
                                            <a href="ecom_product-details.html">
                                                <img src="<?= BASE_PATH ?>assets/images/application/img-prod-9.jpg" alt="image" class="img-prod img-fluid" />
                                            </a>
                                            <div class="card-body position-absolute end-0 top-0">
                                                <div class="form-check prod-likes">
                                                    <input type="checkbox" class="form-check-input" />
                                                    <i data-feather="heart" class="prod-likes-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <a href="ecom_product-details.html">
                                                <p class="prod-content mb-0 text-muted">Apple watch -4</p>
                                            </a>
                                            <div class="d-flex align-items-center justify-content-between mt-2 mb-3 flex-wrap gap-1">
                                                <h4 class="mb-0 text-truncate"><b>$299.00</b> <span class="text-sm text-muted f-w-400 text-decoration-line-through">$399.00</span></h4>
                                                <div class="d-inline-flex align-items-center">
                                                    <i class="ph-duotone ph-star text-warning me-1"></i>
                                                    4.5 <small class="text-muted">/ 5</small>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <a
                                                        href="#"
                                                        class="avtar avtar-s btn-link-secondary btn-prod-card"
                                                        data-bs-toggle="offcanvas"
                                                        data-bs-target="#productOffcanvas">
                                                        <i class="ph-duotone ph-eye f-18"></i>
                                                    </a>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="d-grid">
                                                        <button class="btn btn-link-secondary btn-prod-card">Add to cart</button>
                                                    </div>
                                                </div>
                                                <li class="list-inline-item"><a href="#"
                                                        class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                            class="ti ti-trash f-20">
                                                        </i>
                                                    </a>
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

    <script>
        // scroll-block
        var tc = document.querySelectorAll('.scroll-block');
        for (var t = 0; t < tc.length; t++) {
            new SimpleBar(tc[t]);
        }
    </script>

</body>

</html>