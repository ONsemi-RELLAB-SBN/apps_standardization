<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include_once "class/db.php"
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
        <!-- ======= Styles ====== -->
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <!-- =============== Navigation ================ -->
        <div class="container">
            <div class="navigation">
                <ul>
                    <li>
                        <a href="#">
                            <span class="icon">
                                <ion-icon name="logo-android"></ion-icon>
                            </span>
                            <span class="title">STANDARDIZATION PAGE</span>
                        </a>
                    </li>
                    <li>
                        <a href="menu.php#">
                            <span class="icon">
                                <ion-icon name="home-outline"></ion-icon>
                            </span>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="parameter.php#">
                            <span class="icon">
                                <ion-icon name="people-outline"></ion-icon>
                            </span>
                            <span class="title">Parameter Master</span>
                        </a>
                    </li>
                    <li>
                        <a href="parameter_detail.php#">
                            <span class="icon">
                                <ion-icon name="chatbubble-outline"></ion-icon>
                            </span>
                            <span class="title">Parameter Details</span>
                        </a>
                    </li>
                    <li>
                        <a href="form.php#">
                            <span class="icon">
                                <ion-icon name="help-outline"></ion-icon>
                            </span>
                            <span class="title">Form</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- ========================= Main ==================== -->
            <div class="main">
                <div class="topbar">
                    <div class="toggle">
                        <ion-icon name="menu-outline"></ion-icon>
                    </div>
<!--                    <div class="search">
                        <label>
                            <input type="text" placeholder="Search here">
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                    </div>-->
                    <div class="user">
                        <img src="image/user.png" alt="">
                    </div>
                </div>

                <!-- ================ Order Details List ================= -->
                <div class="details">
                    <div class="container">
                    <div class="d-flex bd-highlight mb-3">
                        <div class="me-auto p-2 bd-highlight"><h2>Users</div>
                        <div class="p-2 bd-highlight">
                            <button type="button" class="btn btn-secondary" onclick="showUserCreateBox()">Create</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Avatar</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody id="mytable">
                                <tr>
                                    <?php
                                        $get_slides = "SELECT * FROM gest_parameter_master ORDER BY ID ASC";
                                        $run_slides = mysqli_query($con, $get_slides);

                                        while ($row_slides = mysqli_fetch_array($run_slides)):
                                            $name = $row_slides['name'];
                                            $desc = $row_slides['code'];
                                            $link = $row_slides['remark'];
                                            $logo = $row_slides['flag'];
                                            ?>
                                        <th scope="row"></th>
                                        <th scope="row"><?= $name; ?></th>
                                        <th scope="row"><?= $desc; ?></th>
                                        <th scope="row"><?= $link; ?></th>
                                        <th scope="row"></th>
                                        <th scope="row"></th>
                                        <?php
                                        endwhile;
                                    ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                    <!-- ================= New Customers ================ -->
                </div>
            </div>
        </div>
        <!-- =========== Scripts =========  -->
        <script src="js/main.js"></script>
        <!-- ====== ionicons ======= -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>