<?php

define('BASE_PATH', 'http://www.proyecto4taunidad.freesite.online/');

require_once "UserController.php";
$userController = new UserController();
$detallesUsuario = $userController->obtenerDetallesUsuarioEspecifico();
$todosUsuarios = $userController->obtenerUsuarios();
$_SESSION['detallesUsuario'] = $detallesUsuario;
$_SESSION['todosUsuarios'] = $todosUsuarios;
