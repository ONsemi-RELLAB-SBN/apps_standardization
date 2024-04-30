<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
ob_start();
session_start();
$error_msg = " ";
$error_msg2 = " ";
$ldapServer = "ldap://ldap.onsemi.com:389/o=ONDex"; // Your LDAP server URL
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if (!empty($username)) {
        if (!empty($password)) {
            $userldap = "cn=" . $username . ",ou=ONSemi";
            $ldapConn = ldap_connect($ldapServer) or die("That LDAP-URI was not parseable");

            if ($ldapConn) {
                try {
                    $ldapbind = ldap_bind($ldapConn, $userldap, $password);
                    if ($ldapbind) {
                        echo "LDAP bind successful...";
                        header('location:main.php');
                        $_SESSION['username']= $username;
                        $_SESSION['password']= $password;
                        
                        include 'class/check_user.php';
                        log_user($username);
                    } else {
                        $error_msg = ldap_error($ldapConn);
                    }
                } catch (Exception $ex) {
                    echo "Error :" . $ex->getMessage();
                }
            }
        } else {
            $error_msg = "PLEASE KEY IN VALID PASSWORD";
        }
    } else {
        $error_msg = "PLEASE KEY IN USERNAME";
    }
}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>LOGIN - GEST</title>
        <meta name="description" content="Circular Navigation Styles - Building a Circular Navigation with CSS Transforms | Codrops " />
        <meta name="keywords" content="css transforms, circular navigation, round navigation, circular menu, tutorial" />
        <meta name="author" content="Ayep" />
        <link rel="shortcut icon" href="image/logo/onsemi_logo.ico">

        <link rel="stylesheet" type="text/css" href="css/login.css">

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
            
            .inner {
                -moz-transition: max-height 0.75s ease, padding 0.75s ease, opacity 0.325s ease-in-out;
                -webkit-transition: max-height 0.75s ease, padding 0.75s ease, opacity 0.325s ease-in-out;
                -ms-transition: max-height 0.75s ease, padding 0.75s ease, opacity 0.325s ease-in-out;
                transition: max-height 0.75s ease, padding 0.75s ease, opacity 0.325s ease-in-out;
                -moz-transition-delay: 0.25s;
                -webkit-transition-delay: 0.25s;
                -ms-transition-delay: 0.25s;
                transition-delay: 0.25s;
                padding: 3rem 2rem;
                max-height: 40rem;
                overflow: hidden;
            }
        </style>

        <script type="text/javascript">

        </script>

    </head>
    <body>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <!--<div>GEST</div>-->
            <div class="container" onclick="onclick">
<!--                <div class="top">
                    <br/><br/>
                    <br/><br/>
                    <br/><br/>
                    <br/><br/>
                    <h1 style="color:black; text-align: center">GEST</h1>
                    <h1 style="color:black; text-align: center">Global Equipment Standardization</h1>
                </div>-->
                <div class="top">
                    <div class="inner">
                        <br/><br/>
                        <!--<br/><br/>-->
                        <br/><br/>
                        <h1 style="color:orange; text-align: center">GLOBAL EQUIPMENT STANDARDIZATION</h1>
                        <p style="color:black; text-align: center; font-size: 48px; font-weight: bold;">GEST</p>    
                    </div>
                </div>
                <div class="bottom">
                    
                </div>
                <div class="center">
                    <!--<img src="img_girl.jpg" alt="Girl in a jacket">-->
                    <!--<h1 style="color:orange">Global Equipment Standardization</h1>-->
                    <h2 style="color:orange">Please Sign In</h2>
                    <input class="w3-input w3-border w3-animate-input" type="text" placeholder="Username" name="username"/>
                    <br>
                    <input class="w3-input w3-border" type="password" placeholder="Password" name="password"/>
                    <br>
                    <div>
                        <input type="submit" value="Login" class="button-login" name="login">
                    </div>
                    <?php echo "<br><span style=\"color:red;\">",$error_msg, " ", $error_msg2,"</span>" ?>
                </div>
            </div>
        </form>
    </body>
</html>