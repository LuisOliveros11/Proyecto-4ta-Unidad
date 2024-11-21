<!doctype html>
<html lang="en">
<link rel="stylesheet" href="assets/css/cupon.css">

<head>
    <?php
    include "app/config.php";
    session_start();
    include "views/layouts/sidebar.php";
    include "views/layouts/head.php";
    include "views/layouts/navbar.php";
    ?>
</head>

<body>
    <div class="pc-container">
        <div class="pc-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Administración de cupones</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card mt-4 mx-auto p-4 bg-light">
                            <div class="card-body bg-light">
                                <div class="container">
                                    <form id="combined-form" role="form">
                                        <div class="controls">
                                            <h4 class="mt-4 mb-4">Formulario de Creación de Cupones</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="coupon_name">Nombre del cupón *</label>
                                                        <input id="coupon_name" type="text" name="coupon_name" class="form-control" placeholder="Ejemplo: Cupón 20% Descuento" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="coupon_code">Código del cupón *</label>
                                                        <input id="coupon_code" type="text" name="coupon_code" class="form-control" placeholder="Ejemplo: 20OFF2024" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="discount">Descuento (%) *</label>
                                                        <input id="discount" type="number" name="discount" class="form-control" placeholder="Ejemplo: 20" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="min_amount">Monto mínimo *</label>
                                                        <input id="min_amount" type="number" name="min_amount" class="form-control" placeholder="Ejemplo: 100" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="max_uses">Máximo de usos *</label>
                                                        <input id="max_uses" type="number" name="max_uses" class="form-control" placeholder="Ejemplo: 50" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="start_date">Fecha de inicio *</label>
                                                        <input id="start_date" type="date" name="start_date" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="end_date">Fecha de fin *</label>
                                                        <input id="end_date" type="date" name="end_date" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-success btn-block">Validar cupon</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <section id="bajas">
                                <h2>Bajas</h2>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Código</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>11</td>
                                            <td>Cupon OP 20%</td>
                                            <td>20PERCEN22</td>
                                            <td class="actions">
                                                <button>Eliminar</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </section>
                            <section id="modificaciones">
                                <h2>Modificaciones</h2>
                                <p>Seleccione un cupón para editar.</p>
                            </section>
                            <section id="consultas">
                                <h2>Consultas</h2>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Código</th>
                                            <th>Descuento</th>
                                            <th>Usos</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>11</td>
                                            <td>Cupon OP 20%</td>
                                            <td>20PERCEN22</td>
                                            <td>20%</td>
                                            <td>0/100</td>
                                            <td class="actions">
                                                <button>Ver Detalle</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </section>
                            <section id="detalle" class="detail">
                                <h2>Vista de Detalle</h2>
                                <p><strong>Nombre del cupón:</strong> Cupon OP 20%</p>
                                <p><strong>Código:</strong> 20PERCEN22</p>
                                <p><strong>Descuento:</strong> 20%</p>
                                <p><strong>Inicio:</strong> 2022-10-04</p>
                                <p><strong>Fin:</strong> 2022-10-14</p>
                                <p><strong>Usos:</strong> 0/100</p>
                                <p><strong>Requiere primera compra:</strong> Sí</p>
                            </section>
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