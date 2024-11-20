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
    <link rel="stylesheet" href="assets/css/productsDetails.css">
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
                                <li class="breadcrumb-item" aria-current="page">Products Details</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Products Deatils</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="sticky-md-top product-sticky">
                                        <div id="carouselExampleCaptions" class="carousel slide ecomm-prod-slider" data-bs-ride="carousel">
                                            <div class="carousel-inner bg-light rounded position-relative">
                                                <div class="card-body position-absolute end-0 top-0">
                                                    <div class="form-check prod-likes">
                                                        <input type="checkbox" class="form-check-input" />
                                                        <i data-feather="heart" class="prod-likes-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="card-body position-absolute bottom-0 end-0">
                                                    <ul class="list-inline ms-auto mb-0 prod-likes">
                                                        <li class="list-inline-item m-0">
                                                            <a href="#" class="avtar avtar-xs text-white text-hover-primary">
                                                                <i class="ti ti-zoom-in f-18"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item m-0">
                                                            <a href="#" class="avtar avtar-xs text-white text-hover-primary">
                                                                <i class="ti ti-zoom-out f-18"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item m-0">
                                                            <a href="#" class="avtar avtar-xs text-white text-hover-primary">
                                                                <i class="ti ti-rotate-clockwise f-18"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="carousel-item active">
                                                    <img src="<?= BASE_PATH ?>assets/images/application/img-prod-1.jpg" class="d-block w-100" alt="Product images" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?= BASE_PATH ?>assets/images/application/img-prod-2.jpg" class="d-block w-100" alt="Product images" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?= BASE_PATH ?>assets/images/application/img-prod-3.jpg" class="d-block w-100" alt="Product images" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?= BASE_PATH ?>assets/images/application/img-prod-4.jpg" class="d-block w-100" alt="Product images" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?= BASE_PATH ?>assets/images/application/img-prod-5.jpg" class="d-block w-100" alt="Product images" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?= BASE_PATH ?>assets/images/application/img-prod-6.jpg" class="d-block w-100" alt="Product images" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?= BASE_PATH ?>assets/images/application/img-prod-7.jpg" class="d-block w-100" alt="Product images" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?= BASE_PATH ?>assets/images/application/img-prod-8.jpg" class="d-block w-100" alt="Product images" />
                                                </div>
                                            </div>
                                            <ol class="list-inline carousel-indicators position-relative product-carousel-indicators my-sm-3 mx-0">
                                                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="list-inline-item w-25 h-auto active">
                                                    <img src="<?= BASE_PATH ?>assets/images/application/img-prod-1.jpg" class="d-block wid-50 rounded" alt="Product images" />
                                                </li>
                                                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="list-inline-item w-25 h-auto">
                                                    <img src="<?= BASE_PATH ?>assets/images/application/img-prod-2.jpg" class="d-block wid-50 rounded" alt="Product images" />
                                                </li>
                                                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class="list-inline-item w-25 h-auto">
                                                    <img src="<?= BASE_PATH ?>assets/images/application/img-prod-3.jpg" class="d-block wid-50 rounded" alt="Product images" />
                                                </li>
                                                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" class="list-inline-item w-25 h-auto">
                                                    <img src="<?= BASE_PATH ?>assets/images/application/img-prod-4.jpg" class="d-block wid-50 rounded" alt="Product images" />
                                                </li>
                                                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" class="list-inline-item w-25 h-auto">
                                                    <img src="<?= BASE_PATH ?>assets/images/application/img-prod-5.jpg" class="d-block wid-50 rounded" alt="Product images" />
                                                </li>
                                                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" class="list-inline-item w-25 h-auto">
                                                    <img src="<?= BASE_PATH ?>assets/images/application/img-prod-6.jpg" class="d-block wid-50 rounded" alt="Product images" />
                                                </li>
                                                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" class="list-inline-item w-25 h-auto">
                                                    <img src="<?= BASE_PATH ?>assets/images/application/img-prod-7.jpg" class="d-block wid-50 rounded" alt="Product images" />
                                                </li>
                                                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" class="list-inline-item w-25 h-auto">
                                                    <img src="<?= BASE_PATH ?>assets/images/application/img-prod-8.jpg" class="d-block wid-50 rounded" alt="Product images" />
                                                </li>
                                            </ol>
                                        </div>
                                        <ul class="list-inline ms-auto my-1">
                                            <label class="btn btn-secondary active">
                                                Edit product
                                            </label>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <span class="badge bg-success f-14">In stock</span>
                                    <h5 class="my-3">Apple Watch SE Smartwatch (GPS, 40mm) (Heart Rate Monitoring)</h5>
                                    <div class="star f-18 mb-3">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star-half-alt text-warning"></i>
                                        <i class="far fa-star text-muted"></i>
                                        <span class="text-sm text-muted">(4.0)</span>
                                    </div>

                                    <h5 class="mt-4 mb-sm-3 mb-2 f-w-500">About this item</h5>
                                    <ul>
                                        <li class="mb-2">Care Instructions: Hand Wash Only</li>
                                        <li class="mb-2">Fit Type: Regular</li>
                                        <li class="mb-2">Dark Blue Regular Women Jeans</li>
                                        <li class="mb-2">Fabric : 100% Cotton</li>
                                    </ul>
                                    <div class="mb-3 row">
                                        <label class="col-form-label col-lg-3 col-sm-12">Colors <span class="text-danger">*</span></label>
                                        <div class="col-lg-6 col-md-12 col-sm-12 d-flex align-items-center">
                                            <div class="form-check form-check-inline color-checkbox mb-0">
                                                <input class="form-check-input" type="radio" name="product_color" checked />
                                                <i class="fas fa-circle text-primary"></i>
                                            </div>
                                            <div class="form-check form-check-inline color-checkbox mb-0">
                                                <input class="form-check-input" type="radio" name="product_color" />
                                                <i class="fas fa-circle text-secondary"></i>
                                            </div>
                                            <div class="form-check form-check-inline color-checkbox mb-0">
                                                <input class="form-check-input" type="radio" name="product_color" />
                                                <i class="fas fa-circle text-danger"></i>
                                            </div>
                                            <div class="form-check form-check-inline color-checkbox mb-0">
                                                <input class="form-check-input" type="radio" name="product_color" />
                                                <i class="fas fa-circle text-dark"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row align-items-center">
                                        <label class="col-form-label col-lg-3 col-sm-12">
                                            <span class="d-block">Size</span>
                                            <a class="link-primary text-sm text-decoration-underline">Size Chart?</a></label>
                                        <div class="col-lg-9 col-md-12 col-sm-12">
                                            <div class="row g-2">
                                                <div class="col-auto">
                                                    <input type="radio" class="btn-check" id="btnrdolite1" name="btn_radio2" checked />
                                                    <label class="btn btn-sm btn-light-primary" for="btnrdolite1">Small</label>
                                                </div>
                                                <div class="col-auto">
                                                    <input type="radio" class="btn-check" id="btnrdolite2" name="btn_radio2" />
                                                    <label class="btn btn-sm btn-light-primary" for="btnrdolite2">Medium</label>
                                                </div>
                                                <div class="col-auto">
                                                    <input type="radio" class="btn-check" id="btnrdolite3" name="btn_radio2" />
                                                    <label class="btn btn-sm btn-light-primary" for="btnrdolite3">Large</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="mb-4"><b>$299.00</b><span class="mx-2 f-16 text-muted f-w-400 text-decoration-line-through">$399.00</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header pb-0">
                            <ul class="nav nav-tabs profile-tabs mb-0" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a
                                        class="nav-link active"
                                        id="ecomtab-tab-1"
                                        data-bs-toggle="tab"
                                        href="#ecomtab-1"
                                        role="tab"
                                        aria-controls="ecomtab-1"
                                        aria-selected="true">Features
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        id="ecomtab-tab-2"
                                        data-bs-toggle="tab"
                                        href="#ecomtab-2"
                                        role="tab"
                                        aria-controls="ecomtab-2"
                                        aria-selected="true">Specifications
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        id="ecomtab-tab-3"
                                        data-bs-toggle="tab"
                                        href="#ecomtab-3"
                                        role="tab"
                                        aria-controls="ecomtab-3"
                                        aria-selected="true">Overview
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        id="ecomtab-tab-4"
                                        data-bs-toggle="tab"
                                        href="#ecomtab-4"
                                        role="tab"
                                        aria-controls="ecomtab-4"
                                        aria-selected="true">Reviews<span class="badge bg-light-primary rounded-pill px-2 ms-2">275</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane show active" id="ecomtab-1" role="tabpanel" aria-labelledby="ecomtab-tab-1">
                                    <div class="table-responsive">
                                        <table class="table table-borderless mb-0">
                                            <tbody>
                                                <tr>
                                                    <td class="text-muted py-1">Band :</td>
                                                    <td class="py-1">Smart Band</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted py-1">Compatible Devices :</td>
                                                    <td class="py-1">Smartphones</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted py-1">Ideal For :</td>
                                                    <td class="py-1">Unisex</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted py-1">Lifestyle :</td>
                                                    <td class="py-1">Fitness | Indoor | Sports | Swimming | Outdoor</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted py-1">Basic Features :</td>
                                                    <td class="py-1">Calendar | Date & Time | Timer/Stop Watch</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted py-1">Health Tracker :</td>
                                                    <td class="py-1">Heart Rate | Exercise Tracker</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane" id="ecomtab-2" role="tabpanel" aria-labelledby="ecomtab-tab-2">
                                    <div class="row gy-3">
                                        <div class="col-md-6">
                                            <h5>Product Category</h5>
                                            <hr class="mb-3 mt-1" />
                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-muted py-1 border-top-0">Wearable Device Type:</td>
                                                            <td class="py-1 border-top-0">Smart Band</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted py-1">Compatible Devices :</td>
                                                            <td class="py-1">Smartphones</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted py-1">Ideal For :</td>
                                                            <td class="py-1">Unisex</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Manufacturer Details</h5>
                                            <hr class="mb-3 mt-1" />
                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-muted py-1 border-top-0">Brand :</td>
                                                            <td class="py-1 border-top-0">Apple</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted py-1">Model Series :</td>
                                                            <td class="py-1">Watch SE</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted py-1">Model Number :</td>
                                                            <td class="py-1">MYDT2HN/A</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="ecomtab-3" role="tabpanel" aria-labelledby="ecomtab-tab-3">
                                    <div class="table-responsive">
                                        <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s,
                                            <strong class="text-body">“When an unknown printer took a galley of type and scrambled it to make a type specimen book.”</strong>
                                            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularized in the 1960s with the release of Lestrade sheets containing Lorem Ipsum passages, and
                                            more recently with desktop publishing software like PageMaker including versions of Lorem Ipsum.
                                        </p>
                                        <p class="text-muted mb-0">It was popularized in the 1960s with the release of Learjet sheets containing Lorem Ipsum passages, and more
                                            recently with desktop publishing software like PageMaker including versions of Lorem Ipsum.</p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="ecomtab-4" role="tabpanel" aria-labelledby="ecomtab-tab-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-xxl-4 col-xl-5">
                                                    <h2 class="mb-3"><b>3.5<small class="text-muted f-18">/5</small></b></h2>
                                                    <p class="mb-2 text-muted">Based on 275 reviews</p>
                                                    <div class="star mb-3 f-20">
                                                        <i class="fas fa-star text-warning"></i>
                                                        <i class="fas fa-star text-warning"></i>
                                                        <i class="fas fa-star text-warning"></i>
                                                        <i class="fas fa-star-half-alt text-warning"></i>
                                                        <i class="far fa-star text-muted"></i>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-5">
                                                    <div class="d-flex align-items-center">
                                                        <div class="w-100">
                                                            <div class="row align-items-center my-2">
                                                                <div class="col">
                                                                    <div class="progress" style="height: 4px">
                                                                        <div class="progress-bar bg-warning" style="width: 30%"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <p class="mb-0 text-muted">5 Stars</p>
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center my-2">
                                                                <div class="col">
                                                                    <div class="progress" style="height: 4px">
                                                                        <div class="progress-bar bg-warning" style="width: 60%"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <p class="mb-0 text-muted">4 Stars</p>
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center my-2">
                                                                <div class="col">
                                                                    <div class="progress" style="height: 4px">
                                                                        <div class="progress-bar bg-warning" style="width: 75%"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <p class="mb-0 text-muted">3 Stars</p>
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center my-2">
                                                                <div class="col">
                                                                    <div class="progress" style="height: 4px">
                                                                        <div class="progress-bar bg-warning" style="width: 40%"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <p class="mb-0 text-muted">2 Stars</p>
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center">
                                                                <div class="col">
                                                                    <div class="progress" style="height: 4px">
                                                                        <div class="progress-bar bg-warning" style="width: 55%"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <p class="mb-0 text-muted">1 Stars</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-shrink-0">
                                                    <div class="chat-avtar">
                                                        <img class="img-radius img-fluid wid-40" src="<?= BASE_PATH ?>assets/images/user/avatar-1.jpg" alt="User image" />
                                                        <div class="bg-success chat-badge"></div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1">Harriet Wilson</h6>
                                                    <p class="text-muted text-sm mb-1">2 hour ago</p>
                                                    <div class="star">
                                                        <i class="fas fa-star text-warning"></i>
                                                        <i class="fas fa-star text-warning"></i>
                                                        <i class="fas fa-star text-warning"></i>
                                                        <i class="fas fa-star-half-alt text-warning"></i>
                                                        <i class="far fa-star text-muted"></i>
                                                    </div>
                                                    <p class="mb-0 text-muted mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                                        industry's standard dummy text ever since the 1500.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-shrink-0">
                                                    <div class="chat-avtar">
                                                        <img class="img-radius img-fluid wid-40" src="../assets/images/user/avatar-2.jpg" alt="User image" />
                                                        <div class="bg-success chat-badge"></div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1">Lou Olson</h6>
                                                    <p class="text-muted text-sm mb-1">2 hour ago</p>
                                                    <div class="star">
                                                        <i class="fas fa-star text-warning"></i>
                                                        <i class="fas fa-star text-warning"></i>
                                                        <i class="fas fa-star-half-alt text-warning"></i>
                                                        <i class="far fa-star text-muted"></i>
                                                        <i class="far fa-star text-muted"></i>
                                                    </div>
                                                    <p class="mb-2 text-muted mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                                        industry's standard dummy text ever since the 1500.</p>
                                                    <a href="#" class="link-primary mb-1">https://phoenixcoded.net/</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center mt-3">
                                        <button class="btn btn-link-primary">View more comments</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="presentations">
                <h2>Presentaciones del Producto</h2>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Código</th>
                            <th>Stock</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>comi01</td>
                            <td>10</td>
                            <td>$5,699.99</td>
                            <td>
                                <div class="action-btns">
                                    <button>Editar</button>
                                    <button>Eliminar</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>comi02</td>
                            <td>15</td>
                            <td>$5,999.99</td>
                            <td>
                                <div class="action-btns">
                                    <button>Editar</button>
                                    <button>Eliminar</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button>Añadir Nueva Presentación</button>
            </section>
            <section class="orders">
                <h2>Órdenes Relacionadas</h2>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Folio</th>
                            <th>Total</th>
                            <th>Estado de Pago</th>
                            <th>Dirección de Envío</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>82712</td>
                            <td>$8,999.99</td>
                            <td>Pagada</td>
                            <td>Calle artículo 743, 123, La Paz</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>82718</td>
                            <td>$9,599.97</td>
                            <td>No Pagada</td>
                            <td>No especificada</td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <section class="addresses">
                <h2>Direcciones Registradas</h2>
                <ul>
                    <li>
                        <span class="address">Calle artículo 743, 123, La Paz, Baja California Sur, 23088</span>
                        <div class="address-actions">
                            <a href="#" class="edit-btn"><i class="ti ti-edit f-20"></i> Editar</a>
                            <a href="#" class="delete-btn"><i class="ti ti-trash f-20"></i> Eliminar</a>
                        </div>
                    </li>
                </ul>
                <button>Añadir Nueva Dirección</button>
            </section>
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


    <!-- [Page Specific JS] start -->
    <script>
        // scroll-block
        var tc = document.querySelectorAll('.scroll-block');
        for (var t = 0; t < tc.length; t++) {
            new SimpleBar(tc[t]);
        }
        // quantity start
        function increaseValue(temp) {
            var value = parseInt(document.getElementById(temp).value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById(temp).value = value;
        }

        function decreaseValue(temp) {
            var value = parseInt(document.getElementById(temp).value, 10);
            value = isNaN(value) ? 0 : value;
            value < 1 ? (value = 1) : '';
            value--;
            document.getElementById(temp).value = value;
        }
    </script>
</body>

</html>