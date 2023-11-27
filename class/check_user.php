<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


function checkUser($user, $link) {
    $servername = "localhost";
    $username = "ayep";
    $password = "mysql@2023";
    $dbname = "gest";
    $message = '';
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sqlUser = "SELECT * FROM gest_user WHERE username = '$user'";
    
    echo '<br>' . $sqlUser. '<br>';
    $result = $conn->query($sqlUser);

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
    $conn->close();
    return $message;
}