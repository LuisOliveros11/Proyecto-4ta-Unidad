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
    ?>


    <link rel="stylesheet" href="assets/css/viewClient.css">
</head>

<body>
    <div class="pc-container">
        <div class="pc-content">
            <div class="container">
                <section class="client-info">
                    <h1>Detalle del Cliente</h1>
                    <div class="row">
                        <div class="col-6">
                            <p><strong>Nombre:</strong> Marshall Parker</p>
                            <p><strong>Correo Electrónico:</strong> mapa_46@gmail.com</p>
                        </div>
                        <div class="col-6">
                            <p><strong>Teléfono:</strong> 6127384765</p>
                            <p><strong>Estado de Suscripción:</strong> Suscrito</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p><strong>Nivel del Cliente:</strong> Normal</p>
                        </div>
                        <div class="col-6">
                            <p><strong>Descuento:</strong> 0%</p>
                        </div>
                    </div>
                </section>
                <section class="orders">
                    <h2>Órdenes del Cliente</h2>
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
                <section class="widgets">
                    <div class="widget">
                        <h3>Total Gastado</h3>
                        <p>$8,999.99</p>
                    </div>
                    <div class="widget">
                        <h3>Órdenes Pagadas</h3>
                        <p>1</p>
                    </div>
                    <div class="widget">
                        <h3>Órdenes Pendientes</h3>
                        <p>1</p>
                    </div>
                </section>
                <section class="addresses">
                    <h2>Direcciones Registradas</h2>
                    <ul>
                        <span class="address">Calle artículo 743, 123, La Paz, Baja California Sur, 23088</span>
                        <li class="list-inline-item"><a href="#"
                                class="avtar avtar-s btn-link-success btn-pc-default"><i
                                    class="ti ti-edit f-20"></i></a></li>
                        <li class="list-inline-item"><a href="#"
                                class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                    class="ti ti-trash f-20"></i></a></li>
                        </li>
                    </ul>
                    <button>Añadir Nueva Dirección</button>
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


    <script>
        document.querySelector('.btn-print-invoice').addEventListener('click', function() {
            var link2 = document.createElement('link');
            link2.innerHTML =
                '<style>@media print{*,::after,::before{text-shadow:none!important;box-shadow:none!important}a:not(.btn){text-decoration:none}abbr[title]::after{content:" ("attr(title) ")"}pre{white-space:pre-wrap!important}blockquote,pre{border:1px solid #adb5bd;page-break-inside:avoid}thead{display:table-header-group}img,tr{page-break-inside:avoid}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}@page{size:a3}body{min-width:992px!important}.container{min-width:992px!important}.page-header,.pc-sidebar,.pc-mob-header,.pc-header,.pct-customizer,.modal,.navbar{display:none}.pc-container{top:0;}.invoice-contact{padding-top:0;}@page,.card-body,.card-header,body,.pcoded-content{padding:0;margin:0}.badge{border:1px solid #000}.table{border-collapse:collapse!important}.table td,.table th{background-color:#fff!important}.table-bordered td,.table-bordered th{border:1px solid #dee2e6!important}.table-dark{color:inherit}.table-dark tbody+tbody,.table-dark td,.table-dark th,.table-dark thead th{border-color:#dee2e6}.table .thead-dark th{color:inherit;border-color:#dee2e6}}</style>';
            document.getElementsByTagName('head')[0].appendChild(link2);
            window.print();
        });
    </script>

</body>

</html>