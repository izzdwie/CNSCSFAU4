<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CNSC SFAU</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Add Font Awesome CSS link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block sidebar">
                <!-- <div class="sidebar-sticky"> -->
                    <div class="logo">
                        <img src="asset/sfaulogo.png" style="text-align: center; padding: 5px;">
                        <h4 style="text-align: center;">CNSC SFAU</h4>
                    </div>
                    <ul class="nav flex-column">
                        <?php
                        $sidebarItems = [
                            ['Dashboard', 'fas fa-tachometer-alt', 'dashboard.php'],
                            ['Profile', 'profile.php', [
                                ['Masterlist', 'Masterlist.php'],
                                ['Verification', 'Verfication.php']
                            ]],
                            ['Reports', 'fas fa-chart-bar', 'reports.php'],
                            ['User Management', 'fas fa-users', [
                                ['Users List', 'user_list.php'],
                                ['Roles', 'roles.php'],
                                ['Permissions', 'permissions.php'],
                            ]]
                        ];
                        ?>
                        <?php foreach ($sidebarItems as $item) : ?>
                            <li class="nav-item">
                                <?php if (is_array($item[2])) : ?>
                                    <!-- Dropdown item with icon -->
                                    <div class="dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="<?php echo $item[1]; ?>"></i> <?php echo $item[0]; ?>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <?php foreach ($item[2] as $submenu) : ?>
                                                <a class="dropdown-item" href="<?php echo $submenu[1]; ?>">
                                                    <?php echo $submenu[0]; ?>
                                                </a>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <!-- Regular item without dropdown -->
                                    <a class="nav-link" href="<?php echo $item[2]; ?>">
                                        <i class="<?php echo $item[1]; ?>"></i> <?php echo $item[0]; ?>
                                    </a>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <!-- </div> -->
            </nav>
            <!-- Rest of your content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <!-- Your page content goes here -->
            </main>
        </div>
    </div>

    <!-- Add Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
