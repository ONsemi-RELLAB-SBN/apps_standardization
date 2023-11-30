<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

function checkUser($username, $link) {

    include 'db.php';
    $message = '';

    $sqlUser = "SELECT * FROM gest_user WHERE username = '$username'";
    $result = $con->query($sqlUser);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data = $row['name'];
        }
    } else {
        $link .= '?viewonly=YES';
        $message = 'YOU DONT HAVE ACCESS TO THE SYSTEM, VIEW MODE ACTIVATED';
        echo "<script>
        alert('$message');
        window.location.href='$link';
        </script>";
    }
    $con->close();
    return $message;
}