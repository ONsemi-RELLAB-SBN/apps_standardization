<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
/*
  // LDAP server settings
  $ldapServer = "ldap://ldap.example.com"; // Your LDAP server URL
  $ldapBaseDN = "dc=example,dc=com"; // Your LDAP base DN
  $ldapAdminUser = "cn=admin,dc=example,dc=com"; // LDAP admin username
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
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Form Login</title>
        <link rel="stylesheet" type="text/css" href="css/skeleton.css">
        <!--<link rel="stylesheet" type="text/css" href="sample/sample.css">-->
        <!--<script src="sample/sample.js"></script>-->
    </head>
    <body>
        <!--<h2>Login with LDAP</h2>-->
        <form method="post" action="">
            <div>
                <!--                <label for="username">Username:</label>
                                <input type="text" name="username" id="username" required><br>
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="password" required><br>
                                <input type="submit" value="Login">-->
            </div>
            <div>
                <!--                <div class="scroll-down">SCROLL DOWN
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                    <path d="M16 3C8.832031 3 3 8.832031 3 16s5.832031 13 13 13 13-5.832031 13-13S23.167969 3 16 3zm0 2c6.085938 0 11 4.914063 11 11 0 6.085938-4.914062 11-11 11-6.085937 0-11-4.914062-11-11C5 9.914063 9.914063 5 16 5zm-1 4v10.28125l-4-4-1.40625 1.4375L16 23.125l6.40625-6.40625L21 15.28125l-4 4V9z"/> 
                                    </svg>
                                </div>
                                <div class="container"></div>
                                <div class="modal">
                                    <div class="modal-container">
                                        <div class="modal-left">
                                            <h1 class="modal-title">Welcome!</h1>
                                            <p class="modal-desc">Fanny pack hexagon food truck, street art waistcoat kitsch.</p>
                                            <div class="input-block">
                                                <label for="email" class="input-label">Email</label>
                                                <input type="email" name="email" id="email" placeholder="Email">
                                            </div>
                                            <div class="input-block">
                                                <label for="password" class="input-label">Password</label>
                                                <input type="password" name="password" id="password" placeholder="Password">
                                            </div>
                                            <div class="modal-buttons">
                                                <a href="" class="">Forgot your password?</a>
                                                <button class="input-button">Login</button>
                                            </div>
                                            <p class="sign-up">Don't have an account? <a href="#">Sign up now</a></p>
                                        </div>
                                        <div class="modal-right">
                                            <img src="https://images.unsplash.com/photo-1512486130939-2c4f79935e4f?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=dfd2ec5a01006fd8c4d7592a381d3776&auto=format&fit=crop&w=1000&q=80" alt="">
                                        </div>
                                        <button class="icon-button close-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                                            <path d="M 25 3 C 12.86158 3 3 12.86158 3 25 C 3 37.13842 12.86158 47 25 47 C 37.13842 47 47 37.13842 47 25 C 47 12.86158 37.13842 3 25 3 z M 25 5 C 36.05754 5 45 13.94246 45 25 C 45 36.05754 36.05754 45 25 45 C 13.94246 45 5 36.05754 5 25 C 5 13.94246 13.94246 5 25 5 z M 16.990234 15.990234 A 1.0001 1.0001 0 0 0 16.292969 17.707031 L 23.585938 25 L 16.292969 32.292969 A 1.0001 1.0001 0 1 0 17.707031 33.707031 L 25 26.414062 L 32.292969 33.707031 A 1.0001 1.0001 0 1 0 33.707031 32.292969 L 26.414062 25 L 33.707031 17.707031 A 1.0001 1.0001 0 0 0 32.980469 15.990234 A 1.0001 1.0001 0 0 0 32.292969 16.292969 L 25 23.585938 L 17.707031 16.292969 A 1.0001 1.0001 0 0 0 16.990234 15.990234 z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <button class="modal-button">Click here to login</button>
                                </div>-->
            </div>
            <div>
                <div class="login-wrap">
                    <div class="login-html">
                        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
                        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                        <div class="login-form">
                            <div class="sign-in-htm">
                                <div class="group-login">
                                    <label for="user" class="label-login">Username</label>
                                    <input id="user" type="text" class="input-login">
                                </div>
                                <div class="group-login">
                                    <label for="pass" class="label-login">Password</label>
                                    <input id="pass" type="password" class="input-login" data-type="password">
                                </div>
                                <div class="group-login">
                                    <input id="check" type="checkbox" class="check" checked>
                                    <label for="check"><span class="icon-login"></span> Keep me Signed in</label>
                                </div>
                                <div class="group-login">
                                    <input type="submit" class="button-login" value="Sign In">
                                </div>
                                <div class="hr"></div>
                                <div class="foot-lnk">
                                    <a href="#forgot">Forgot Password?</a>
                                </div>
                            </div>
                            <div class="sign-up-htm">
                                <div class="group-login">
                                    <label for="user" class="label-login">Username</label>
                                    <input id="user" type="text" class="input-login">
                                </div>
                                <div class="group-login">
                                    <label for="pass" class="label-login">Password</label>
                                    <input id="pass" type="password" class="input-login" data-type="password">
                                </div>
                                <div class="group-login">
                                    <label for="pass" class="label-login">Repeat Password</label>
                                    <input id="pass" type="password" class="input-login" data-type="password">
                                </div>
                                <div class="group-login">
                                    <label for="pass" class="label-login">Email Address</label>
                                    <input id="pass" type="text" class="input-login">
                                </div>
                                <div class="group-login">
                                    <input type="submit " class="button-login" value="Sign Up">
                                </div>
                                <div class="hr"></div>
                                <div class="foot-lnk">
                                    <label for="tab-1">Already Member?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>