<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
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
                        <a href="#">
                            <span class="icon">
                                <ion-icon name="chatbubble-outline"></ion-icon>
                            </span>
                            <span class="title">Parameter Details</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
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
                    <div class="search">
                        <label>
                            <input type="text" placeholder="Search here">
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                    </div>
                    <div class="user">
                        <img src="image/user.png" alt="">
                    </div>
                </div>

                <!-- ================ Order Details List ================= -->
                <div class="details">
                    <div class="recentOrders">
                        <div class="cardHeader">
                            <h2>Recent Orders</h2>
                            <a href="#" class="btn">View All</a>
                        </div>

                        <table>
                            <thead>
                                <tr>
                                    <td>Name</td>
                                    <td>Price</td>
                                    <td>Payment</td>
                                    <td>Status</td>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Star Refrigerator</td>
                                    <td>$1200</td>
                                    <td>Paid</td>
                                    <td><span class="status delivered">Delivered</span></td>
                                </tr>

                                <tr>
                                    <td>Dell Laptop</td>
                                    <td>$110</td>
                                    <td>Due</td>
                                    <td><span class="status pending">Pending</span></td>
                                </tr>

                                <tr>
                                    <td>Apple Watch</td>
                                    <td>$1200</td>
                                    <td>Paid</td>
                                    <td><span class="status return">Return</span></td>
                                </tr>

                                <tr>
                                    <td>Addidas Shoes</td>
                                    <td>$620</td>
                                    <td>Due</td>
                                    <td><span class="status inProgress">In Progress</span></td>
                                </tr>

                                <tr>
                                    <td>Star Refrigerator</td>
                                    <td>$1200</td>
                                    <td>Paid</td>
                                    <td><span class="status delivered">Delivered</span></td>
                                </tr>

                                <tr>
                                    <td>Dell Laptop</td>
                                    <td>$110</td>
                                    <td>Due</td>
                                    <td><span class="status pending">Pending</span></td>
                                </tr>

                                <tr>
                                    <td>Apple Watch</td>
                                    <td>$1200</td>
                                    <td>Paid</td>
                                    <td><span class="status return">Return</span></td>
                                </tr>

                                <tr>
                                    <td>Addidas Shoes</td>
                                    <td>$620</td>
                                    <td>Due</td>
                                    <td><span class="status inProgress">In Progress</span></td>
                                </tr>
                            </tbody>
                        </table>
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