<?php

define('BASE_PATH', 'http://localhost/Proyecto-4ta-Unidad/template/');

require_once "UserController.php";
$userController = new UserController();
$detallesUsuario = $userController->obtenerDetallesUsuarioEspecifico();
$_SESSION['detallesUsuario'] = $detallesUsuario;
