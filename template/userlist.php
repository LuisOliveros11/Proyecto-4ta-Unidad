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
    <!-- Incluir Bootstrap (si no lo has incluido en otro archivo) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
                                                            <img src="<?php echo $usuario->avatar; ?>" 
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
                                                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal<?= $usuario->id ?>">
                                                                    <i class="ti ti-pencil-alt"></i> Edit
                                                                </button>
                                                            </li>
                                                            <li class="list-inline-item m-0">
                                                                <a href="delete_user.php?id=<?= htmlspecialchars($usuario->id) ?>" class="btn btn-danger">
                                                                    <i class="ti ti-trash"></i> Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <!-- Modal Editar Usuario -->
                                                <div class="modal fade" id="editModal<?= $usuario->id ?>" tabindex="-1" aria-labelledby="editModalLabel<?= $usuario->id ?>" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="editModalLabel<?= $usuario->id ?>">Edit User</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="userlist.php" method="post">
                                                                    <input type="hidden" name="id" value="<?= htmlspecialchars($usuario->id) ?>">
                                                                    <div class="mb-3">
                                                                        <label for="name<?= $usuario->id ?>" class="form-label">Name</label>
                                                                        <input type="text" class="form-control" id="name<?= $usuario->id ?>" name="name" value="<?= htmlspecialchars($usuario->name) ?>" required>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="lastname<?= $usuario->id ?>" class="form-label">Lastname</label>
                                                                        <input type="text" class="form-control" id="lastname<?= $usuario->id ?>" name="lastname" value="<?= htmlspecialchars($usuario->lastname) ?>" required>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="email<?= $usuario->id ?>" class="form-label">Email</label>
                                                                        <input type="email" class="form-control" id="email<?= $usuario->id ?>" name="email" value="<?= htmlspecialchars($usuario->email) ?>" required>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="role<?= $usuario->id ?>" class="form-label">Role</label>
                                                                        <input type="text" class="form-control" id="role<?= $usuario->id ?>" name="role" value="<?= htmlspecialchars($usuario->role) ?>" required>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="phone_number<?= $usuario->id ?>" class="form-label">Phone</label>
                                                                        <input type="text" class="form-control" id="phone_number<?= $usuario->id ?>" name="phone_number" value="<?= htmlspecialchars($usuario->phone_number) ?>" required>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="password<?= $usuario->id ?>" class="form-label">Password</label>
                                                                        <input type="password" class="form-control" id="password<?= $usuario->id ?>" name="password" required>
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary" name="editar">Save Changes</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

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

    <!-- Incluir Bootstrap JS y Popper (si no los has incluido en otro archivo) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>
