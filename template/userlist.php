<?php
session_start();

// Incluir configuraciones y controlador
include "app/config.php";
include "views/layouts/sidebar.php";
include "views/layouts/head.php";
include "views/layouts/navbar.php";

// Verificar si los usuarios están en la sesión
if (!isset($_SESSION['todosUsuarios']) || empty($_SESSION['todosUsuarios'])) {
    echo "No se encontraron usuarios.";
    exit;
}

$todosUsuarios = $_SESSION['todosUsuarios'];
?>

<!doctype html>
<html lang="en">

<head>
    <title>User List</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
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
                <div class="col-sm-12">
                    <div class="card border-0 table-card user-profile-list">
                        <div class="card-body">
                            <div class="table-responsive">
                                <?php if (empty($todosUsuarios)): ?>
                                    <p>No hay usuarios disponibles en este momento.</p>
                                <?php else: ?>
                                    <table class="table table-hover" id="pc-dt-simple">
                                        <thead>
                                            <tr>
                                                <th>ID User</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Start date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($todosUsuarios as $usuario): ?>
                                                <tr>
                                                    <td><?= htmlspecialchars($usuario->id) ?></td>
                                                    <td>
                                                        <div class="d-inline-block align-middle">
                                                            <img src="<?php echo $detallesUsuario->avatar; ?>" 
                                                                alt="user image" 
                                                                class="img-radius align-top m-r-15" 
                                                                style="width: 40px" />
                                                            <div class="d-inline-block">
                                                                <h6 class="m-b-0"><?= htmlspecialchars($usuario->name) ?> <?= htmlspecialchars($usuario->lastname) ?></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><?= htmlspecialchars($usuario->role) ?></td>
                                                    <td><?= htmlspecialchars($usuario->email) ?></td>
                                                    <td><?= htmlspecialchars($usuario->phone_number) ?></td>
                                                    <td><?= htmlspecialchars($usuario->created_at) ?></td>
                                                    <td>
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item m-0">
                                                                <a href="edit_user.php?id=<?= htmlspecialchars($usuario->id) ?>" class="btn btn-primary">
                                                                    <i class="ti ti-pencil-alt"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item m-0">
                                                                <a href="delete_user.php?id=<?= htmlspecialchars($usuario->id) ?>" class="btn btn-danger">
                                                                    <i class="ti ti-trash"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "views/layouts/footer.php"; ?>
</body>

</html>
