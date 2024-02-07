<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Delete Record Confirmation</title>
        <link rel="stylesheet" href="../css/skeleton.css"/>
    </head>
    <body>
        <?php
        // Check if a record ID is provided
        include "../class/db.php";
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Retrieve the record from the database
            $query = "SELECT * FROM gest_config WHERE id = $id";
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_assoc($result);

            // Display the record details and confirmation form
            if ($row) {
                echo '<h4 style="border-left: none">Are you sure you want to delete this record?</h4>';
                echo '<p>Name: ' . $row['name'] . '</p>';
                echo '<p>Value: ' . $row['value'] . '</p>';
                echo '<form method="post" action="config_delete.php?id='.$id.'">';
                echo '<input type="hidden" name="id" value="' . $id . '">';
                echo '<input type="submit" name="confirm" value="Yes">';
                echo '<input type="submit" name="cancel" value="No">';
                echo '</form>';
            } else {
                echo 'Record not found.';
            }
        } else {
            echo 'Invalid record ID.';
        }

        // Handle the delete operation
        if (isset($_POST['confirm'])) {
            $id = $_GET['id'];
            $sql = "DELETE FROM `gest_config` WHERE id = $id";
            $result = mysqli_query($con, $sql);

            if ($result) {
                header("Location: config_list.php?msg=Configuration deleted successfully");
            } else {
                echo "Failed: " . mysqli_error($conn);
            }
        } else if (isset($_POST['cancel'])) {
            header("Location: config_list.php?msg=Operation Cancelled");
        }
        ?>
    </body>
</html>