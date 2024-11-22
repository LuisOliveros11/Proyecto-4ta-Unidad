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
</head>

<>
    <div class="pc-container">
        <div class="pc-content">
            <div class="container my-5">
                <h1 class="text-center">Gestión de Pedidos</h1>
                <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="altas-tab" data-toggle="tab" href="#altas" role="tab">Altas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="bajas-tab" data-toggle="tab" href="#bajas" role="tab">Bajas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="modificaciones-tab" data-toggle="tab" href="#modificaciones" role="tab">Modificaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="consultas-tab" data-toggle="tab" href="#consultas" role="tab">Consultas</a>
                    </li>
                </ul>

                <div class="tab-content mt-4" id="myTabContent">
                    <div class="tab-pane fade show active" id="altas" role="tabpanel">
                        <h3>Alta de Pedido</h3>
                        <form>
                            <div class="form-group">
                                <label for="altaFolio">Folio</label>
                                <input type="text" class="form-control" id="altaFolio" placeholder="Ingrese el folio">
                            </div>
                            <div class="form-group">
                                <label for="altaTotal">Total</label>
                                <input type="number" class="form-control" id="altaTotal" placeholder="Ingrese el total">
                            </div>
                            <div class="form-group">
                                <label for="altaCliente">Cliente</label>
                                <input type="text" class="form-control" id="altaCliente" placeholder="Nombre del cliente">
                            </div>
                            <div class="form-group">
                                <label for="altaDireccion">Dirección</label>
                                <input type="text" class="form-control" id="altaDireccion" placeholder="Dirección de envío">
                            </div>
                            <button type="submit" class="btn btn-primary">Registrar Pedido</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="bajas" role="tabpanel">
                        <h3>Baja de Pedido</h3>
                        <form>
                            <div class="form-group">
                                <label for="bajaFolio">Folio del Pedido</label>
                                <input type="text" class="form-control" id="bajaFolio" placeholder="Ingrese el folio del pedido a eliminar">
                            </div>
                            <button type="submit" class="btn btn-danger">Eliminar Pedido</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="modificaciones" role="tabpanel">
                        <h3>Modificar Pedido</h3>
                        <form>
                            <div class="form-group">
                                <label for="modFolio">Folio</label>
                                <input type="text" class="form-control" id="modFolio" placeholder="Ingrese el folio del pedido a modificar">
                            </div>
                            <div class="form-group">
                                <label for="modTotal">Nuevo Total</label>
                                <input type="number" class="form-control" id="modTotal" placeholder="Ingrese el nuevo total">
                            </div>
                            <div class="form-group">
                                <label for="modEstado">Estado</label>
                                <select class="form-control" id="modEstado">
                                    <option>Pendiente</option>
                                    <option>Pagado</option>
                                    <option>Cancelado</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-warning">Guardar Cambios</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="consultas" role="tabpanel">
                        <h3>Consultas</h3>
                        <div class="form-group">
                            <label for="consultaFechaInicio">Fecha de Inicio</label>
                            <input type="date" class="form-control" id="consultaFechaInicio">
                        </div>
                        <div class="form-group">
                            <label for="consultaFechaFin">Fecha de Fin</label>
                            <input type="date" class="form-control" id="consultaFechaFin">
                        </div>
                        <div class="form-group">
                            <label for="consultaEstado">Estado</label>
                            <select class="form-control" id="consultaEstado">
                                <option value="">Todos</option>
                                <option>Pendiente</option>
                                <option>Pagado</option>
                                <option>Cancelado</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-info">Consultar</button>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



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