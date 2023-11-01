<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

// LDAP server settings
//ldap.url=ldap://ldap.onsemi.com:389/o=ondex
//ldap.userDnPatterns=cn={0},ou=seremban,ou=onsemi
$ldapServer = "ldap://ldap.onsemi.com:389/o=ondex"; // Your LDAP server URL
$ldapBaseDN = "dc=example,dc=com"; // Your LDAP base DN
$ldapAdminUser = "cn={0},ou=seremban,ou=onsemi"; // LDAP admin username
$ldapAdminPassword = "admin_password"; // LDAP admin password
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Connect to the LDAP server
    $ldapConn = ldap_connect($ldapServer);

    if ($ldapConn) {
        // Binding to LDAP server
        $bind = ldap_bind($ldapConn, $ldapAdminUser, $ldapAdminPassword);

        if ($bind) {
            // Search for the user in LDAP
            $filter = "(uid=" . $username . ")";
            $result = ldap_search($ldapConn, $ldapBaseDN, $filter);
            $entries = ldap_get_entries($ldapConn, $result);

            if ($entries["count"] > 0) {
                // Try to authenticate the user
                $userDN = $entries[0]["dn"];
                if (ldap_bind($ldapConn, $userDN, $password)) {
                    // Authentication successful
                    echo "Login successful. Welcome, " . $username;
                } else {
                    // Authentication failed
                    echo "Invalid credentials. Please try again.";
                }
            } else {
                // User not found
                echo "User not found in LDAP directory.";
            }
        } else {
            // LDAP bind failed
            echo "LDAP bind failed. Check your admin credentials.";
        }

        // Close LDAP connection
        ldap_close($ldapConn);
    } else {
        // LDAP connection failed
        echo "LDAP connection failed. Check your server settings.";
    }
}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>FORM LOGIN</title>
        <meta name="description" content="Circular Navigation Styles - Building a Circular Navigation with CSS Transforms | Codrops " />
        <meta name="keywords" content="css transforms, circular navigation, round navigation, circular menu, tutorial" />
        <meta name="author" content="Ayep" />
        <link rel="shortcut icon" href="image/logo/onsemi_logo.ico">

        <link rel="stylesheet" type="text/css" href="sample/sample02.css">

        <style>
            .button-login {
                transition-duration: 0.4s;
                background-color: white;
                color: black;
                border: 2px solid orange;
                border-radius: 10px;
                padding: 11px 50px;
                transition: all 0.2s linear 0s;
            }

            .button-login:hover {
                box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
                background-color: orange;
                color: white;
                /*text-indent: 30px;*/
            }

            .button-login:active {
                background-color: red;
                box-shadow: 0 5px #666;
                transform: translateY(4px);
            }

            .button-login:before {
                content: "";
                font-family: FontAwesome;
                display: flex;
                align-items: center;
                justify-content: center;
                position: absolute;
                top: 0;
                left: 0px;
                height: 100%;
                width: 30px;
                background-color: rgba(255, 255, 255, 0.3);
                border-radius: 0 50% 50% 0;
                transform: scale(0, 1);
                transform-origin: left center;
                transition: all 0.2s linear 0s;
            }

            .button-login:hover:before {
                transform: scale(1, 1);
                text-indent: 0;
            }
        </style>

        <script type="text/javascript">

        </script>

    </head>
    <body>
        <div class="container" onclick="onclick">
            <div class="top"></div>
            <div class="bottom"></div>
            <div class="center">
                <h2 style="color:orange">Please Sign In</h2>
                <input class="w3-input w3-border w3-animate-input" type="text" placeholder="Username"/>
                <br>
                <input class="w3-input w3-border" type="password" placeholder="Password"/>
                <br>
                <!--<h2>&nbsp;</h2>-->
                <div>
                    <input type="submit" value="Login" class="button-login">
                    <a href="login.php" class="button-login">MASUK</a>
                </div>
            </div>
        </div>
    </body>
</html>