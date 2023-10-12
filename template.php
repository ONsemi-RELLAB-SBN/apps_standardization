<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Side Navbar</title>
        <link rel="stylesheet" href="css/template.css" />
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    </head>
    <body>
        <section class="sidebar">
            <div class="nav-header">
                <p class="logo">Sample</p>
                <i class="bx bx-menu-alt-right btn-menu"></i>
            </div>
            <ul class="nav-links">
                <li>
                    <i class="bx bx-search search-btn"></i>
                    <input type="text" placeholder="search..." />
                    <span class="tooltip">Search</span>
                </li>
                <li>
                    <a href="#">
                        <i class="bx bx-home-alt-2"></i>
                        <span class="title">Home</span>
                    </a>
                    <span class="tooltip">Home</span>
                </li>
                <li>
                    <a href="#">
                        <i class="bx bx-phone-call"></i>
                        <span class="title">Calls</span>
                    </a>
                    <span class="tooltip">Calls</span>
                </li>
                <li>
                    <a href="#">
                        <i class="bx bx-bookmark"></i>
                        <span class="title">Bookmarks</span>
                    </a>
                    <span class="tooltip">Bookmarks</span>
                </li>
                <li>
                    <a href="#">
                        <i class="bx bx-wallet-alt"></i>
                        <span class="title">Wallet</span>
                    </a>
                    <span class="tooltip">Wallet</span>
                </li>
                <li>
                    <a href="#">
                        <i class="bx bxs-devices"></i>
                        <span class="title">Devices</span>
                    </a>
                    <span class="tooltip">Devices</span>
                </li>
                <li>
                    <a href="#">
                        <i class="bx bx-cog"></i>
                        <span class="title">Setting</span>
                    </a>
                    <span class="tooltip">Setting</span>
                </li>
            </ul>
            <div class="theme-wrapper">
                <i class="bx bxs-moon theme-icon"></i>
                <p>Dark Theme</p>
                <div class="theme-btn">
                    <span class="theme-ball"></span>
                </div>
            </div>
        </section>
        <section class="home">
            <p>Home Content Here</p>
        </section>

        <script>
            const btn_menu = document.querySelector(".btn-menu");
            const side_bar = document.querySelector(".sidebar");

            btn_menu.addEventListener("click", function () {
                side_bar.classList.toggle("expand");
                changebtn();
            });

            function changebtn() {
                if (side_bar.classList.contains("expand")) {
                    btn_menu.classList.replace("bx-menu", "bx-menu-alt-right");
                } else {
                    btn_menu.classList.replace("bx-menu-alt-right", "bx-menu");
                }
            }
        </script>
    </body>
</html>