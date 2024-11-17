<!doctype html>
<html lang="en">
<!-- [Head] start -->

<head>
    <?php
    include "app/config.php";
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
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Client</a></li>
                                <li class="breadcrumb-item" aria-current="page">Create</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Create</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-between align-items-center mb-3 g-3">
                                <div class="col-sm-auto">
                                    <form action="app/ClientController.php" method="post">
                                        <h3>Add client</h3>

                                        <label for="client_id">ID Cliente:</label>
                                        <input type="text" id="client_id" name="client_id" value="" readonly><br><br>

                                        <label for="client_name">Name:</label>
                                        <input type="text" id="client_name" name="client_name" value="" readonly><br><br>

                                        <label for="client_email">Email:</label>
                                        <input type="email" id="client_email" name="client_email" value="" readonly><br><br>

                                        <label for="client_phone">Phone:</label>
                                        <input type="text" id="client_phone" name="client_phone" value="" readonly><br><br>

                                        <label for="client_subscription">Status:</label>
                                        <input type="text" id="client_subscription" name="client_subscription" value="" readonly><br><br>

                                        <label for="client_level">Client Level:</label>
                                        <input type="text" id="client_level" name="client_level" value="" readonly><br><br>

                                        <input type="submit" name="addClient" value="Add Client">
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

</body>

</html>