<?php

define('BASE_PATH', 'http://localhost/Proyecto-4ta-Unidad/template/');

require_once "UserController.php";
$userController = new UserController();
$detallesUsuario = $userController->obtenerDetallesUsuarioEspecifico();
$todosUsuarios = $userController->obtenerUsuarios();
$_SESSION['detallesUsuario'] = $detallesUsuario;
$_SESSION['todosUsuarios'] = $todosUsuarios;
