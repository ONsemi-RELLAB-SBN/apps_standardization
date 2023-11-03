<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

   session_start();
   unset($_SESSION["user"]);
   unset($_SESSION["pass"]);
   
   echo 'You have cleaned session';
   header('Refresh: 1; URL = login.php');
?>